<?php

use App\Models\menu;
use App\Models\Rating;
use App\Models\Listing;
use App\Models\Reserve;
use App\Models\Dailysale;
use App\Models\Inventory;
use App\Models\Onlineorder;
use App\Http\Controllers\PictureController;
use Illuminate\Http\Request;
use App\Http\Controllers\adminAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\discountcontroller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//show user end
Route::get('/welcomeuser', [UserController::class, 'userend']);

//show admin end
Route::get('/welcomeadmin', [UserController::class, 'adminend']);

//show login admin end
Route::get('/welcomelogadmin', [UserController::class, 'adminlogend']);

//show admin reg form
Route::get('/adminreg', [adminAuth::class, 'registration']);

//create admin
Route::post('/regAdmin', [adminAuth::class, 'regAdmin'])->name('regAdmin');

//show admin login form
Route::get('/adminlog', [adminAuth::class, 'login']);

//login admin
Route::post('/authenticateAdmin', [adminAuth::class, 'authenticateAdmin'])->name('authenticateAdmin');

//admin logout
Route::post('/adminlogout', [UserController::class, 'adminlogout']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Show Reservation Form
Route::get('/reserve', function(){
    return view('bookings.tableBook');
});

Route::post('/reserve', function(){
    Reserve::create([
        'name' => request('name'),
        'email' => request('email'),
        'date' => request('date'),
        'phone' => request('phone'),
        'guests' => request('guests'),
        'time' => request('time'),
        'description' => request('description')
    ]);
    return redirect('/welcomeuser')->with('message', 'Booking request send successfully');
});

Route::get('/homedelivery', function(){
    return view('menu');
});

Route::get('/menu', function () {
    return view('menu',[
        'listings' => menu::all()
    ]);
});

Route::get('/onlineorder', function () {
    return view('homedel',[
        'listingsall' => Menu::all()
    ]);
});

Route::post('/onlineorder', function(){
    Onlineorder::create([
        'name' => request('name'),
        'email' => request('email'),
        'address' => request('address'),
        'menu' => request('menu')
    ]);
    return redirect('/welcomeuser')->with('message', 'Online order request send successfully');
});

Route::get('/manageorder', function () {
    return view('list',[
        'listingsall' => Reserve::all()
    ]);
});

Route::get('/managehomeorder', function () {
    return view('managehomeorder',[
        'listingsall' => Onlineorder::all()
    ]);
});


//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update form
Route::put('/listings/{listing}/edit', [ListingController::class, 'update']);

//Delete form
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


//review page
Route::get('/ratingreview', function(){
    return view('review');
});

Route::post('/ratingreview', function(){
    Rating::create([
        'rating' => request('rating'),
        'review' => request('review')
    ]);
    return redirect('/')->with('message', 'Ordered reviewd successfully!');
});

//discount page
Route::get('/discount', [adminAuth::class, 'discount']);
Route::put('/discountAdmin', [discountController::class, 'discountAdmin'])->name('discountAdmin');

//booking request
Route::get('adminreservations', [adminAuth::class, 'showReservations'])->name('adminreservations');

//booking request
Route::get('/bookreq', [adminAuth::class, 'bookform']);
Route::post('/reqAccept', [adminAuth::class, 'reqAccept'])->name('reqAccept');

//delete reservation request
Route::delete('/reservations/delete/{id}', [adminAuth::class, 'deletereq'])->name('reservations.delete');
//accept reservation request
Route::put('/reservation/{id}', [adminAuth::class, 'acceptreq'])->name('reservation');

//update form
Route::get('/updatemenu', [adminAuth::class, 'updateMenu']);
Route::post('/updateinfo', [adminAuth::class, 'updateinfo'])->name('updateinfo');

//see menu
Route::get('menu', [adminAuth::class, 'showMenus'])->name('menu');

//order request
Route::get('/handleorder', [adminAuth::class, 'handleorder']);
Route::get('handleorder', [adminAuth::class, 'showOrders'])->name('handleorder');

//accept order
Route::put('/editmoney/{menu}/{email}', [discountController::class, 'editMoney'])->name('editmoney');

//delete order 
Route::delete('/orders/delete/{id}', [discountController::class, 'deleteorder'])->name('orders.delete');

//notice form
Route::get('updatenotice', [adminAuth::class, 'updatenotice'])->name('updatenotice');
//post notice
Route::post('adminNotice', [discountcontroller::class, 'adminNotice'])->name('adminNotice');

//user notice
Route::get('/seenotice', [adminAuth::class, 'seenotice'])->name('seenotice');



Route::get('/employees', [EmployeeController::class, 'index'])->name('indexview');



Route::get('/employee-schedules', [EmployeeScheduleController::class, 'index'])->name('employee-schedules.index');
Route::get('/employee-schedules/create', [App\Http\Controllers\EmployeeScheduleController::class, 'create'])->name('employee-schedules.create');
Route::post('/employee-schedules', [App\Http\Controllers\EmployeeScheduleController::class, 'store'])->name('employee-schedules.store');
Route::get('/employee-schedules/{id}', [App\Http\Controllers\EmployeeScheduleController::class, 'show'])->name('employee-schedules.show');
Route::get('/employee-schedules/{id}/edit', [App\Http\Controllers\EmployeeScheduleController::class, 'edit'])->name('employee-schedules.edit');
Route::put('/employee-schedules/{id}', [App\Http\Controllers\EmployeeScheduleController::class, 'update'])->name('employee-schedules.update');
Route::delete('/employee-schedules/{id}', [App\Http\Controllers\EmployeeScheduleController::class, 'destroy'])->name('employee-schedules.destroy');
Route::get('/employees/{id}/edit-salary', [App\Http\Controllers\EmployeeController::class, 'editSalary'])->name('edit-salary');
Route::put('/employees/{id}/update-salary', [App\Http\Controllers\EmployeeController::class, 'updateSalary'])->name('update-salary');



Route::get('/inventorymanage', function(){
    $invs = Inventory::all();
    return view('inventory', compact('invs'));
});

// Show add cost Form
Route::get('/addcost', function(){
    return view('dailycost');
});

Route::post('/addcost', function(){
    Inventory::create([
        'item_name' => request('item_name'),
        'unit' => request('unit'),
        'unit_price' => request('unit_price')
    ]);
    return redirect('/addcost')->with('message', 'Cost added successfully');
});

// Show add sales Form
Route::get('/addsales', function(){
    return view('dailysale');
});

Route::post('/addsales', function(){
    Dailysale::create([
        'customer_name' => request('customer_name'),
        'item' => request('item'),
        'total_bill' => request('total_bill')
    ]);
    return redirect('/addsales')->with('message', 'Cost added successfully');
});

Route::get('/add-employee', 'EmployeeController@create')->name('add-employee');
Route::post('/store-employee', [EmployeeController::class, 'store'])->name('store-employee');

// Route for displaying the add picture form (GET)
Route::get('/addpicture', [PictureController::class, 'showAddPictureForm'])->name('addpicture.form');

// Route for uploading the picture (POST)
Route::post('/addpicture', [PictureController::class, 'uploadPicture'])->name('addpicture.upload');


// report generate
Route::get('/generate-report', [adminAuth::class, 'generateAndShowReport'])->name('generate.report');

//see pictures page
Route::get('/seepicture', [PictureController::class, 'seePictures'])->name('see-pictures');
Route::get('/image/{id}', [PictureController::class, 'showImage'])->name('image.show');




