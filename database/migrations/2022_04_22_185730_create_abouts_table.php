<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_tm');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('description_tm');
            $table->string('description_en');
            $table->string('description_ru');
            $table->longText('content_tm');
            $table->longText('content_en');
            $table->longText('content_ru');
            $table->string('image');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
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
        Schema::dropIfExists('abouts');
    }
}
