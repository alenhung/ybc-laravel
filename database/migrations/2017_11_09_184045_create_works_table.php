<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('案件標題');
            $table->string('slogan')->comment('案件標語');
            $table->text('description')->nullable()->comment('案件描述');
            $table->string('location')->nullable()->comment('基地位置');
            $table->string('service_location')->nullable()->comment('接待中心');
            $table->string('land_plan')->nullable()->comment('建設規劃');
            $table->string('land_size')->nullable()->comment('基地面積');
            $table->string('households')->nullable()->comment('總戶數');
            $table->string('unit_area')->nullable()->comment('坪數／格局');
            $table->string('public_ratio')->nullable()->comment('公設比');
            $table->string('tall')->nullable()->comment('樓高');
            $table->string('completion_date')->nullable()->comment('完工日期');
            $table->string('project_image')->default('project_image.jpg')->comment('專案圖片');
            $table->string('site_url', 255)->nullable()->comment('代銷網站');
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
        Schema::dropIfExists('works');
    }
}
