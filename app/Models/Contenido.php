<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'titulo' , 'creacion', 'vigor' , 'texto'] ;
/*
        protected $fillable = ['id', 'titulo' , 'creacion', 'vigor' , 'texto'] ;
            $table->id();
            $table->string('titulo');
            $table->date('creacion');
            $table->date('vigor');
            $table->text('texto');
            $table->timestamps();
*/
    public function secciones(){
        return $this->belongsTo(Seccion::class);
    }
}
