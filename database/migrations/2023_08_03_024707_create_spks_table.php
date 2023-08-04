<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forecast_id');
            $table->foreignId('makloon_id');
            $table->integer('no_spk');
            $table->date('date');
            $table->integer('spk_s');
            $table->integer('spk_m');
            $table->integer('spk_l');
            $table->integer('spk_xl');
            $table->integer('spk_2xl');
            $table->integer('spk_3xl');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('spks');
    }
}
