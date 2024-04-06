<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\booking;
use App\Models\menu;
use App\Models\Reserve;
use App\Models\notice;
use App\Models\Onlineorder;
Use App\Models\Dailysale;
Use App\Models\Inventory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class adminAuth extends Controller
{
    public function newpage(){
        return view("newpage");

    }
    
    //log in form
    public function login(){
        return view("adminlog");

    }

    //registration form
    public function registration(){
        return view("adminreg");
        
    }

    // discount form
    public function discount(){
        return view("discount");
        
    }

    //book form
    public function bookform(){
        return view("bookreq");
    }

    //update menu form
    public function updateMenu(){
        return view("updatemenu");
    }

    //order form
    public function handleorder(){
        return view("handleorder");
    }

    //order
    public function uorder(){
        return view("uorder");
    }

    //notice form
    public function updatenotice(){
        return view("updatenotice");
    }

    //user notice end
    public function seenotice(){
        $seenotices = notice::all();
        return view('seenotice', compact('seenotices'));
    }

    // register
    public function regAdmin(Request $request){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin',
            'password' => 'required|min:6',
        ]);
        

        // Create User
        $admin = admin::create($formFields);

        // Login
        auth()->login($admin);

        return redirect('/welcomelogadmin')->with('message', 'Admin created and logged in');
    }

    //authenticate
    public function authenticateAdmin(Request $request){        
        
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Find the user by email
        $admin_e = admin::where('Email', $formFields['email'])->first();
        // Check if the user exists and the passwords match
        if ($admin_e && $admin_e->Password === $formFields['password']) {
            // Authentication successful
            $request->session()->regenerate();
            return redirect('/welcomelogadmin')->with('message', 'Admin created and logged in');
        }
    
        // Authentication failed
        return back()->with("invalid", "Invalid Credentials")->onlyInput("email");
    }

    //booking request
    public function showReservations()
    {
        $reservations = Reserve::all();
        return view('adminreservations', compact('reservations'));
    }

    //update info
    public function updateinfo(Request $request){

        if ($request->filled('add') && $request->filled('nprice')) {
            $request->merge([
                'add' => $request->filled('add') ? $request->input('add') : null,
                'nprice' => $request->filled('nprice') ? $request->input('nprice') : null,

            ]);

            $request->validate([
                'add' => 'nullable',
                'nprice' => 'nullable',

            ]);
    
            // Create the menu instance
            $menu = new menu();
            $menu->setAttribute('item_name', $request->add);
            $menu->setAttribute('price', $request->nprice);
            // Set other attributes as needed
    
            $res = $menu->save();
    
            if ($res) {
                return back()->with('success', 'Registered successfully');
            } else {
                return back()->with('not', 'Not successful');
            }
        } 
        else {
            $request->validate([
                'del' => 'required',
            ]);
            // Find the menu record by 'Item name'
            $menu = menu::where('item_name', $request->del)->first();
    
            if ($menu) {
                // Delete the record
                $deleted = $menu->delete();
    
                if ($deleted) {
                    return back()->with('success', 'Record deleted successfully');
                } else {
                    return back()->with('not', 'Record deletion failed');
                }
            } else {
                return back()->with('not', 'Record not found for deletion');
            }
        }
    }

    //delete reservation request
    public function deletereq($id){
        Reserve::find($id)->delete();
        return redirect('/adminreservations');
    }

    //accept reservation request
    public function acceptreq($id){
        Reserve::where('id',$id)->update(['accept' => 'yes']);
        return redirect('/adminreservations');
    }

    //show menu
    public function showMenus()
    {
        $menus = menu::all();
        return view('menu', compact('menus'));
    }

    //show order
    public function showOrders()
    {
        $orders = onlineorder::all();
        return view('handleorder', compact('orders'));
    }

    //generate report
    public function generateAndShowReport()
    {
        // Perform necessary calculations
        $totalSales = DailySale::sum('total_bill');

        $totalCosts = 0;
        // Retrieve all records from the Inventory table
        $inventoryItems = Inventory::all();

        // Loop through each inventory item and calculate the cost
        foreach ($inventoryItems as $item) {
            // Multiply unit_price with unit for each item and add it to the total cost
            $totalCosts += $item->unit_price * $item->unit;
        }
        
        $profitLoss = $totalSales - $totalCosts;

        // Pass data to view and render the report
        return view('generateReport', compact('totalSales', 'totalCosts', 'profitLoss'));
    }

}
