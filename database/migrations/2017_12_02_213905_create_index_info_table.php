<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->comment('標題');
            $table->string('slogan',255)->comment('簡述');
            $table->string('page_url', 255)->comment('連結');
            $table->string('image', 255)->comment('圖片');
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
        Schema::dropIfExists('indexInfo');
    }
}
