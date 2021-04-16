<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->id(); //dodao sam id zato sto ne mogu da menjam atribute pojedinacnom redu u tabeli
            $table->integer('position');
            $table->foreignId('team_id')->constrained();
            $table->integer('games_played')->default("0");
            $table->integer('games_won')->default("0");
            $table->integer('games_lost')->default("0");
            $table->integer('scored_received')->default("0");
            $table->integer('points')->default("0");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standings');
    }
}
