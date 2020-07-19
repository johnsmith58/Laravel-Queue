<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Events\WelcomeNewCustomerEvent;

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
}
