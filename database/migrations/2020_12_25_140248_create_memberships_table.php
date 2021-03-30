<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->integer('no_of_bit');
            $table->integer('auto_bit');
            $table->integer('price');
            $table->string('validity');
            $table->string('subscription_type');
            $table->string('feature1');
            $table->string('feature2');
            $table->string('feature3');
            $table->string('feature4');
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
        Schema::dropIfExists('memberships');
    }
}
