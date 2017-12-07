<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ServiceInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('服務項目標題');
            $table->text('description')->nullable()->comment('服務項目');
            $table->string('serviceInfo_image')->default('blank.jpg')->comment('代表圖片');
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
        Schema::dropIfExists('ServiceInfo');
    }
}
