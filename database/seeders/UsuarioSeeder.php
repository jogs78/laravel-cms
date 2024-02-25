<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = new Usuario();
        $admin->nombre_completo = "Citlalli Clemente Parra";
        $admin->nombre_de_usuario = "admin";
        $admin->clave = bcrypt("ccparra");
        $admin->save();
        
        
    }
}
