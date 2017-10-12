<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitRumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_rumahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kavling');
            $table->string('Blok');
            $table->string('No_Rumah');
            $table->string('Harga_Rumah');
            $table->string('Luas_Tanah');
            $table->string('Luas_Bangunan');
            
            
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
        Schema::dropIfExists('unit_rumahs');
    }
}
