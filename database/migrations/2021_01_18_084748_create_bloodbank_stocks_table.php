<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodbankStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloodbank_stocks', function (Blueprint $table) {
            $table->id('bbank_bstock_id');
            $table->integer('A_neg');
            $table->integer('A_pos');
            $table->integer('B_neg');
            $table->integer('B_pos');
            $table->integer('O_neg');
            $table->integer('O_pos');
            $table->integer('AB_neg');
            $table->integer('AB_pos');
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
        Schema::dropIfExists('bloodbank_stocks');
    }
}
