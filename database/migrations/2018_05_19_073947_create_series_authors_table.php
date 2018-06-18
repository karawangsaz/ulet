<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_authors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_author');
            $table->unsignedInteger('id_seri');

            $table->foreign('id_author')->references('id')->on('users');
            $table->foreign('id_seri')->references('id')->on('series');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series_authors');
    }
}
