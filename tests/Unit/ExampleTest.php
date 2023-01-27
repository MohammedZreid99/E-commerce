<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
        public function test_become_vendor()
        {
            $vendor=new vendor;
            $vendor->name= 'kareem21';
            $vendor->phone= '0597372325';
            $vendor->email='kareem2121@gmail.com';
            $vendor->address='gaza'; 
            $vendor->accepted=0;
            $vendor->category_provided='T-shirt';
            $vendor->save();
            $this->assertNotNull($vendor,message:'created successfuly');
        }



        public function test_Admin_Accept_vendor()
        {
          
            $vendor=vendor::find('1');
            $vendor->accepted = 1;
            $vendor->save();
            $this->assertNotNull($vendor,message:'created successfuly');

        }



        public function test_Admin_Upload_Product()
        {
    
            $product = new product([
                'title' => 'Short',
                'price' => 150,
                'description' => 'Short',
                'quantity' =>5,
                'image' => '',
                'category_id' => 1,
                'vendor_id' => 1,
                'action' => 'Published',
            ]);
            $product->save();
            $this->assertNotNull($product,message:'created successfuly');
        
        }




        public function test_Add_product_To_Cart()
        {
            
            $cart = new cart([
                'user_id' =>23,
                'product_id' =>3,
                'price'=>150,
                'quantity'=>5,
            ]);
            $cart->save();
            $this->assertNotNull($cart,message:'created successfuly');
        }




        public function test_Add_Employee()
        {
            $employee = new User([
                'name' =>'kareem999',
                'email' => 'kareeeem999@gmail.com',
                'phone' => '0597372325',
                'address' => 'gaza',
                'password' => Hash::make('kareeeem11'),
                'usertype' => 2,
            ]);
            $employee->save();
            $this->assertNotNull($employee,message:'created successfuly');
        }
   


        public function test_update_Employee()
        {
            $users=user::find('24');
            $users->name="kareem2222";
            $users->email="kareem2222@gmail.com";
            $users->phone="0000000000";
            $users->address="islamic_university";
            $users->password=Hash::make("K123Kk1212$$");
            $users->save();
            $this->assertNotNull($users,message:'created successfuly');
        }
      
}
