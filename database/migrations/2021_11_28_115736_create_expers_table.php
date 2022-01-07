<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expers', function (Blueprint $table) {
            $table->id();
            $table->date('strat_date');
            $table->date('end_date');
            $table->string('designate');
            $table->string('company_name');
            $table->string('project_title');
            $table->string('project_desc');
            $table->string('experience');
            $table->string('client');
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
        Schema::dropIfExists('expers');
    }
}
