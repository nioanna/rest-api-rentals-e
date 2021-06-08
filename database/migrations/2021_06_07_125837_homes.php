<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Homes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('city');
            $table->double('square_footage');
            $table->double('price');
            $table->double('rooms_number');
            $table->double('parking_spaces');
            $table->string('category');
            $table->integer('user_id');
            $table->timestamps();
            $table->string("info");
            $table->string("image");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
