<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DB;

class payment extends Model
{
    protected $table = 'payment_table';

    public static function getclientPayment(){

    	return payment_table::get();
    }

	public static function clientPayment(){

		return payment_table::insert([
			'mode_of_payment' => $data->mode_of_payment,
			'paid_time'=> $data->time_paid,
			'paid_date'=> $data->date_paid,
			'amount'=> $data->amount,
		]);
	}

	public static function clientResPaymentTbl() {
		return DB::connection('mysql')
		->table('payment_table as a')
		->select(
			'a.reference_id as Ref_ID',
			'a.mode_of_payment as Mode_of_Payment',
			'b.book_date as book_date',
			'b.book_time as book_time',
			'a.paid_date as paid_date',
			'a.paid_time as paid_time',
			'a.amount as amount',
			'a.is_paid as is_paid'
		->join('booking_table as b', 'a.id', '=', 'b.id')
    	->where('a.is_verified', 0)
    	->get();
		)
	}

	public static function clientBookedPaymentTbl() {
		return DB::connection('mysql')
		->table('payment_table as a')
		->select(
			'a.reference_id as Ref_ID',
			'a.mode_of_payment as Mode_of_Payment',
			'b.book_date as book_date',
			'b.book_time as book_time',
			'a.paid_date as paid_date',
			'a.paid_time as paid_time',
			'a.amount as amount',
			'a.is_paid as is_paid'
		->join('booking_table as b', 'a.id', '=', 'b.id')
    	->where('a.is_verified', 1)
    	->get();
		)
	}
}
