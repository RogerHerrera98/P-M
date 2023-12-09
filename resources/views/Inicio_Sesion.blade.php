<!DOCTYPE html>
<html lang="en">
<style>

             .phota{
             position: absolute;
         width: 119px;
         height: 116px;
         left: 310px;
         top: 140px;
         
         background: url(Figma_PYM/perfil.png);
        }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=meta charset=" UTF-8>
    <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Moo+Lah+Lah&family=Praise&family=Vibur&family=Wendy+One&display=swap"
        rel="stylesheet">
    <!-- Enlace a la fuente Nunito desde Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- Inclusión del script de Tailwind CSS desde CDN -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Enlace a una hoja de estilo externa llamada style.css en la carpeta CSS -->
    @vite('resources/css/app.css')
    <title>Registro</title>
</head>

<form class="bg-[#DCD4BF]"> <!-- Cuerpo de la página con clases de Tailwind CSS para diseño flexible -->
    <nav
        class="bg-[#E3EEFF] h-20 w-full text-white flex flex-col md:flex-row md:justify-between md:px-7 md:py-4 text-xl">
        <div class="flex justify-between top-0 w-full">
            <div class="flex justify-between items-center ml-1">
                <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
                <img class="w-[85px] h-[85px]" src="Recursos/Logo2.png" alt="">
            </div>

            <div class="flex flex-col md:flex-row text-center md:gap-5">
                <div class=" flex justify-center md:gap-4 ">
                </div>
            </div>
    </nav>

    <nav
        class="bg-[#854d0e] italic font-serif w-full text-white md:flex-row md:justify-between md:px-7 md:py-4 text-xl h-16">
        <div class="flex items-center justify-center">
            <h1 style="font-family: 'Vibur', cursive;" class="text-[#FDFCF8] text-3xl">Inicio de Sesión</h1>

        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">
            <div class=" flex justify-center md:gap-4 ">
            </div>
        </div>
    </nav>

    <div class=" bg-[url('/Recursos/perro.png')] bg-w-screen bg-cover">
        <div class="md:container md:mx-auto md:w-1/2 md:max-w-screen-md py-1 p-10 ">

            <div class=" p-10 rounded shadow-md w-full bg-[#854d0e] bg-opacity-70">
                <div class="container mb-4">
                    <div class=" items-center justify-center h-screen">
                        <div class="relative flex justify-center items-center">
                            <hr class="z-10 absolute top-1/2 w-full border-t-2 border-black transform -translate-y-1/2">
                            <img class="z-50 object-none  my-4 " src="Recursos/perfil.png" alt="Foto del proyecto">
                        </div>
                        <!-- <img class="object-none w-[100%] h-[30%] " src="Figma_PYM/perfil.png" alt="Foto del proyecto"> -->
                        <label for="username" class="block text-sm text-white"
                            style="font-family: 'Wendy One', sans-serif">Correo</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-3 py-2  rounded-md focus:outline-none focus:ring bg-[#854d0e]"
                            placeholder="" required>

                        <div class="mb-4">
                            <label for="username" class="block text-sm text-white"
                                style="font-family: 'Wendy One', sans-serif">Contraseña</label>
                            <div class="relative">
                                <input type="password" id="password" name="password"
                                    class="w-full px-3 py-2 rounded-md focus:outline-none focus:ring bg-[#854d0e]"
                                    placeholder="" required>
                                <button type="button"
                                    class="absolute inset-y-0 right-0 px-2 py-1 bg-gray-200 rounded-r-md focus:outline-none">
                                    <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M1 1l22 22" />
                                    </svg>
                                </button>
                            </div>
                            <input type="checkbox" class="accent-orange-800" checked> Recordar Contraseña
                        </div>
                        <div class="flex items-center justify-center">
                            <img src="Figma_PYM/Botón_Huella.png" alt="" class=" w-25 h-20 relative">
                            <button class="md:block hidden absolute text-white text-center"
                                style="font-family: 'Luckiest Guy', cursive;">
                                Entrar
                            </button>
                        </div>
                        <br>
                        <div class="text-center text-amber-900">
                            <ul class="">
                                <li><a style="font-family: 'Vibur', cursive;" class="text-2xl md: text-xl" href="./Registro.html">Crear cuenta</a></li>
                                <li><a style="font-family: 'Vibur', cursive;" class="text-2xl md: text-xl" href="./Recordar.html">Olvide mi contraseña</a></li>
                                <hr style="border: 1px solid black;">
                            </ul>

                            
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

</html>