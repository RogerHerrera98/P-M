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
    <title>Carnet del Perro</title>

</head>

<body class="bg-[#DCD4BF]"> <!-- Cuerpo de la página con clases de Tailwind CSS para diseño flexible -->

    <nav
        class="bg-[#E3EEFF] h-20 w-full text-white flex flex-col md:flex-row md:justify-between md:px-7 md:py-4 text-xl">
        <div class="flex justify-between top-0 w-full">
            <div class="flex justify-between items-center ml-1">
                <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
                <img class="w-[60px] h-[60px]" src="PYM/Logo.png" alt="">
            </div>

            <div class="flex flex-col md:flex-row text-center md:gap-5">


                <div class="flex items-center md:space-x-5 space-x-0">


                    <div class="flex flex-col items-center">
                        <button class="w-[50px] h-[50px] md:block hidden"><img src="PYM/Vacunaciones.png"
                                alt=""></button>
                        <h1 class="font-[Vibur] text p-3 md:p-0  text-black text-sm md:text-lg">Vacunaciones</h1>
                    </div>

                    <div class="flex flex-col items-center">
                        <button class="w-[50px] h-[50px] md:block hidden"><img src="PYM/Datos_Clínicos.png"
                                alt=""></button>
                        <h1 class="font-[Vibur] text p-3 md:p-0  text-black text-sm md:text-lg">Datos Clínicos</h1>
                    </div>
                </div>

                <div class=" flex justify-center md:gap-4 ">

                </div>


    </nav>

    <nav
        class="bg-[#d4e6c2] italic font-serif w-full text-white md:flex-row md:justify-between md:px-7 md:py-4 text-xl h-16">
        <div class="flex items-center justify-center">
            <h1 style="font-family: 'Vibur', cursive;" class="text-[#FDFCF8]">Carnet de Registro del Perro</h1>

        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">

            <div class=" flex justify-center md:gap-4 ">

            </div>


    </nav>

    <form class="md:container md:mx-auto md:w-3/4 md:max-w-screen-md py-10 ">
        <!-- Contenedor con clases de Tailwind CSS que proporcionan efectos de transición y sombra en respuesta a la interacción del usuario. -->
        <!-- hover:scale-105 escala el contenedor en un 105% cuando se pasa el ratón por encima. -->
        <!-- md:w-1/2 establece el ancho al 50% en dispositivos medianos y superiores. -->
        <!-- md:max-w-screen-md establece el ancho máximo en dispositivos medianos y superiores. -->
        <!-- py-20 establece un padding vertical de 20 unidades. -->
        <!-- p-10 establece un padding interno de 10 unidades. -->
        <!-- transition-transform y duration-300 aplican una transición suave en las transformaciones, con una duración de 300 milisegundos. -->

        <div class=" p-8 rounded shadow-md w-full bg-[#d4e6c2] ">

            <div class="rounded-full flex items-center justify-center w-full">
                <img src="PYM/Foto_Perro.jpg" alt="" class="rounded-full w-44 h-40">
            </div>

            <div class="flex flex-row justify-between space-x-16">
                <div class="flex flex-col">
                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif;">Nombre</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#dcffa3]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Raza</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#dcffa3]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Sexo</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#dcffa3]" placeholder=""
                            required>
                    </div>
                </div>

                <div class="flex flex-col">

                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Fecha de nacimiento</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#dcffa3]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Color</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#dcffa3]" placeholder=""
                            required>

                    </div>

                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Nacionalidad</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-12 py-0 border focus:outline-none focus:ring bg-[#dcffa3]" placeholder=""
                            required>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Descripción</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-full px-16 py-16 border focus:outline-none focus:ring bg-[#dcffa3]" placeholder=""
                            required>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center">

                <img src="PYM/Boton_Hueso.png" alt="" class=" w-40 h-30 relative">
                <button type="submit" class="md:block hidden absolute text-[#7C1B04] text-center"
                    style="font-family: 'Luckiest Guy', cursive;">
                    Editar
                </button>


            </div>
    </form>

</body>

</html>