<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DB;

class booking extends Model
{
    protected $table = 'booking_table';

    public static function getbooking(){

    	return booking_table::get();
    }

     public static function getRefId($data){

        return booking::insert([
            'reference_number' =>$data->reference_number
            
        ])
    }

    public static function getBookingInfo($data){

    	return booking::insert([
            
    		'book_date' =>$data->Date,
    		'book_time' =>$data->Time,
    		'maxpax' =>$data->number_of_pax,
    		'venue' =>$data->Venue 
    	])
    }

    
}
