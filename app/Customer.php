<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
