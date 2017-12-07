<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('History', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year')->comment('年份日期');
            $table->string('title')->comment('標題');
            $table->longText('description',16777215)->nullable()->comment('內容');
            $table->string('url')->nullable()->comment('連結');
            $table->string('history_image')->nullable()->default('blank.jpg')->comment('代表圖片');
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
        Schema::dropIfExists('History');
    }
}
