<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // mass assignment protection turned off
    protected $guarded = [];

    public function customers() {
        return $this->hasMany(Customer::class);
    }

}
