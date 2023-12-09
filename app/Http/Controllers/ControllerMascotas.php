<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascotas; 

class ControllerMascotas extends Controller
{


    public function registrarMascota(Request $request)
    {
        try {
            // Validación de campos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'tipo' => 'required|string',
                'raza' => 'required|string',
                'genero' => 'required|string',
                'fecha' => 'required|date',
                'color' => 'required|string',
                'esterilizada' => 'string',
                'senales' => 'string',
                

            ]);
    // Procesar la imagen
    $nombreImagen = null;

    if ($request->hasFile('foto')) {
        // Obtener la imagen de la solicitud
        $imagen = $request->file('foto');

        // Generar un nombre único para la imagen
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();

        // Guardar la imagen en la carpeta de almacenamiento
        $imagen->storeAs('public/Recursos', $nombreImagen);
    }



            $mascota = new Mascotas([
                'nombre' => $request->input('nombre'),
                'tipo' => $request->input('tipo'),
                'raza' => $request->input('raza'),
                'genero' => $request->input('genero'),
                'fecha_nacimiento' => $request->input('fecha'),
                'color' => $request->input('color'),
                'esterilizada' => $request->input('esterilizada'),
                'senales' => $request->input('señales'),
                'foto' => $nombreImagen,
                
            ]);
    
         
            $mascota->save();
            return redirect()->route('registro')->with('success', 'Mascota creada exitosamente.');
        
          
        } catch (\Exception $e) {
          
            \Log::error('Error al intentar guardar los datos: ' . $e->getMessage());
            dd($e->getMessage());
        }
    }


    public function eliminarMascota(Request $request)
    {
        try {
            $nombre = $request->input('nombre');
    
            // Buscar la mascota por nombre
            $mascota = Mascotas::where('nombre', $nombre)->first();
    
            // Verificar si la mascota existe
            if (!$mascota) {
                return redirect()->route('ruta_de_error')->with('error', 'Mascota no encontrada');
            }
    
            // Eliminar la mascota
            $mascota->delete();
    
           
        } catch (\Exception $e) {
            // Manejar errores y redirigir a la página de error
            \Log::error('Error al intentar eliminar la mascota: ' . $e->getMessage());
          
        }
    }

    public function actualizarMascotaPorNombre(Request $request)


    
    {
        try {
            // Validación de campos 
            $request->validate([
                'nombre' => 'required|string|max:255',
            
            ]);
    
            $nombre = $request->input('nombre');
    
            // Buscar la mascota por nombre
            $mascota = Mascotas::where('nombre', $nombre)->first();
    
            // Verificar si la mascota existe
            if (!$mascota) {
                // Manejar el caso en el que la mascota no se encuentra
            }
    
            // Actualizar los campos según sea necesario
            $mascota->update([
                'tipo' => $request->input('tipo'),
                'raza' => $request->input('raza'),
                'genero' => $request->input('genero'),
                'fecha_nacimiento' => $request->input('fecha'),
                'color' => $request->input('color'),
                'esterilizada' => $request->input('esterilizada'),
                'senales' => $request->input('señales'),
                'foto' => $nombreImagen,
        
            ]);
         
        } catch (\Exception $e) {
            // Manejar errores y redirigir a la página de error
            \Log::error('Error al intentar actualizar la mascota: ' . $e->getMessage());
           
        }
    }

    public function mostrarTabla()
    {

        $mascotas = Mascotas::all();
        return view('tabla', compact('mascotas'));
        }

}


