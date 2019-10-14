<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\clientinfo;
use app\models\booking;
use app\model\payment;
use app\models\admin;


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


    public function summary(){
        return view('/booking/summary');
    }

    public function book(){
        $getClient = clientinfo::getClient();
        return view('booking')->with('in', $getClient);
    }


    //GETTING CLIENTS BOOKING INFO --

    public function addBookingInfo (Request $request){

        $newDate = str_replace('-', '', $request->date);
        $newTime = str_replace(':', '', $request->time);

        $referenceNumber = $request->game . $newDate . $newTime;

        $query = booking::getBookingInfo($request, $referenceNumber);
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


    public function addBooking(Request $request){
        $addBooking = clientinfo::clientbook($request);
        if ($addbooking){
            return response()->json([
                'success' => true,
                'message' => "Please check your email for billings"
            ]);
        }else{
            return response() ->json([
                'success' => false,
                'message' => 'There is someting wrong!'
            ]);
        } 
    }

    //ADD MODE OF PAYMENT

    public function addPayment(Request $request){
        $addPayment = payment::clientPayment($request);
        if ($addPayment){
            return response()->json([
                'response' => true
            ]);
        }else{
            return response()->json([
                'response' => false
            ]);
        } 
    }

    //public function summaryPayment()

    //admin functions

    //public function addAdmin()

    public static function addUserAdmin(Request $request){

        $firstname = str_shuffle($request->fname);
        $lastname = str_shuffle($request->lname);

        $password = $request-> $firstname . $lastname;


        $addUserAdmin = admin::addAdmin($request, $password);
        if($addUserAdmin){
            return response()->json([
                'response' => true,
                'data' => $query,
                'message' => "Successfully added"
            ]);
        }else{
            return response()->json([
                'response' => false,
                'data' => array(),
                'message' => "There is something wrong"
            ]);
        }
    }

    public static function editUserAdmin(Request $request){
        $editUserAdmin = admin::editUser($request);
        if($editUserAdmin){
            return response()->json([
                'response' => true,
                'message' => "Successfully edited"
            ]);
        }else{
            return response() ->json([
                'response' => false,
                'message' => "there is something wrong"
            ]);
        }
    }

     public static function deleteUserAdmin(Request $request){
        $deleteUserAdmin = admin::deleteUser($request);
        if($deleteUserAdmin){
            return response() ->json([
                'response' => true,
                'message' => "Succcessfully deleted"
            ]);
        }else{
            return response() ->json([
                'response' => false,
                'message' => "There is an error"
            ]);
        }    
    }//>>>>>>> 8fdf0dadfae918fffabb0aecd5be5672a65bb96e
}


