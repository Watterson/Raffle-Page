<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competitions', function (Blueprint $table) {
            $table->foreign('_fk_prize')->references('id')->on('prizes');
            $table->foreign('_fk_winner')->references('id')->on('winners');
            $table->foreign('_fk_draw')->references('id')->on('draws');
            $table->foreign('_fk_question')->references('id')->on('questions');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('_fk_question')->references('id')->on('questions');
        });

        Schema::table('entries', function (Blueprint $table) {
            $table->foreign('_fk_user')->references('id')->on('users');
            $table->foreign('_fk_competition')->references('id')->on('competitions');
            $table->foreign('_fk_payment')->references('id')->on('payments');
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('_fk_refund')->references('id')->on('refunds');
        });

        Schema::table('winners', function (Blueprint $table) {
            $table->foreign('_fk_entry')->references('id')->on('entries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
