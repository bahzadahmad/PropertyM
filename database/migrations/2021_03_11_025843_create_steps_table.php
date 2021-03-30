<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->id('step_id');
            $table->integer('parent_id')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('amount_raised')->nullable();
            $table->integer('type')->nullable();
            $table->integer('no_of_object')->nullable();
            $table->integer('amount_of_object')->nullable();
            $table->string('object_icon')->nullable();
            $table->float('status');
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
        Schema::dropIfExists('steps');
    }
}
