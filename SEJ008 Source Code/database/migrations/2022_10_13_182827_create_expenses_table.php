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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->date('sdate')->nullable();
            $table->date('edate')->nullable();
            $table->string('topic')->nullable();
            $table->double('transport')->nullable();
            $table->double('mcost')->nullable();
            $table->integer('visits')->nullable();
            $table->double('extra')->nullable();
            $table->integer('nauthors')->nullable();
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
        Schema::dropIfExists('expenses');
    }
};
