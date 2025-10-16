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
    Schema::create('game_key', function (Blueprint $table) {
      $table->id();
      $table
        ->foreignId('user_id')
        ->references('id')
        ->on('user')
        ->onDelete('cascade');
      $table->string('gamnum');
      $table->string('visually');
      $table->integer('gamamount');

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
    Schema::dropIfExists('game_key');
  }
};
