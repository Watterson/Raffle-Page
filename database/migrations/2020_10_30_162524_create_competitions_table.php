<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->integer('ticket_total');
            $table->float('ticket_price');
            $table->bigInteger('_fk_question')->unsigned()->index();
            $table->bigInteger('_fk_prize')->unsigned()->index();
            $table->bigInteger('_fk_draw')->unsigned()->index();
            $table->bigInteger('_fk_winner')->unsigned()->index();
            $table->bigInteger('_fk_charity')->unsigned()->index();
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
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('competitions');
      Schema::enableForeignKeyConstraints();
    }
}
