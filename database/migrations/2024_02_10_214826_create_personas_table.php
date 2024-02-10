<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",50);
            $table->string("apellidos",50);
            $table->string("carnet",50)->nullable();
            $table->string("direccion",150)->nullable();
            $table->string("foto",50)->nullable();
            $table->date("fechanacimiento")->nullable();
            $table->string("telefono",15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
