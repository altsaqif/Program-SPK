<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifsTable extends Migration
{
    public function up()
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subkriteria_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('subkriteria_id')->references('id')->on('sub_kriterias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alternatifs');
    }
}
