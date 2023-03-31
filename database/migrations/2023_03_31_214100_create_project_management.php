<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('project_management', function (Blueprint $table) {
            $table->id();

            $table->string('naziv');

            $table->string('opis');

            $table->string('nadlezni');

            $table->string('status');

            $table->date('datum pocetka radova');

            $table->date('datum zavrsetka radova');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('project_management');
    }
};