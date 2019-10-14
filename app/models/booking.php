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


    public static function getBookingInfo($data, $referenceNumber){

    	return booking::insert([
            'reference_number' =>$data->reference_number
            'theme_id' =>$data->Theme,
    		'book_date' =>$data->Date,
    		'book_time' =>$data->Time,
    		'maxpax' =>$data->number_of_pax,
    		'venue' =>$data->Venue 
    	])
    }

    
}
