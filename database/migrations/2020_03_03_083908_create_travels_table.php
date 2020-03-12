<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->bigIncrements('id_travel');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('type_id')->on('type_locations')->onDelete('SET NULL');
            $table->string('name_location');
            $table->text('description');
            $table->string('display');
            $table->string('image');
            $table->text('map_url');
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
        Schema::dropIfExists('travels');
    }
}
