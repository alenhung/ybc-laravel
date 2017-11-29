<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkingsPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WorkingPhotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('working_id', 255)->comment('在建工程ID');
            $table->string('working_images', 255)->nullable()->comment('在建工程圖片');
            $table->text('working_image_description')->nullable()->comment('在建工程圖片說明文字');
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
        Schema::dropIfExists('WorkingPhotos');
    }
}
