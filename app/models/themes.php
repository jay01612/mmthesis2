<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class themes extends Model
{
    protected $table = 'themes';

    public static function getThemes(){

    	return themes::get();

    }

    public static function getThemeId($data){
        return DB::connection('mysql')
        ->table('themes')
        ->select(
        	'themes.id',
        	'themes.name'
        )
        ->where('themes.id', $data->id)
        ->get()->first();
    }

    
}
