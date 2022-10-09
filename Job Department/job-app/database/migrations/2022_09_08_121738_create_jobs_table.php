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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('jobtitle')->nullable();
            $table->date('P_date')->nullable();
            $table->text('Summary')->nullable();
            $table->text('Requirements')->nullable();
            // $table->string('image_id')->nullable();
            $table->string('image_id');
            $table->integer('NOV')->nullable();
            $table->date('C_date')->nullable();
            $table->text('Duties')->nullable();
            $table->text('Req_Doc')->nullable();
            $table->integer('done')->nullable();
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
        Schema::dropIfExists('jobs');
    }
};

