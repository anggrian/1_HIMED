<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFitursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiturs', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->bigIncrements('id_feature');
            $table->string('main_description');
            $table->text('main_title');
            $table->binary('thumbnails');
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
        Schema::dropIfExists('fiturs');
    }
}
