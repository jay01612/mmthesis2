<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class access_level extends Model
{
    //
    protected table ='access_level';

    public static function getAccessLevel(){

    	return access_level::get();
    }
}
