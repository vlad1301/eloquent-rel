<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('address');
            $table->decimal('lat');
            $table->decimal('lon');
            $table->longText('description');
            $table->longText('features');
            $table->integer('people_minimum');
            $table->integer('people_maximum');
            $table->decimal('price_per_hour');
            $table->string('main_photo');
            $table->string('gallery');
            $table->tinyInteger('is_featured');
            $table->timestamps();
            $table->integer('location_id');
            $table->integer('event_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('event_id')->references('id')->on('events');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
