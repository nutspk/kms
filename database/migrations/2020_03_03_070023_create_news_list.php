<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_typenews');
            $table->foreign('id_typenews')->references('id_typenews')->on('type_news');
            $table->string('Titelnews');
            $table->string('imgnews');
            $table->longtext('Description_news');
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
        Schema::dropIfExists('news_list');
    }
}
