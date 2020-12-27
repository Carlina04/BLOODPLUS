<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_tables', function (Blueprint $table) {
            $table->id('info_id');
            $table->foreignId('name_id');
            $table->date('birthdate');
            $table->foreignId('add_id');
            $table->enum('gender', ['f', 'm']);
            $table->foreignId('contact_id');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']);
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
        Schema::dropIfExists('info_tables');
    }
}
