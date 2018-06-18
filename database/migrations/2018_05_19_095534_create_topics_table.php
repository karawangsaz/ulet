<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_seri');
            
            $table->boolean('published');
            $table->unsignedSmallInteger('urutan');
            $table->string('author');
            $table->string('judul');
            $table->string('thumbnail');
            $table->string('url_video');
            $table->mediumText('deskripsi');
            $table->timestamps();

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
        Schema::dropIfExists('topics');
    }
}
