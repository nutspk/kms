<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listsubs', function (Blueprint $table) {
            $table->bigIncrements('id_list');
            $table->unsignedBigInteger('id_sub');

            $table->foreign('id_sub')->references('id_sub')->on('create_subcoures');
            // $table->bigIncrements('id_menumain');
            $table->string('titallist');
            $table->longtext('Description');
            $table->string('img_list');
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
        Schema::dropIfExists('listsubs');
    }
}
