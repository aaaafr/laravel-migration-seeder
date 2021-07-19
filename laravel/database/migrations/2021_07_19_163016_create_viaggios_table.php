<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Vacation
//  - id
//  - place
//  - price
//  - period
//  - poster
//  - description

class CreateViaggiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggios', function (Blueprint $table) {
            $table->id();
            $table->string('place', 100);
            $table->text('description',100);
            $table->string('price')->nullable();
            $table->string('period')->nullable();
            $table->string('poster')->nullable();
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
        Schema::dropIfExists('viaggios');
    }
}
