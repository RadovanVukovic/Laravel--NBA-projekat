<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->enum('team', ['HOME', 'AWAY']);
            $table->integer('two_point_scored');
            $table->integer('two_point_shots');
            $table->float('percentage_two_point');
            $table->integer('three_point_scored');
            $table->integer('three_point_shots');
            $table->float('percentage_three_point');
            $table->integer('free_throw_scored');
            $table->integer('free_throw_shots');
            $table->float('percentage_free_throw');
            $table->integer('fouls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_statistics');
    }
}
