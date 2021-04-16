<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id_home')->constrained('teams');
            $table->foreignId('team_id_away')->constrained('teams');
            $table->date('date');
            $table->time('time');
            $table->foreignId('stadium_id')->constrained('stadiums');
            $table->integer('points_home');
            $table->integer('points_away');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
