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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('pname')->nullable();
            $table->date('pdate')->nullable();
            $table->integer('noOfLaunch')->nullable();
            $table->integer('noOfLand')->nullable();
            $table->integer('noOfReflight')->nullable();
            $table->double('fcost', 14, 2)->nullable();
            $table->double('ecost', 14, 2)->nullable();
            $table->double('fucost', 14, 2)->nullable();
            $table->double('oxcost', 14, 2)->nullable();
            $table->double('pcost', 14, 2)->nullable();
            $table->double('ncost', 14, 2)->nullable();
            $table->double('ocost', 14, 2)->nullable();
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
        Schema::dropIfExists('projects');
    }
};
