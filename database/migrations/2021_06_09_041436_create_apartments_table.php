<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->unsigned()->nullable()->index();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->integer('price');
            $table->tinyInteger('rooms');
            $table->boolean('availability');
            $table->longText('description');
            $table->string('phone_number');
            $table->decimal('latitude',$precision=8,$scale=6);
            $table->decimal('longitude',$precision=9,$scale=6);
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
        Schema::dropIfExists('apartments');
    }
}
