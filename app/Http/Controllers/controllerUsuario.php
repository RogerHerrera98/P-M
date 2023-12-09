<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; 

class controllerUsuario extends Controller
{
    public function registrarUsuario(Request $request)
    {
        try {
            // Validación de campos
            $request->validate([
                'nombre' => 'string',
                'apellido' => 'string',
                'correo_electronico' => 'string',
                'password' => 'string
                ',

            ]);

            $usuario = new Usuario([
                'nombre' => $request->input('Nombre'),
                'apellido' => $request->input('Apellido'),
                'correo_electronico' => $request->input('email'),
                'password' => $request->input('pass'),
             
















                
            ]);
    
         
            $usuario->save();
        
        } catch (\Exception $e) {
          
            \Log::error('Error al intentar guardar los datos: ' . $e->getMessage());
            dd($e->getMessage());
        }
    }
}
