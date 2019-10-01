<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

