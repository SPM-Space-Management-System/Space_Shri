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
        Schema::create('newsroom', function (Blueprint $table) {
            $table->id();//Auto generated primary key
            $table->text('Topic');
            $table->text('Author');
            $table->date('Date');
            $table->text('Country');
            $table->file('Images');
            $table->text('Description');
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
        Schema::dropIfExists('newsroom');
    }
};
