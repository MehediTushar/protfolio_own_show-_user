<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('title');
            $table->date('dob');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('address');
            $table->string('resume');
            $table->string('image');
            $table->string('gender');
            $table->string('blood_group');
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
        Schema::dropIfExists('infos');
    }
}
