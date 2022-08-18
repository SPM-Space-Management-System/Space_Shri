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
            $table->float('fcost')->nullable();
            $table->float('ecost')->nullable();
            $table->float('fucost')->nullable();
            $table->float('oxcost')->nullable();
            $table->float('pcost')->nullable();
            $table->float('ncost')->nullable();
            $table->float('ocost')->nullable();
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
