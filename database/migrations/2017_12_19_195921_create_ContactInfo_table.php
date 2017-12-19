<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ContactInfo', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',255)->comment('聯絡人');
          $table->string('tel',255)->comment('聯絡電話');
          $table->string('fax',255)->comment('傳真');
          $table->string('address',255)->comment('地址');
          $table->string('e_address',255)->comment('英文地址');
          $table->string('email',255)->comment('連絡信箱');
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
        Schema::dropIfExists('ContactInfo');
    }
}
