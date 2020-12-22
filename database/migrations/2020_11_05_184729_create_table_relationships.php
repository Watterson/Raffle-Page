<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRelationships extends Migration
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
            $table->foreign('_fk_charity')->references('id')->on('charities');
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

        Schema::table('user_interfaces', function (Blueprint $table) {
            $table->foreign('_fk_component')->references('id')->on('user_interface_components');
        });

        Schema::table('user_interface_components', function (Blueprint $table) {
            $table->foreign('_fk_page')->references('id')->on('user_interface_pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Schema::table('competitions', function (Blueprint $table) {
      //     $table->dropForeign('competitions__fk_prize_foreign');
      //     $table->dropForeign('competitions__fk_winner_foreign');
      //     $table->dropForeign('competitions__fk_draw_foreign');
      //     $table->dropForeign('competitions__fk_question_foreign');
      //     $table->dropForeign('competitions__fk_charity_foreign');
      // });
      //
      // Schema::table('answers', function (Blueprint $table) {
      //   $table->dropForeign('answers__fk_question_foreign');
      // });
      //
      // Schema::table('entries', function (Blueprint $table) {
      //     $table->dropForeign('entries__fk_user_foreign');
      //     $table->dropForeign('entries__fk_competition_foreign');
      //     $table->dropForeign('entries__fk_payment_foreign');
      // });
      //
      // Schema::table('payments', function (Blueprint $table) {
      //   $table->dropForeign('payments__fk_refund_foreign');
      // });
      //
      // Schema::table('winners', function (Blueprint $table) {
      //   $table->dropForeign('winners__fk_entry_foreign');
      // });
      //
      // Schema::table('user_interfaces', function (Blueprint $table) {
      //   $table->dropForeign('user_interfaces__fk_component_foreign');
      // });
      //
      // Schema::table('user_interface_components', function (Blueprint $table) {
      //   $table->dropForeign('user_interface_components__fk_page_foreign');
      // });
    }
}
