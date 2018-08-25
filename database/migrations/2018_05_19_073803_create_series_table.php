<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_admin');
            $table->unsignedInteger('id_material');

            $table->string('slug');
            $table->string('nama');
            $table->string('thumbnail');
            $table->text('deskripsi');

            $table->boolean('approved')->default(0);
            $table->boolean('published')->default(0);
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('id_admin')->references('id')->on('users');
            $table->foreign('id_material')->references('id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}
