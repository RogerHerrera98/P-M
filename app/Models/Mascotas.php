<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    protected $table = 'tbmascotas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'tipo',
        'raza',
        'genero',
        'fecha_nacimiento',
        'color',
        'esterilizada',
        'senales',
        'foto',
    ];

}