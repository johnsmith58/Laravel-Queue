<?php

namespace App\Repository;

use Carbon\Carbon;

class Customer
{
    const CACHE_KEY = 'CUSTOMERS';

    public function all($orderBy)
    {
        $key = "all.{$orderBy}";
        $cacheKey = $this->getCacheKey($key);

        return cache()->remember($cacheKey, Carbon::now()->addMinutes(1), function() use($orderBy){
            return \App\Customer::orderBy($orderBy)->get();
        });
    }

    public function get($id)
    {
        $key = "get.{$id}";
        $cacheKey = $this->getCacheKey($key);

        return cache()->remember($cacheKey, Carbon::now()->addMinutes(1), function() use($orderBy){
            return \App\Customer::where('id', $id)->first();
        });
    }

    public function getCacheKey($key)
    {
        $key = strtoupper($key);
        return self::CACHE_KEY . '.$key';
    }

}
