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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('jobtitle')->nullable();
            $table->date('DOA')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('name')->nullable();
            $table->integer('tp_no')->nullable();
            $table->text('NIC')->nullable();
            $table->string('cv_id');
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
        Schema::dropIfExists('applicants');
    }
};
