<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique()->nullable();
            $table->integer('orden');
            // Cuando se elimine el producto, se eliminaran tambien las fotos
            $table->foreignId('servicio_id')->constrained('servicios')->onDelete('cascade');

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
        Schema::dropIfExists('foto_servicios');
    }
}
