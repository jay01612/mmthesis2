<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DB;

class admin extends Model
{
    protected $table = 'admin_table';

    public static function getAdmin(){

    	return admin_table::get();	
    }

    public function addAdmin($data){

    	return admin::insert([
    		'fnmae' => $data->firstname,
    		'lname' => $data->lastname,
    		'password' => $data->password,
    		'position_id' => $data->position_id,

    	]);
    }

    public static function editUser($data){
        return admin::where('id', $data->id)
        ->update([
            'fnmae' => $data->firstname,
            'lname' => $data->lastname,
            'password' => $data->password,
            'position_id' => $data->position_id,
        ]);
    }

    public static function deleteUser($data){
        return User_Model::where('id', $data->id)
        ->update([
            'is_active' => 0
        ]);
    }

    public function tbl_admin_info() {

    	return DB::connection('mysql')
    	->table ('admin_table as a')
    	->select(
    		'a.fname as firstnane',
    		'a.lname as lastname',
    		'a.password as password',
    		'a.position_id as positionID',
    		'b.access_name as AccessName',
            )
    	->join('access_levels as b', '.position_id', '=', 'b.Id')
    	->where('a.is_active', 1)
    	->get();
    
    }
    public function getAdmin($data){
    	return DB::connection('mysql')
    	->table ('admin_table as a')
    	->select(
    		'a.fname as firstnane',
    		'a.lname as lastname',
    		'a.password as password',
    		'a.position_id as positionID',
    		'b.access_name as AccessName',
            )
    	->join('access_levels as b', '.position_id', '=', 'b.Id')
    	->where('a.id', 1-> $data->id)
    	->get()->first();
    }
    
}

