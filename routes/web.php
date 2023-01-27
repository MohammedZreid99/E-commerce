<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StripeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/ourproduct',[HomeController::class,'ourproduct']);

route::get('/aboutus',[HomeController::class,'aboutus']);

route::get('/contactus',[HomeController::class,'contactus']);

route::post('/contactus',[HomeController::class,'sendmessage']);

route::get('/product',[AdminController::class,'product']);

route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

route::get('/showproduct',[AdminController::class,'showproduct']);

route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

route::get('/updateproduct/{id}',[AdminController::class,'updateproduct']);

route::post('/updateproductpost/{id}',[AdminController::class,'updateproductpost']);

route::post('/searchproduct',[AdminController::class,'searchproduct']);

route::get('/viewcustomers',[AdminController::class,'viewcustomers']);

route::get('/viewemployees',[AdminController::class,'viewemployees']);

route::post('/searchcustomer',[AdminController::class,'searchcustomer']);

route::post('/searchemployee',[AdminController::class,'searchemployee']);

route::get('/deleteemployee/{id}',[AdminController::class,'deleteemployee']);

route::get('/updateemployee/{id}',[AdminController::class,'updateemployee']);

route::post('/updateemployeepost/{id}',[AdminController::class,'updateemployeepost']);

route::get('/addemployee',[AdminController::class,'employee']);

route::post('/addemployee',[AdminController::class,'addemployee']);

route::get('/search',[HomeController::class,'search']);

route::post('/addcart/{id}',[HomeController::class,'addcart']);

route::post('/sendspecialorder',[HomeController::class,'sendspecialorder']);

route::post('/becomevendor',[HomeController::class,'becomevendor']);

route::get('/showcart',[HomeController::class,'showcart']);

route::get('/delete/{id}',[HomeController::class,'deletecart']);

route::post('/order',[HomeController::class,'confirm']);

route::get('/vieworders',[AdminController::class,'vieworders']);

route::get('/confirmorder/{id}',[AdminController::class,'confirmorder']);

route::get('/rejectorder/{id}',[AdminController::class,'rejectorder']);

route::get('/addcategory',[AdminController::class,'category']);

route::post('/addcategory',[AdminController::class,'addcategory']);

route::get('/viewcategories',[AdminController::class,'viewcategories']);

route::get('/deletecategory/{id}',[AdminController::class,'deletecategory']);

route::get('/updatecategory/{id}',[AdminController::class,'updatecategory']);

route::post('/updatecategorypost/{id}',[AdminController::class,'updatecategorypost']);

route::post('/searchcategory',[AdminController::class,'searchcategory']);

route::get('/viewmessages',[AdminController::class,'viewmessages']);

route::get('/viewvendors',[AdminController::class,'viewvendors']);

route::post('/searchvendor',[AdminController::class,'searchvendor']);

route::get('/deletevendor/{id}',[AdminController::class,'deletevendor']);

route::get('/acceptvendor/{id}',[AdminController::class,'acceptvendor']);

route::get('/addvendor',[AdminController::class,'vendor']);

route::post('/addvendor',[AdminController::class,'addvendor']);

route::get('/upcomingproduct',[AdminController::class,'upcomingproduct']);

route::get('/productsarchive',[AdminController::class,'productsarchive']);

route::get('/archiveproduct/{id}',[AdminController::class,'archiveproduct']);

route::get('/unarchiveproduct/{id}',[AdminController::class,'unarchiveproduct']);

route::get('/viewcategory/{name}',[HomeController::class,'viewcategory']);

route::get('/viewspecialorder',[AdminController::class,'viewspecialorder']);

route::get('/empproduct',[EmployeeController::class,'product']);

route::post('/empuploadproduct',[EmployeeController::class,'uploadproduct']);

route::get('/empshowproduct',[EmployeeController::class,'showproduct']);

route::get('/empdeleteproduct/{id}',[EmployeeController::class,'deleteproduct']);

route::get('/empupdateproduct/{id}',[EmployeeController::class,'updateproduct']);

route::post('/empupdateproductpost/{id}',[EmployeeController::class,'updateproductpost']);

route::post('/empsearchproduct',[EmployeeController::class,'searchproduct']);

route::get('/empvieworders',[EmployeeController::class,'vieworders']);

route::get('/empconfirmorder/{id}',[EmployeeController::class,'confirmorder']);

route::get('/emprejectorder/{id}',[EmployeeController::class,'rejectorder']);

route::get('/empaddcategory',[EmployeeController::class,'category']);

route::post('/empaddcategory',[EmployeeController::class,'addcategory']);

route::get('/empviewmessages',[EmployeeController::class,'viewmessages']);

route::get('/empviewvendors',[EmployeeController::class,'viewvendors']);

route::get('/empupcomingproduct',[EmployeeController::class,'upcomingproduct']);

route::get('/empviewcategories',[EmployeeController::class,'viewcategories']);

route::get('/empdeletecategory/{id}',[EmployeeController::class,'deletecategory']);

route::get('/empupdatecategory/{id}',[EmployeeController::class,'updatecategory']);

route::post('/empupdatecategorypost/{id}',[EmployeeController::class,'updatecategorypost']);

route::post('/empsearchcategory',[EmployeeController::class,'searchcategory']);

route::post('/empsearchvendor',[EmployeeController::class,'searchvendor']);

route::get('/empproductsarchive',[EmployeeController::class,'productsarchive']);

route::get('/emparchiveproduct/{id}',[EmployeeController::class,'archiveproduct']);

route::get('/empunarchiveproduct/{id}',[EmployeeController::class,'unarchiveproduct']);

route::get('/empviewspecialorder',[EmployeeController::class,'viewspecialorder']);


// send this id to the                  function
