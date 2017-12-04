<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nav_title')->comment('連結標題');
            $table->string('title')->comment('標題');
            $table->longText('description',16777215)->nullable()->comment('內容');
            $table->string('button_text')->comment('按鈕文字');
            $table->string('about_image')->default('about_image.jpg')->comment('代表圖片');
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
        Schema::dropIfExists('about');
    }
}
