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
        Schema::create('data_sewas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id');
            $table->string('name');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_days');
            $table->boolean('jarak');
            $table->boolean('delivery_option');
            $table->unsignedBigInteger('name_driver');
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_receipt')->nullable();
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('cascade');
            $table->foreign('name_driver')->references('id')->on('drivers')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_sewas');
    }
};
