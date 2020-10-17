<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'time', 'price', 'description', 'type_id',
    ];

    /**
    * Relationship methods
    */
    public function type()
    {
    	return $this->hasOne('App\Models\ProductType');
    }
}
