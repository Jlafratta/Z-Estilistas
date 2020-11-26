<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    
    /**
    * Relationship methods
    */
    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
}
