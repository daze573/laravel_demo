<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoges', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->tinyInteger('gender')->unsigned()->comment('性別 : 1 : 男性 2 : 女性');
            $table->string('ages');
            $table->string('email');
            $table->string('email_send');
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
        Schema::dropIfExists('hoges');
    }
};
