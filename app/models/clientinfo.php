<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DB;

class bookings extends Model
{
    //
    protected $table = 'client_info';

    public static function getInfo(){

    	return client_info::get();	
    }

    public static function clientBook($data) {

    	return client_info::insert([
    			'fname' => $data->firstname,
    			'lname' => $data->lastname,
    			'mobile_number' => $data->mobilenumber,
    			'verification_number' => $data->verificationnumber,
    			'email' => $data->email
    	]);
    }

        
    }

    public static function tbl_client_info() {

    	return DB::connection('mysql')
    	->table ('client_info as a')
    	->select(
    		'a.fname as firstname',
    		'a.lname as lastname',
    		'a.mobile_number as mobilenumber',
    		'a.email as e-mail',
    		'b.reference_number as ref_number',
    		'b.book_date as date',
    		'b.book_time as time',
    		'b.theme_id as theme',
    		'b.maxpax as pax',
    		'b.venue as location'
            
    	)
    	->join('payment_table as b', 'a.game_id', '=', 'b.id')
    	->where('a.is_verified', 1)
    	->get();
    }

    public static function getIdinfo($data){

    	return DB::connection('mysql')
    	->table ('client_info as a')
    	->select(
    		'a.fname as firstname',
    		'a.lname as lastname',
    		'a.mobile_number as mobilenumber',
    		'a.email as e-mail',
    		'b.reference_number as ref_number',
    		'b.book_date as date',
    		'b.book_time as time',
    		'b.theme_id as theme',
    		'b.maxpax as pax',
    		'b.venue as location'	
    	)
    	->join('payment_table as b', 'a.game_id', '=', 'b.id')
    	->where('a.is_verified', 1 -> $data->id)
    	->get();->first();
    }

    		       
}
