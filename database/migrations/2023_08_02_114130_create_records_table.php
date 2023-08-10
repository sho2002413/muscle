<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->integer('time');
            $table->integer('weight');
            $table->integer('count');
            $table->foreignId('training_id')->constrained(); 
        });
    }

    /**
     * Reverse the migrations.;
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
};
