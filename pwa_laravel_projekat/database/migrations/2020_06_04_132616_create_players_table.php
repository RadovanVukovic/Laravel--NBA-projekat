<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->integer('years');
            $table->float('height');
            $table->float('weight');

            $table->float('avg_points');
            $table->float('avg_assist');
            $table->float('avg_rebounds');

            $table->foreignId('team_id')->constrained();
            $table->foreignId('position_id')->constrained();

            $table->string('img_url');
            $table->boolean('free');
            $table->float('sum');//zbir poena, asist i reb zbog all-star tima!
            $table->integer('games_played');//treba zbog racunanja avg poena, asist i reb!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
