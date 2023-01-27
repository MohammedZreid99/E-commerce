<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\order;
use App\Models\User;
use App\Models\Category;
use App\Models\Message;
use App\Models\Vendor;
use App\Models\Special_order;

use DB;

class AdminController extends Controller
{
    public function product(){
        $cat = DB::table('categories')->get();
        $vendors = DB::table('vendors')->where('accepted' , 1)->get();
        return view('admin.product',compact('cat','vendors'));
    }
    public function uploadproduct(Request $request){
        try{
            $image=$request->file;
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage', $imagename);

            $product = new product([
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description,
                'quantity' => $request->quantity,
                'image' => $imagename,
                'category_id' => $request->category_id,
                'vendor_id' => $request->vendor_id,
                'action' => $request->action,
            ]);
            $product->save();
            return redirect()->back()->with('msg', 'Upload product succeeded !');
        }catch(\EXeption $ex){
                return $ex;
        }
    }

    public function showproduct(){
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id){
        $data = product::withTrashed()->where('id',$id)->first();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $data->forceDelete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        return redirect()->back()->with('msg', 'Delete succeeded !');
    }
    public function updateproduct($id){
        $data=product::find($id);
        $category_name = category::find($data->category_id);
        $vendor_name = vendor::find($data->vendor_id);
        if($category_name != Null){
            $cat = DB::table('categories')
                            ->where('id',"!=",$data->category_id)
                            ->get();
            $vendors = DB::table('vendors')
                            ->where('id',"!=",$data->vendor_id)
                            ->get();
            return view('admin.updateproduct',compact('data' ,'category_name' ,'cat','vendor_name','vendors'));
        }else{
            $cat=category::all();
            $vendors = DB::table('vendors')
                            ->where('id',"!=",$data->vendor_id)
                            ->get();
            return view('admin.updateproduct',compact('data', 'category_name', 'cat' ,'vendor_name','vendors'));
        }
    }

    public function updateproductpost(Request $request ,$id){
        $data=product::find($id);
        $image=$request->file;
        if($image){
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage', $imagename);
            $data->image=$imagename;
        }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;
        $data->category_id=$request->category_id;
        $data->vendor_id=$request->vendor_id;
        $data->action=$request->action;
        $data->save();
        return redirect()->back()->with('msg', 'Update succeeded !');
    }
    public function searchproduct(Request $request){
        if($request->has('search')){
            $search=$request['search'];
            $data=product::where('title','Like','%'.$search.'%')->get();
            return view('admin.showproduct',compact('data'));
        }
        return redirect()->back();
    }
    public function vieworders(){
        $order=order::orderBy('id', 'desc')->get();
        $data=product::all();
        $userInfo=user::all();
        return view('admin.vieworders',compact('order','data','userInfo'));
    }
    public function confirmorder($id){
        $order=order::find($id);
        $data=product::select('quantity')->where('id', $order->product_id)->get();
       // if($data > $order->quantity){
            if($order->status == null || $order->status == 'rejected'){
                $order->status='delivered';
                $order->save();
                product::where('id', $order->product_id)->decrement('quantity', $order->quantity);
                return redirect()->back()->with('msg', 'Delivered Succeeded !');
            }else{
                return redirect()->back()->with('msg', 'The Order Already Delivered !');
            }
        //}else{
          //  return redirect()->back()->with('msg', 'The operation cannot be completed, the order quantity is not available !');
        //}
    }
    public function rejectorder($id){
        $order=order::find($id);
        if($order->status == null){
            $order->status='rejected';
            $order->save();
            return redirect()->back()->with('msg', 'Rejected Succeeded! !');
        }else if ($order->status == 'delivered'){
            return redirect()->back()->with('msg', 'The Order Already Delivered !');
        }else{
            return redirect()->back()->with('msg', 'The Order Already Rejected !');
        }
    }
    public function viewcustomers(){
        $users=user::where("usertype","0")->get();
        return view('admin.viewcustomers',compact('users'));
    }

    public function searchcustomer(Request $request){
        if($request->has('search')){
            $search=$request['search'];
            $users=user::where('name','Like','%'.$search.'%')->where("usertype","0")->get();
             return view('admin.viewcustomers',compact('users'));
        }
        return redirect()->back();
    }

    public function viewemployees(){
        $users=user::where("usertype","2")->get();
        return view('admin.viewemployees',compact('users'));
    }

    public function searchemployee(Request $request){
        if($request->has('search')){
            $search=$request['search'];
            $users=user::where('name','Like','%'.$search.'%')->where("usertype","2")->get();
             return view('admin.viewemployees',compact('users'));
        }
        return redirect()->back();
    }

    public function deleteemployee($id){
        $users = user::withTrashed()->where('id',$id)->first();
        $users->delete();
        return redirect()->back()->with('msg', 'Delete succeeded !');
    }
    public function updateemployee($id){
        $users=user::find($id);
        return view('admin.updateemployee',compact('users'));
    }

    public function updateemployeepost(Request $request ,$id){
        $users=user::find($id);
        $password = Hash::make($request['password']);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->phone=$request->phone;
        $users->address=$request->address;
        $users->password=$password;
        $users->save();
        return redirect()->back()->with('msg', 'Update succeeded !');
    }

    public function employee(Request $request){
        return view('admin.addemployee');
    }

    public function addemployee(Request $request){
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $address = $request['address'];
        $password = Hash::make($request['password']);
        $usertype = 2;
        $result = DB :: table('users')->Insert(['name'=>$name ,'email'=>$email, 'phone'=>$phone , 'address'=>$address , 'password'=>$password , 'usertype'=>$usertype]);
        return redirect()->back()->with('msg', 'Add employee succeeded !');
    }

    public function category(){
        return view('admin.addcategory');
    }
    public function addcategory(Request $request){
        $name = $request['name'];
        $cat = category::where('name',$name)->first();
        if($cat == null){
            $category = new category([
                'name' => $request->name,
            ]);
            $category->save();
            return redirect()->back()->with('msg', 'Add Category succeeded !');
        }
        return redirect()->back()->with('msg', 'Error , Dublicate name !');
    }

    public function viewmessages(){
        $message=message::orderBy('id', 'desc')->get();
        $userInfo=user::all();
        return view('admin.viewmessages',compact('message','userInfo'));
     }

    public function upcomingproduct(){
        $data=product::all();
        return view('admin.upcomingproduct',compact('data'));
    }

    public function viewvendors(){
        $vendors=vendor::orderBy('id', 'desc')->get();
        return view('admin.viewvendors',compact('vendors'));
    }

    public function searchvendor(Request $request){
        if($request->has('search')){
            $search=$request['search'];
            $vendors=vendor::where('name','Like','%'.$search.'%')->get();
             return view('admin.viewvendors',compact('vendors'));
        }
        return redirect()->back();
    }

    public function deletevendor($id){
        $vendor=vendor::find($id);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $vendor->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        return redirect()->back()->with('msg', 'Delete succeeded !');
    }

    public function acceptvendor($id){
        $vendor=vendor::find($id);
        $vendor->accepted = 1;
        $vendor->save();
        return redirect()->back()->with('msg', 'Accept succeeded !');
    }

    public function vendor(Request $request){
        return view('admin.addvendor');
    }

    public function addvendor(Request $request){
        $name = $request['name'];
        $vendor = vendor::where('name',$name)->first();
        if($vendor == null){
            $vendors = new vendor([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'category_provided' => $request->category,
                'accepted' => 1
            ]);
            $vendors->save();
            return redirect()->back()->with('msg', 'Add Vendor succeeded !');
        }
        return redirect()->back()->with('msg', 'Error , Dublicate name !');
    }

    public function viewcategories(){
        $cat=category::all();
        return view('admin.viewcategories',compact('cat'));
    }

    public function deletecategory($id){
        $cat=category::find($id);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $cat->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        return redirect()->back()->with('msg', 'Delete succeeded !');
    }
    public function updatecategory($id){
        $cat=category::find($id);
        return view('admin.updatecategory',compact('cat'));
    }

    public function updatecategorypost(Request $request ,$id){
        $cat=category::find($id);
        $cat->name=$request->name;
        $cat->save();
        return redirect()->back()->with('msg', 'Update succeeded !');;
    }

    public function searchcategory(Request $request){
        if($request->has('search')){
            $search=$request['search'];
            $cat=category::where('name','Like','%'.$search.'%')->get();
            return view('admin.viewcategories',compact('cat'));
        }
        return redirect()->back();
    }

    public function productsarchive(){
        $data = product::onlyTrashed()->get();
        return view('admin.productarchive',compact('data'));
    }

    public function archiveproduct($id){
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('msg', 'archived succeeded !');
    }

    public function unarchiveproduct($id){
        $data = product::withTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('msg', 'unarchived succeeded !');
    }

    public function viewspecialorder(){
        $data=special_order::orderBy('id', 'desc')->get();
        $userInfo=user::all();
        return view('admin.viewspecialorder',compact('data','userInfo'));
    }
}
