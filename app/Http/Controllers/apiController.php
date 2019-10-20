<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\models\booking;

class apiController extends Controller
{
    //

    public function index(){
    	return view('login');
    }

    public function login(Request $r){
        // return bcrypt('password');
        // return $r->all();

        $validateData = $r->validate([

            'username' => 'required|string',
            'password' => 'required|string'

        ]);

        Auth::attempt([
            'username' => $r->username,
            'password' => $r->password
        ]);

        if(Auth::check()){
            return view('reports.index');
            // return redirect('/reports');
        }else{
            return redirect('/login');
        }
    }
    

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function getBookedNotPayed(){
        $query = booking::getBookedNotPayed();
        if($query){
            return response()->json([
                "data" => $query
            ]);
        }else{
            return response()->json([
                "data" => array()
            ]);
        }
    }

    public function getBookedNotPayed1(){
        $query = booking::getBookedNotPayed1();
        if($query){
            return response()->json([
                "data" => $query
            ]);
        }else{
            return response()->json([
                "data" => array()
            ]);
        }
    }
}
