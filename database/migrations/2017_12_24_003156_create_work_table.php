<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WorkPhotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('work_id', 255)->comment('工程ID');
            $table->string('work＿small_image', 255)->nullable()->comment('工程圖片縮圖');
            $table->string('work_image', 255)->nullable()->comment('工程相關圖片');
            $table->string('status', 255)->nullable()->comment('圖片顯示狀態');
            $table->text('work_image_description')->nullable()->comment('圖片說明文字');
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
        Schema::dropIfExists('WorkPhotos');
    }
}
