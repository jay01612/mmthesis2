<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_table', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('reference_number');

            $table->date('book_date');
            $table->time('book_time');

            $table->bigInteger('theme_id')->unsigned();
            $table->foreign('theme_id')->references('id')->on('themes');

            $table->string('maxpax');
            $table->string('venue')->nullable();

            $table->tinyInteger('is_booked')->default(0); 
            $table->tinyInteger('is_cancelled')->default(0);    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_table');
    }
}
