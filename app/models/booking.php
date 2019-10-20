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


    // public static function getBookingInfo($data, $referenceNumber){

    // 	return booking::insert([
    //         'reference_number' =>$data->reference_number
    //         'theme_id' =>$data->Theme,
    // 		'book_date' =>$data->Date,
    // 		'book_time' =>$data->Time,
    // 		'maxpax' =>$data->number_of_pax,
    // 		'venue' =>$data->Venue 
    // 	])
    // }

    public static function checkAvailability($data){
        return $query = DB::connection('mysql')
        ->table('booking_table')
        ->select('*')
        ->where('book_date', $data->date)
        ->where('book_time', $data->time)
        ->where('theme_id', $data->theme)
        ->get()->first();
    }

    public static function bookClient($data){
        return $query = DB::connection('mysql')
        ->table('booking_table')
        ->insertGetId([
            'reference_number' => $data->referenceNumber,
            'book_date' => $data->date,
            'book_time' => $data->time,
            'theme_id' => $data->theme,
            'maxpax' => $data->pax,
            'venue' => $data->venue
        ]);
    }

    public static function getInformationWithThemeName($data){
        return $query = DB::connection('mysql')
        ->table('booking_table as a')
        ->select(
            'a.id as bookingId',
            'a.book_date as date',
            'a.book_time as time',
            'b.name as themeName',
            'a.maxpax as pax',
            'a.venue as venue'
        )
        ->join('themes as b', 'a.theme_id', '=', 'b.id')
        ->where('a.id', $data)
        ->get()->first();
    }

    public static function getBookedNotPayed(){
        return $query = DB::connection('mysql')
        ->table('booking_table as a')
        ->select(
            DB::raw("DATE_FORMAT(a.book_date, '%M %d, %Y') as date"),
            DB::raw("TIME_FORMAT(a.book_time, '%h:%i %p') as time"),
            'a.maxpax as pax',
            'a.venue as venue',
            DB::raw("CONCAT(b.lname, ', ', b.fname) as name"),
            'b.mobile_number as mobilenumber',
            'b.email as email',
            'c.name as theme'
        )
        ->join('client_info as b', 'a.id', '=', 'b.game_id')
        ->join('themes as c', 'a.theme_id', '=', 'c.id')
        ->where('b.is_verified', 0)
        ->where('a.is_booked', 0)
        ->get();
    }

    public static function getBookedNotPayed1(){
        return $query = DB::connection('mysql')
        ->table('booking_table as a')
        ->select(
            DB::raw("DATE_FORMAT(a.book_date, '%M %d, %Y') as date"),
            DB::raw("TIME_FORMAT(a.book_time, '%h:%i %p') as time"),
            'a.maxpax as pax',
            'a.venue as venue',
            DB::raw("CONCAT(b.lname, ', ', b.fname) as name"),
            'b.mobile_number as mobilenumber',
            'b.email as email',
            'c.name as theme'
        )
        ->join('client_info as b', 'a.id', '=', 'b.game_id')
        ->join('themes as c', 'a.theme_id', '=', 'c.id')
        ->where('b.is_verified', 1)
        ->where('a.is_booked', 0)
        ->get();
    }

    
}
