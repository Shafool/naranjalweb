<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apePaterno');
            $table->string('apeMaterno');
            $table->string('telefono')->unique();
            $table->string('email')->unique();
            $table->string('nick')->unique();
            $table->string('clave', 32);

            // Campos de seguridad
            $table->boolean('activado'); // 1: Activado, 0: Desact
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
