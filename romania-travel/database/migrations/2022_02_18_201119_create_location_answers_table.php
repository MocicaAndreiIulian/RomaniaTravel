<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_answers', function (Blueprint $table) {
          $table->id();
          $table->integer('questionId');
          $table->integer('userId');
          $table->longtext('answer');
            $table->integer('favorite')->default(0);
          $table->integer('approve')->default(0);
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
        Schema::dropIfExists('location_answers');
    }
}
