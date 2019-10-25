<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\clientinfo as ci;
use App\models\booking;
use App\models\payment;
use App\models\admin as adminis;
use App\models\themes;
use Nexmo;
use DB;
use Illuminate\Support\Facades\Mail;

class mainController extends Controller
{
    public function login(){
    	return view('/admin/login');
    }

    public function signup(){
    	return view('/admin/signup');
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

    // public function book(){
    //     $getClient = clientinfo::getClient();
    //     return view('booking')->with('in', $getClient);
    // }

    // public function payment(){
    //     $getClient = payment::getpayment();
    //     return view('booking')->with('in', $getClient);
    // }

    // public function admins(){
    //     $getAdmin = admin::getAdmin();
    //     return view('/admin/signup')->with('in', $getAdmin);
    // }

    // public function theme(){
    //     $getClient = theme::gettheme();
    //     return view('booking')->with('in', $getClient);
    // }

    // public function booking(){
    //     $getClient = booking::getbooking();
    //     return view('booking')->with('in', $getClient);
    // }




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

    public function getTheme(){
        // return $theme = themes::getThemeID();
        $theme = themes::get();

        $contents = "";

         foreach($theme as $out){
          $contents .= "
              <option value='".$out->id."'>".$out->name."</option>
             ";
            }

        if($contents){
            return response()->json([
                'success' => true,
                'data' => $contents
            ]);
        }else{
            return response()->json([
                'success' => false,
                'data' => array()
            ]);
        }

    }

    public function checkAvailability(Request $request){
        $query = booking::checkAvailability($request);
        if(!$query){ // Available 
            return response()->json([
                'message' => "Date And Time for this Theme is Available",
                'success' => true
            ]);
        }else{
            // may nakabook ng ganitong date, time and theme
            return response()->json([
                'message' => "Choose another date and time or theme",
                'success' => false
            ]);
        }
    }

    public function registerClient(Request $request){
        $query = booking::bookClient($request);
        if($query){
            return response()->json([
                'success' => true,
                'refIdToDB' => $query
            ]);
        }else{
            return response()->json([
                'success' => false,
                'refIdToDB' => 0
            ]);
        }
    }

    public function clientInfo(Request $request){
        $query = ci::clientInfoSave($request);
        if($query){
            return response()->json([
                'success' => true,
                'data' => $query
            ]);
        }else{
            return response()->json([
                'success' => false,
                'data' => 0
            ]);
        }
    }

    public function getInformation(Request $request){
        $bookingId = booking::getInformationWithThemeName($request->bookingId);
        $clientInfo = ci::getClientInfo($request->clientId);

        if($bookingId && $clientInfo){
            return response()->json([
                'success' => true,
                'bookingInfo' => $bookingId,
                'clientInfo' => $clientInfo
            ]);
        }else{
            return response()->json([
                'success' => false,
                'bookingInfo' => array(),
                'clientInfo' => array(),
                'message' => "There's an error!"
            ]);
        }
    }

    //public function getClientInfo()


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
    }

    public function sendMessage(){
        return Nexmo::message()->send([
            'to'   => '639455090428',
            'from' => '639051900576',
            'text' => 'Using the facade to send a message.'
        ]);
    }

    public function sendVerification(Request $request){
        $getVerificationCode = ci::getVerification($request->clientId);

        $query = Nexmo::message()->send([
            'to' => '639051900576',
            'from' => 'Mystery Manila',
            'text' => "Your Verification Code Number is: " . $getVerificationCode[0]->verification_number
        ]);

        if($query){
            return response()->json([
                'success' => true,
                'message' => "message sent successfully"
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "sending message failed"
            ]);
        }
    }

    public function verifycode(Request $request){

        $verifyCode = ci::verifyCode($request);

        if(!blank($verifyCode)){

            $updateIsVerified = DB::connection('mysql')
            ->table('client_info')
            ->where('id', $request->clientId)
            ->update([
                'is_verified' => 1
            ]);

            return response()->json([
                'success' => true,
                'message' => "Verification Successful"
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Sorry, There's an error"
            ]);
        }
    }

    public function sendEmail(Request $request){
        $to_name = $request->firstname . " " . $request->lastname;
        $to_email = $request->email;
        $data = array(
            'name' => $request->lastname . ", " . $request->firstname, 
            'referenceNumber' => $request->refId,
            'mobileNumber' => $request->mobilenumber,
            'dateStart' => $request->dateStart,
            'timeStart' => $request->timeStart,
            'maxPax' => $request->maxPax,
            'venue' => $request->venue,
            'amount' => $request->totalAmount
            // 'name'=> "Bruce Bruce", 
            // 'referenceNumber' => "213213213213", 
            // 'mobileNumber' => "123213123213",
            // 'dateStart' => "asdasdsad",
            // 'timeStart' => "123123213",
            // 'maxPax' => "12",
            // 'venue' => "Mandaluyong",
            // "amount" => "8000"
        );
        Mail::send('template', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Murder Manila');
            $message->from('ppotdota@gmail.com','Murder Manila');
        });
    }
}


