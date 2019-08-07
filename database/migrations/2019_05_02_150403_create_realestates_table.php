<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealestatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('paths');
            $table->integer('beds');
            $table->integer('living_room');
            $table->integer('kitchens');
            $table->string('area');
            $table->string('address');
            $table->string('price');
            $table->date('date');
            $table->text('details');
            $table->integer('cities_id');
            $table->integer('users_id')->nullable();
            $table->integer('categories_id');
            $table->integer('types_id');
            $table->integer('photos_id');
            $table->boolean('published')->default(0);
            $table->boolean('in_home')->default(0);
            $table->boolean('deleted')->default(0);
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
        Schema::dropIfExists('realestates');
    }
}
