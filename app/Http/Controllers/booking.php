<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\clientinfo;

class booking extends Controller
{
    public function book(){
    	$getClient = clientinfo::getClient();
    	return view('booking')->with('in', $getClient);
    }

    public function addbooking(Request $request){
    	$addbooking = clientinfo::clientbook($request);
    	if ($addbooking){
    		return response()
    	} 
    }

    
}
