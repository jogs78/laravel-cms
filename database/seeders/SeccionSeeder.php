<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seccion;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
            $table->id();
            $table->foreignId('seccion_id')->nullable()->default(null);
            $table->string('nombre');
            $table->foreignId('contenido_id')->nullable()->default(null);
            $table->enum('tipo',['estructura','aviso','link'])->default('estructura');
            $table->integer('orden')->nullable()->default(0);
            $table->boolean('visible')->default(true);
        */
        $entradas = [
            ['id' =>  105, 'seccion_id' => null, 'nombre' => 'Inicio' , 'contenido_id' => 1, 'tipo'=>'link', 'orden' => 1] ,

            ['id' =>  202, 'seccion_id' => null, 'nombre' => 'Conocenos' , 'contenido_id' => 2, 'tipo'=>'estructura', 'orden' => 2] ,
                ['id' =>  25, 'seccion_id' => 202, 'nombre' => 'Estructura Funcional' , 'contenido_id' => 5, 'tipo'=>'estructura2', 'orden' => 3] ,
                ['id' =>  77, 'seccion_id' => 202, 'nombre' => 'Visitanos' , 'contenido_id' => 7, 'tipo'=>'estructura2', 'orden' => 5] ,
                ['id' =>  44, 'seccion_id' => 202, 'nombre' => 'Historia' , 'contenido_id' => 4, 'tipo'=>'estructura', 'orden' => 2] ,
                ['id' =>  33, 'seccion_id' => 202, 'nombre' => 'Mision & vision' , 'contenido_id' => 3, 'tipo'=>'estructura', 'orden' => 1] ,
                ['id' =>  16, 'seccion_id' => 202, 'nombre' => 'Instalaciones' , 'contenido_id' => 6, 'tipo'=>'estructura', 'orden' => 4] ,
                ['id' =>  17, 'seccion_id' => 202, 'nombre' => 'Prueba' , 'contenido_id' => 7, 'tipo'=>'estructura', 'orden' => 6, 'visible' => false] ,

            ['id' =>  808, 'seccion_id' => null, 'nombre' => 'Oferta Educativa' , 'contenido_id' => 8, 'tipo'=>'estructura2', 'orden' => 3] ,
                ['id' =>  99, 'seccion_id'  => 808, 'nombre' => 'Academias' , 'contenido_id' => 9, 'tipo'=>'estructura2', 'orden' => 1] ,
                ['id' =>  10, 'seccion_id' => 808, 'nombre' => 'Plan de estudios' , 'contenido_id' => 10, 'tipo'=>'estructura', 'orden' => 2] ,

            ['id' =>  11, 'seccion_id' => null, 'nombre' => 'Alumnos' , 'contenido_id' => 11, 'tipo'=>'sistema', 'orden' => 4] ,

            ['id' =>  2, 'seccion_id' => null, 'nombre' => 'Vinculacion' , 'contenido_id' => 12, 'tipo'=>'estructura2', 'orden' => 5] ,
                ['id' =>  13, 'seccion_id' => 2, 'nombre' => 'Danza Folklorica' , 'contenido_id' => 13, 'tipo'=>'estructura', 'orden' => 1] ,

            ['id' =>  1, 'seccion_id' => null, 'nombre' => 'Noticias & Eventos' , 'contenido_id' => 14, 'tipo'=>'listado', 'orden' => 6] ,

            ['id' =>  101, 'seccion_id' => null, 'nombre' => 'Otros7' , 'contenido_id' => 14, 'tipo'=>'listado', 'orden' => 7, 'visible' => false] ,

        ];

        foreach ($entradas as $entrada) {
            Seccion::create($entrada);
        }
    }
}
