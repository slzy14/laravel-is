<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);
    } 


    public function delete($id){
        $delete=DB::table("customers")
        ->where("id",$id)
        ->delete();
        return redirect('/')->with("success,customer deleted!");
    }

    public function addUser()
    {
        return view('Customer.addUser');
    }
    
    public function saveUser(Request $req)
    {
        $validated = $req->validate([
            'lastName' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $customer=Customer::create($validated);
        return redirect('/');
    }
}
