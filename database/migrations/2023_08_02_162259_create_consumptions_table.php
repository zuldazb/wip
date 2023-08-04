<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id');
            $table->foreignId('fabric_id');         
            $table->foreignId('spk_id')->nullable();         
            $table->decimal('cons_s');
            $table->decimal('cons_m');
            $table->decimal('cons_l');
            $table->decimal('cons_xl');
            $table->decimal('cons_2xl');
            $table->decimal('cons_3xl');
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
        Schema::dropIfExists('consumptions');
    }
}
