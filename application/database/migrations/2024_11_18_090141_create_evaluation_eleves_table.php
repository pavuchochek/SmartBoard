<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationElevesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('evaluation_eleves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluation_id');
            $table->unsignedBigInteger('eleve_id');
            $table->float('note')->nullable();
            $table->timestamps();

            $table->foreign('evaluation_id')->references('id')->on('evaluations')->onDelete('cascade');
            $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('evaluation_eleves');
    }
}
