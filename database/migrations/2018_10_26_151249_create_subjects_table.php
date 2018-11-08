<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('ids');
            $table->string('subject');
            $table->string('active',2);
            $table->string('academy',2);
            $table->integer('idc')->unsigned();
             $table->integer('ida')->unsigned();
            $table->foreign('idc')->references('idc')->on('careers')->onDelete('cascade');
            $table->foreign('ida')->references('ida')->on('areas')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('subjects');
    }
}
