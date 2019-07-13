<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilestonesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milestones_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('milestone_id')
                  ->foreign('milestone_id')
                  ->references('id')
                  ->on('milestones');
            $table->bigInteger('user_id')
                  ->foreign('user_id')
                  ->references('id')
                  ->on('users');
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
        Schema::dropIfExists('milestones_user');
    }
}
