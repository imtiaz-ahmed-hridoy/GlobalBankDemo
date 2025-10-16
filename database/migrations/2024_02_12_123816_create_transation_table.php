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
        Schema::create('transation', function (Blueprint $table) {
            $table->id();
            $table->string('receiver_account');
            // Corrected column name and data type
            $table->integer('amount');
            $table->foreignId('user_id')->references('id')->on('user')->onDelete('cascade'); // Corrected table name

            $table->string('bank');
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
        Schema::dropIfExists('transation');
    }
};
