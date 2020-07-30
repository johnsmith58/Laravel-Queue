<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Repository\Customer;
use Illuminate\Support\Facades\Mail;
use App\Events\WelcomeNewCustomerEvent;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Services\CustomerService;

class Customer2Controller extends Controller
{

    private $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

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

        // try{
        //     $customer = \App\Customer::findOrFail($request->id);
        // }catch(ModelNotFoundException $exception){
        //     // return back()->withError($exception->getMessage())->withInput();
        //     return back()->withError('Customer ID not found')->withInput();
        // }

        try{
            $customer = $this->customerService->search($request->id);
        }catch(ModelNotFoundException $exception){
            return back()->withError($exception->getMessage())->withInput();
        }

        return view('customer.searchResult', compact('customer'));
    }

}
