<?php

namespace App\Http\Controllers;
use App\Models\menu;
use App\Models\uorder;
use App\Models\Onlineorder;
use App\Models\User;
use App\Models\notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class discountController extends Controller
{
    private $formData = [];
    private $fData = [];

    public function discountAdmin(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'percentage' => 'required',
        ]);

        $this->formData = [
            'item_name' => $request->input('item_name'),
            'percentage' => $request->input('percentage'),
        ];
        $percentage = $this->formData['percentage'];
        $item = $this->formData['item_name'];
        
        $discount_e = menu::where('item_name', $this->formData['item_name'])->first();
        $price = $discount_e->price;
        $updated_price = $price - ($price *($percentage/100));

        try {
            // Directly update the Price field without using the update method
            $discount_e->Price = $updated_price;
        
            // Log the values for debugging
            Log::info('Before Update: ' . json_encode($discount_e->getAttributes()));
        
            $discount_e->save();
        
            // Log the values after the update
            Log::info('After Update: ' . json_encode($discount_e->fresh()->getAttributes()));
        
            return back()->with('success', 'Discount Registered successfully');
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Error updating database: ' . $e->getMessage());
        
            return 'Error updating database. Please check the logs for details.';
        }
    }

    public function editMoney($item, $email){
        $menu_e = menu::where('item_name', $item)->first();
        $user_e = user::where('email', $email)->first();
        $totMoney = $user_e->money;
        $price = $menu_e->price;
        if($totMoney>=$price){
            $updatedMoney = $totMoney - $price;
            $user_e->money = $updatedMoney;
            $user_e->save();
            OnlineOrder::where('email', $email)->update(['accept' => 'yes']);
        }else{
            OnlineOrder::where('email', $email)->delete();
            return redirect('handleorder');
        }
        return redirect('/handleorder');
    }
    //delete request
    public function deleteorder($id){
        Onlineorder::find($id)->delete();
        return redirect('/handleorder');
    }

    public function adminNotice(Request $request){

        $formFields = $request->validate([
            'notice' => 'required',
        ]);
    
        // Check if there's an existing notice record
        $existingNotice = notice::first();
    
        if ($existingNotice) {
            // Update the existing record
            $existingNotice->update($formFields);
            return back()->with('success', 'Posted successfully');
        } else {
            // Create a new record if it doesn't exist
            notice::create($formFields);
            $message = 'Notice posted successfully';
        }
        
    }

}
