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
        Schema::create('secciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('seccion_id')->nullable()->default(null);
            $table->foreignId('contenido_id')->nullable()->default(null);
            $table->enum('tipo',['estructura','estructura2','estructura3', 'sistema', 'listado','link'])->default('estructura');
            $table->integer('orden')->nullable()->default(0);
            $table->boolean('visible')->default(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secciones');
    }
};
