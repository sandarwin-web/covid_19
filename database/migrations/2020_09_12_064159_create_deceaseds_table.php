<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeceasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deceaseds', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('deceaseddate');
            $table->integer('qty');
            $table->unsignedBigInteger('city_id');
            $table->timestamps();

            $table->foreign('city_id')
                    ->references('id')
                    ->on('deceaseds')
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
        Schema::dropIfExists('deceaseds');
    }
}
