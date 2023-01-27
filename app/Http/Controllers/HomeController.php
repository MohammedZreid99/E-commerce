<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\category;
use App\Models\Special_order;
use App\Models\Message;
use App\Models\Vendor;
Use \Carbon\Carbon;


class HomeController extends Controller
{
    public function redirect(){
        $user=auth()->user();
        $usertype=Auth::user()->usertype;
        $customerCount = user::where('usertype',0)->count();
        $productCount = product::count();
        $orderCount = order::where('status',Null)->count();
        $employeeCount = user::where('usertype',2)->count();
        $date = Carbon::now();
        $cash  = order::where('status',"delivered")->sum('total_price');
        $messageCount = message::count();
        $specialCount = Special_order::count();
        $vendorCount = vendor::where('accepted',1)->count();
        $newVendorCount = vendor::where('accepted',0)->count();
        if($usertype=='1'){
            return view('admin.home',compact('customerCount','productCount','orderCount','employeeCount','date','cash','messageCount','specialCount','vendorCount','newVendorCount'));
        }elseif($usertype=='2'){
            return view('employee.home',compact('productCount','orderCount','date','cash','messageCount','specialCount','vendorCount'));
        }else{
            $data = product::orderBy('id', 'desc')->where("action","Published")->limit(4)->get();
            $upcoming_product = product::orderBy('id', 'desc')->where("action","Upcoming Product")->limit(3)->get();
            $user=auth()->user();
            $cart=cart::where('user_id',$user->id)->get();
            $count=cart::where('user_id',$user->id)->count();
            return view('user.main',compact('data','count','upcoming_product'));
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $data = product::orderBy('id', 'desc')->where("action","Published")->limit(4)->get();
            $upcoming_product = product::orderBy('id', 'desc')->where("action","Upcoming Product")->limit(3)->get();
            return view('user.main',compact('data','upcoming_product'));
        }
    }

    public function search(Request $request){
        $user=auth()->user();
        $search=$request->search;
        $categories=category::all();
        if($user != null){
            $cart=cart::where('user_id',$user->id)->get();
            $count=cart::where('user_id',$user->id)->count();
            if($search == ''){
                $data = product::paginate(16);
                return view('user.ourproduct',compact('data','count','categories'));
            }
            $data=product::where('title','Like','%'.$search.'%')->get();
            return view('user.ourproduct',compact('data','count','categories'));
        }else{
            if($search == ''){
                $data = product::paginate(16);
                return view('user.ourproduct',compact('data','categories'));
            }
            $data=product::where('title','Like','%'.$search.'%')->get();
            return view('user.ourproduct',compact('data','categories'));
        }
    }

    public function addcart(Request $request , $id){
       if(Auth::id()){
            $user=auth()->user();
                $product=product::find($id);
                if($request->quantity <= $product->quantity){
                    $cart=new cart;
                    $cart->user_id =$user->id;
                    $cart->product_id =$product->id;
                    $cart->price=$request->quantity * $product->price;
                    $cart->quantity= $request->quantity;
                    $cart->save();
                    return redirect()->back();
                }else{
                    $request->session()->flash('msg', 'الكمية غير متاحة !');
                    return back();
                }
       }
       else{
        return redirect('login');
       }
      }

    public function showcart(){
        $user=auth()->user();
        if($user != null){
                $cart=cart::where('user_id',$user->id)->get();
                $count=cart::where('user_id',$user->id)->count();
                $totalPrice = $cart->sum('price');
                $totalQuantity = $cart->sum('quantity');
                $data=product::all();
                return view('user.showcart',compact('count','cart','data','totalPrice','totalQuantity'));
        }else{
            return redirect('login');
        }
    }

    public function ourproduct(){
        $data = product::paginate(16)->where("action","Published");
        $user=auth()->user();
        $categories=category::all();
        if($user != null){
                $hasData = true;
                $cart=cart::where('user_id',$user->id)->get();
                $count=cart::where('user_id',$user->id)->count();
                return view('user.ourproduct',compact('count','data','hasData','categories'));
        }else{
            $hasData = false;
            return view('user.ourproduct',compact('data','hasData','categories'));
        }
    }

    public function aboutus(){
        $user=auth()->user();
        if($user != null){
                $hasData = true;
                $cart=cart::where('user_id',$user->id)->get();
                $count=cart::where('user_id',$user->id)->count();
                return view('user.aboutus',compact('count','hasData'));
        }else{
            $hasData = false;
            return view('user.aboutus',compact('hasData'));
        }
    }

    public function contactus(){
        $user=auth()->user();
        if($user != null){
                $hasData = true;
                $cart=cart::where('user_id',$user->id)->get();
                $count=cart::where('user_id',$user->id)->count();
                return view('user.contactus',compact('count','hasData'));
        }else{
            $hasData = false;
            return view('user.contactus',compact('hasData'));
        }
    }

    public function deletecart($id){
        $data=cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function confirm(Request $request){
        $user=auth()->user();
        if($request->product_id != null){
                foreach($request->product_id as $key=>$product_id){
                    $order=new order;
                    $order->product_id=$request->product_id[$key];
                    $order->total_price=$request->price[$key];
                    $order->quantity=$request->quantity[$key];
                    if($request->moredetails != null){
                        $order->more_details=$request->moredetails;
                    }
                    $order->user_id=$user->id;
                    $order->save();
                }
                DB::table('carts')->where('user_id',$user->id)->delete();
        }else{
            return redirect()->back()->with('msg', 'السلة فارغة !');
        }
        return redirect()->back();
    }

    public function sendmessage(Request $request){
        $user=auth()->user();
        if($user != null){
                $message=new message;
                $message->subject= $request->subject;
                $message->message= $request->messagecontent;
                $message->user_id=$user->id;
                $message->save();
                return redirect()->back();
        }else{
            return redirect('login');
        }
    }
    public function viewcategory($name){
        $user=auth()->user();
        $categories=category::all();
        if($user != null){
                if(category::where("name" , $name)->exists()){
                    $cart=cart::where('user_id',$user->id)->get();
                    $count=cart::where('user_id',$user->id)->count();
                    $cat = category::where("name" , $name)->first();
                    $data=product::where("category_id", $cat->id)->where("action","Published")->get();
                    return view('user.viewcategory',compact('count','data','cat','categories'));
            }else{
                return view('auth.verify-email');
            }
        }else{
            if(category::where("name" , $name)->exists()){
                $cat = category::where("name" , $name)->first();
                $data=product::where("category_id", $cat->id)->where("action","Published")->get();
                return view('user.viewcategory',compact('data','cat','categories'));
            }else{
                return redirect()->back();;
            }
        }
    }

    public function sendspecialorder(Request $request){
        $user=auth()->user();
        if($user != null){
                try{
                    $image=$request->file;
                    $imagename =time().'.'.$image->getClientOriginalExtension();
                    $request->file->move('productimage', $imagename);

                    $order = new special_order([
                        'link' => $request->link,
                        'details' => $request->details,
                        'quantity' => $request->quantity,
                        'image' => $imagename,
                        'user_id'=> $user->id,
                    ]);
                    $order->save();
                    return redirect()->back();
                }catch(\EXeption $ex){
                        return $ex;
                }
        }else{
            return redirect('login');
        }
    }

    public function becomevendor(Request $request){
        $vendor=new vendor;
        $vendor->name= $request->name;
        $vendor->phone= $request->phone;
        $vendor->email=$request->email;
        $vendor->address=$request->address;
        $vendor->accepted=0;
        $vendor->category_provided=$request->category;
        $vendor->save();
        return redirect()->back();
    }
}
