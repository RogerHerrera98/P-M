<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=meta charset=" UTF-8>
    <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Moo+Lah+Lah&family=Praise&family=Vibur&family=Wendy+One&display=swap"
        rel="stylesheet">
    <!-- Enlace a la fuente Nunito desde Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- Inclusión del script de Tailwind CSS desde CDN -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Enlace a una hoja de estilo externa llamada style.css en la carpeta CSS -->
    @vite('resources/css/app.css')
    <title>Perfil usuario</title>


    <style>
        .container {
            width: 50px;
            margin: auto;
            margin-top: 0px;
            position: relative;
        }

        .password-container {
            position: relative;
        }

        .password-container .toggle-icon {
            position: absolute;
            right: 10px;
            top: 13px;
            cursor: pointer;
        }
    </style>
</head>

<form class="bg-white"> <!-- Cuerpo de la página con clases de Tailwind CSS para diseño flexible -->

    <nav
        class="bg-[#E3EEFF] h-20 w-full text-white flex flex-col md:flex-row md:justify-between md:px-7 md:py-4 text-xl">
        <div class="flex justify-between top-0 w-full">
            <div class="flex  justify-between items-center ml-1">
                <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
                <img class="w-[60px] h-[60px]" src="Recursos/Logo2.png" alt="">
            </div>

            <div class="flex flex-col md:flex-row text-center md:gap-5">

                <div class=" flex justify-center md:gap-4 ">

                </div>

                    
    </nav>

    <nav
        class="bg-[#e8c484] border italic font-serif w-full text-white md:flex-row md:justify-between md:px-7 md:py-4 text-xl h-16">
        <div class="flex items-center justify-center">
            <h1 style="font-family: 'Vibur', cursive;" class="text-[#7C1B04] text-3xl">Perfil de Usuario</h1>

        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">

            <div class=" flex justify-center md:gap-4 ">

            </div>

                
    </nav>

    <div class="md:container md:mx-auto md:w-3/4 md:max-w-screen-md py-10 ">

        <div class=" p-8 rounded shadow-md w-full bg-[#EEC0C0] bg-opacity-50">


            <div class="flex flex-row justify-between space-x-16">
                <div class="flex flex-col">
                    <div class="mb-4">
                        <label for="Nombre" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif;">Nombres</label>
                        <input type="text" id="Nombre" name="Nombre"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#e8ac64]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Correo electrónico</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#e8ac64]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="direccion" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Dirección</label>
                        <input type="text" id="direccion" name="direccion"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#e8ac64]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="contra" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Contraseña</label>
                        <input type="password" id="contra" name="contra"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#e8ac64]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="confpass" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Confirmar contraseña</label>
                        <input type="password" id="confpass" name="confpass"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#e8ac64]" placeholder=""
                            required>
                    </div>

                    <div class="flex items-center justify-center">
                        <img src="Recursos/Boton_Huella.png" alt="" class=" w-40 h-30 ">
                        <button class="md:block hidden absolute text-lime-600 text-center"
                            style="font-family: 'Luckiest Guy', cursive;">
                            Actualizar Datos
                        </button>
                    </div>

                </div>

                <div class="flex flex-col">

                    <div class="mb-4">
                        <label for="Apellidos" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Apellidos</label>
                        <input type="text" id="Apellidos" name="Apellidos"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#e8ac64]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Genero</label>
                        <div class="flex flex-row">

                            <input type="checkbox" id="checkHombre" name="checkHombre"
                                class="w-6 px-1 py-1 border-[#FDECDD] focus:outline-none focus:ring bg-[#e8ac64]"
                                placeholder="" required>
                            <label for="checkHombre" class="block text-sm text-[#7C1B04]"
                                style="font-family: 'Wendy One', sans-serif">Hombre</label>

                            <input type="checkbox" id="ckeckMujer" name="ckeckMujer"
                            class="w-6 px-1 py-1 border-[#FDECDD] focus:outline-none focus:ring bg-[#e8ac64]"
                                placeholder="" required>
                            <label for="ckeckMujer" class="block text-sm text-[#7C1B04]"
                                style="font-family: 'Wendy One', sans-serif">Mujer</label>
                        </div>

                    </div>

                    <div class="mb-4">
                        <label for="nacimiento" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Fecha de nacimiento</label>
                        <input type="date" id="nacimiento" name="nacimiento"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#e8ac64]" placeholder=""
                            required>
                    </div>
                    <div class="rounded-full flex w-full">
                        <div>
                            <p class="block text-sm text-[#7C1B04]" style="font-family: 'Wendy One', sans-serif">Foto de
                                usuario</p>
                            <img src="PYM/Logo.png" alt="" class="rounded-full w-30 h-40">
                            <div class="flex items-center justify-center">
                                <img src="Recursos/Boton_Huella.png" alt="" class=" w-20 h-30 ">
                                <button class="md:block hidden absolute text-lime-600 text-center"
                                    style="font-family: 'Luckiest Guy', cursive;">
                                    Selecionar <br>archivo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
</div>
</div>
</form>

</html>