<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;
    protected $table = "secciones";
    protected $fillable = [ 'seccion_id' , 'nombre', 'contenido_id' , 'tipo', 'orden', 'visible'] ;

}
