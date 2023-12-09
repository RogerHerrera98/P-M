<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>tabla</title>
</head>
<body class="bg-[#DCD4BF]">
<div class="flex flex-col justify-center items-center">
        <nav class="bg-[#e3eeff] w-full ">
            <div class="flex flex-row items-center">
                <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl ">P&M</h1>
                <img src="Recursos/Logo2.png" alt="" class="w-12 h-12 ">
            </div>
        </nav>
        <div class="w-full h-20 bg-[#c19489] flex justify-center items-center">
            <h1 style="font-family: 'Vibur', cursive;" class="text-[#FDFCF8] text-4xl">Amigos registrados </h1>
        </div>


<div class="md:container md:mx-auto md:w-1/2 md:max-w-screen-md py-10 p-10">
       
    <div class=" p-10 rounded shadow-md w-full h-full bg-[#FDFCF8]" >
            <div class="flex relative">
                <img src="Recursos/Gato.png" alt="logotipo" class="flex flex-none  w-14 h-14"/>
                <img src="Recursos/Gato.png" alt="logotipo" class="flex flex-none w-14 h-14 absolute bottom-0 left-[90%]"/>
            </div>
                  <!--Nombres de amigos-->
                <h2 class="text-center text-2xl italic font-sans-serif mb-6 font-semibold ">TUS AMIGOS</h2> 
                <div class="px-10 my-8">
        <a href="{{ route('registro') }}" class="w-36 h-24 absolute text-[#7C1B04]" style="font-family: 'Luckiest Guy', cursive;">Ingresar <br> amigos</a>
      </div>
      
                <table class="table-auto mx-8 mt-24 border border-slate-600 content-center">
                        <thead>
                            <tr Class="bg-[#B1796C]">
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Raza</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="content-center items-center " >
                            @foreach($mascotas as $mascota)
                            <tr>
                                <td>{{ $mascota->nombre }}</td>
                                <td>{{ $mascota->tipo }}</td>
                                <td>{{ $mascota->raza }}</td>
                                <td>{{ $mascota->genero }}</td>
                                <td>{{ $mascota->fecha_nacimiento }}</td>
                                <td>
    <a href="{{ route('actualizar', ['id' => $mascota->id]) }}" class="text-blue-500 hover:underline">Editar</a>
</td>
<td>
    <a href="{{ route('eliminar', ['id' => $mascota->id]) }}" class="text-blue-500 hover:underline">eliminar</a>
</td>



                            </tr>
                            @endforeach
                        </tbody>
                </table>
    </div>
</body>
</html>


</script>