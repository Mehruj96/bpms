<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNappointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nappointments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('service_id');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('appointment_date')->nullable();
            $table->integer('slot_id')->nullable();
            $table->decimal('paid_amount')->default(0.00);
            $table->decimal('due_amount')->default(0.0);
            $table->string('payment_type')->nullable();
            $table->string('type')->default('appoinment');
            $table->string('status')->default('pending');
            $table->date('sales_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nappointments');
    }
}
