<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
    {
        protected $table = 'tbusuario'; // Nombre de la tabla en la base de datos
    
        protected $fillable = [
            'nombre',
            'apellido',
            'correo_electronico',
            'password',


        ];
}
