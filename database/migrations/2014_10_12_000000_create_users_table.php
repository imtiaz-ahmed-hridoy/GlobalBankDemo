<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user', function (Blueprint $table) {
      $table->id();
      $table->integer('role')->default(0);
      $table
        ->string('validation_code')
        ->unique()
        ->nullable();
      $table->string('Yourname');
      $table->string('account_number');
      $table->string('phone_no');
      $table->string('email');
      $table->string('tax_phone_no')->nullable();
      $table->string('akhama');
      $table->string('banknme');
      $table->string('currency')->nullable();
      $table->integer('balance')->nullable();
      $table->string('password');
      $table->string('user_img');

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
    Schema::dropIfExists('user');
  }
};
