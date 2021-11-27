<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->string('title');
            $table->string('orig_name');
            $table->string('slug')->unique();
            $table->text('bg_img')->nullable();
            $table->text('img')->nullable();
            $table->year('year');
            $table->string('country');
            $table->smallInteger('cnt_series')->nullable();
            $table->text('actors');
            $table->text('description');
            $table->json('link')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('movie_categories');
            $table->foreign('type_id')->references('id')->on('movie_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_lists');
    }
}
