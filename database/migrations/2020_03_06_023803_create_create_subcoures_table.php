<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateSubcouresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_subcoures', function (Blueprint $table) {
            $table->bigIncrements('id_sub');
            $table->unsignedBigInteger('id_menumain');

            $table->foreign('id_menumain')->references('id_menumain')->on('create_mainmenus');
            // $table->bigIncrements('id_menumain');
            $table->string('name_sub');
            $table->string('img_sub');
            $table->longtext('description_sub');
            $table->text('Check');
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
        Schema::dropIfExists('create_subcoures');
    }
}
