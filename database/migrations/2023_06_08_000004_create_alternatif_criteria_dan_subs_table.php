<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifCriteriaDanSubsTable extends Migration
{
    public function up()
    {
        Schema::create('alternatif_criteria_dan_subs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alternatif_id');
            $table->unsignedBigInteger('kriteria_id');
            $table->unsignedBigInteger('sub_kriteria_id');
            $table->timestamps();

            $table->foreign('alternatif_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreign('kriteria_id')->references('id')->on('kriterias')->onDelete('cascade');
            $table->foreign('sub_kriteria_id')->references('id')->on('sub_kriterias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alternatif_criteria_dan_subs');
    }
}
