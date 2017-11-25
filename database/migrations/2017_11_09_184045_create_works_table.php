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
            $table->string('title')->Comment('案件標題');
            $table->string('slogan')->Comment('案件標語');
            $table->string('description')->nullable()->Comment('案件描述');
            $table->string('location')->nullable()->Comment('基地位置');
            $table->string('service_location')->nullable()->Comment('接待中心');
            $table->string('land_plan')->nullable()->Comment('建設規劃');
            $table->string('land_size')->nullable()->Comment('基地面積');
            $table->string('households')->nullable()->Comment('總戶數');
            $table->string('unit_area')->nullable()->Comment('坪數／格局');
            $table->string('public_ratio')->nullable()->Comment('公設比');
            $table->string('tall')->nullable()->Comment('樓高');
            $table->string('completion_date')->nullable()->Comment('完工日期');
            $table->string('project_image')->default('project_image.jpg')->Comment('專案圖片');
            $table->string('site_url')->nullable()->Comment('代銷網站');
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
