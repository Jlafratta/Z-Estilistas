<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	/**
	* Relationship methods
	*/
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
