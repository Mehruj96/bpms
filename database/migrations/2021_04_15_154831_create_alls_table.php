<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('service');
            $table->string('contact');
            $table->string('appointment_date')->nullable();
            $table->string('appointment_time')->nullable();
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
        Schema::dropIfExists('alls');
    }
}