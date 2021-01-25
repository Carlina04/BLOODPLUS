<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompleteAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complete_adds', function (Blueprint $table) {
            $table->id('add_id');
            $table->string('province');
            $table->string('municipality');
            $table->string('barangay');
            $table->string('street');
            $table->string('house_num');
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
        Schema::dropIfExists('complete_adds');
    }
}
