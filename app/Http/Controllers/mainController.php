<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\clientinfo;
use app\models\booking;
use app\model\payment;


class mainController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function signup(){
    	return view('signup');
    }

    public function user(){
    	return view('user');
    }

    public function booking(){
    	return view('/booking/booking');
    }

    public function info(){
    	return view('/booking/info');
    }

    public function book(){
        $getClient = clientinfo::getClient();
        return view('booking')->with('in', $getClient);
    }

    //GETTING CLIENTS BOOKING INFO --

    public function addrefnumber (Request $request){

        $newDate = str_replace('-', '', $request->date);
        $newTime = str_replace(':', '', $request->time);

        $referenceNumber = $request->game . $newDate . $newTime;

        $query = booking::getRefId($request, $referenceNumber);
        if($query){
            return response()->json([
                'response' => true,
                'data' => $query
            ]);
        }else{
            return response()->json([
                'response' => false,
                'data' => array(),
                'message' => "There's an error"
            ]);
        }
    }

    public function addBookingInfo (Request $request){
        $addBookingInfo = booking::getBookingInfo($request);
         if($addBookingInfo){
            return response() -> json([
                'response' =>true,
            ]);
         }else{

            return response()->json([
                'response' => false,
            ])
         }

    }

    public function addBooking(Request $request){
        $addBooking = clientinfo::clientbook($request);
        if ($addbooking){
            return response()->json([
                'success' => true
            ]);
        }else{
            return response() ->json([
                'success' =? false
            ])
        } 
    }

    //ADD MODE OF PAYMENT

    public function addPayment(Request $request){
        $addPayment = payment::clientPayment($request);
        if ($addPayment){
            return response()->json([
                'success' => true
            ]);
        }else{
            return response() ->json([
                'success' => false
            ])
        } 
    }

    public function summaryPayment()
}


