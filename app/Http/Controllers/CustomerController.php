<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Repository\Customer;
use Illuminate\Support\Facades\Mail;
use App\Events\WelcomeNewCustomerEvent;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }
    public function save(Request $request)
    {
        $customer = new \App\Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();
        event(new WelcomeNewCustomerEvent($customer));
    }
    public function list()
    {
        $customers = Customer::all("name");
        return view('customer.list', compact('customers'));
    }
    public function search(Request $request)
    {

        try{
            $customer = \App\Customer::findOrFail($request->id);
        }catch(ModelNotFoundException $exception){
            // return back()->withError($exception->getMessage())->withInput();
            return back()->withError('Customer ID not found')->withInput();
        }
        return view('customer.searchResult', compact('customer'));
    }
}
