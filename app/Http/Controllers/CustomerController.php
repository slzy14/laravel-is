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

    public function destroy($id)
    {
       Customer::destroy($id);
        return redirect('customer')->with('flash_message', 'Customer deleted!');  
    }
}
