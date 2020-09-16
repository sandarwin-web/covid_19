<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positives', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('date');
            $table->unsignedBigInteger('city_id');
            $table->timestamps();

            $table->foreign('city_id')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positives');
    }
}
