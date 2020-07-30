<?php

namespace App\Services;

use App\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CustomerService
{
    public function search($customer_id)
    {
        $customer = Customer::find($customer_id);
        if(!$customer)
        {
            throw new ModelNotFoundException('Customer not found by ID ' . $customer_id);
        }
        return $customer;
    }
}
