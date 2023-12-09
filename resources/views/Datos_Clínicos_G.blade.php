<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=meta charset=" UTF-8>
    <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Establece una conexión previa al servidor de Google Fonts -->
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
    <title>Datos Clínicos Gato</title>
</head>

<body class="bg-[#efeff0]"> <!-- Cuerpo de la página con clases de Tailwind CSS para diseño flexible -->

    <nav
        class="bg-[#E3EEFF] h-20 w-full text-white flex flex-col md:flex-row md:justify-between md:px-7 md:py-4 text-xl">
        <div class="flex justify-between top-0 w-full">
            <div class="flex justify-between items-center ml-1">
                <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
                <img class="w-[60px] h-[60px]" src="PYM/Logo.png" alt="">
            </div>


            <div class="flex items-center md:space-x-5 space-x-0">


                <div class="flex flex-col items-center">
                    <button class="w-[50px] h-[50px] md:block hidden"><img src="Recursos/Vacunaciones.png" alt=""></button>
                    <h1 class="font-[Vibur] text p-3 md:p-0  text-black text-sm md:text-lg">Vacunaciones</h1>
                </div>

                <div class="flex flex-col items-center">
                    <button class="w-[50px] h-[50px] md:block hidden"><img src="PYM/Datos_Clínicos.png" alt=""></button>
                    <h1 class="font-[Vibur] text p-3 md:p-0  text-black text-sm md:text-lg">Datos Clínicos</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">

            <div class=" flex justify-center md:gap-4 ">

            </div>

                
    </nav>

    <nav
        class="bg-[#dd8383] border-2 border-[#d05555] w-full md:flex-row md:justify-between md:px-7 md:py-4 text-xl h-16">
        <div class="flex items-center justify-center">
            <h1 style="font-family: 'Vibur', cursive;" class="text-[#FDFCF8]">Datos Clínicos</h1>

        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">

            <div class=" flex justify-center md:gap-4 ">

            </div>

                
    </nav>

    <div class="md:container md:mx-auto md:w-1/2 md:max-w-screen-md py-10">
        <!-- Contenedor con clases de Tailwind CSS que proporcionan efectos de transición y sombra en respuesta a la interacción del usuario. -->
        <!-- hover:scale-105 escala el contenedor en un 105% cuando se pasa el ratón por encima. -->
        <!-- md:w-1/2 establece el ancho al 50% en dispositivos medianos y superiores. -->
        <!-- md:max-w-screen-md establece el ancho máximo en dispositivos medianos y superiores. -->
        <!-- py-20 establece un padding vertical de 20 unidades. -->
        <!-- p-10 establece un padding interno de 10 unidades. -->
        <!-- transition-transform y duration-300 aplican una transición suave en las transformaciones, con una duración de 300 milisegundos. -->

        <div class=" p-10 rounded shadow-md w-full flex justify-center bg-[#eec1c1]">

            <!-- Contenedor interno con fondo blanco, padding, bordes redondeados y sombra. -->

            <!-- Título de la sección de inicio de sesión -->
            <div class="mb-4">
                <label for="username" class="block text-sm text-[#7C1B04]"
                    style="font-family: 'Wendy One', sans-serif">Peso</label>
                <!-- Etiqueta y campo de entrada para el correo -->
                <input type="text" id="username" name="username"
                    class="w-30 px-1 py-1 focus:outline-none focus:ring bg-[#FDECDD]" placeholder="" required>

                <div class="mb-4">
                    <label for="username" class="block text-sm text-[#7C1B04]"
                        style="font-family: 'Wendy One', sans-serif">Altura</label>
                    <!-- Etiqueta y campo de entrada para el correo -->
                    <input type="text" id="username" name="username"
                        class="w-30 px-1 py-1 focus:outline-none focus:ring bg-[#FDECDD]" placeholder="" required>

                    <div class="mb-4">
                        <label for="username" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Alergias</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="username" name="username"
                            class="w-30 px-1 py-1 focus:outline-none focus:ring bg-[#FDECDD]" placeholder="" required>

                        <div class="flex flex-row">

                        </div>
                        <h4 class="block text-sm text-[#7C1B04]" style="font-family: 'Wendy One', sans-serif">
                            Discapacidad</h4>

                        <div class="flex flex-row space-x-4">

                            <div class="flex flex-row">
                                <input type="checkbox" id="username" name="username"
                                    class="w-6 px-1 py-1 border focus:outline-none focus:ring bg-[#FDECDD]"
                                    placeholder="" required>
                                <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                    style="font-family: 'Wendy One', sans-serif">Si</label>
                            </div>

                            <div class="flex flex-row">
                                <input type="checkbox" id="username" name="username"
                                    class="w-6 px-1 py-1 border-[#FDECDD] focus:outline-none focus:ring bg-[#FDECDD]"
                                    placeholder="" required>
                                <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                    style="font-family: 'Wendy One', sans-serif">No</label>

                            </div>
                        </div>

                        <h4 class="block text-sm text-[#7C1B04]" style="font-family: 'Wendy One', sans-serif">
                            Estirilizado</h4>


                        <div class="flex flex-row space-x-4">

                            <div class="flex flex-row ">
                                <input type="checkbox" id="username" name="username"
                                    class="w-6 px-1 py-1 focus:outline-none focus:ring bg-[#FDECDD]" placeholder=""
                                    required>
                                <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                    style="font-family: 'Wendy One', sans-serif">Si</label>
                            </div>

                            <div class="flex flex-row">
                                <input type="checkbox" id="username" name="username"
                                    class="w-6 px-1 py-1 focus:outline-none focus:ring bg-[#FDECDD]" placeholder=""
                                    required>
                                <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                    style="font-family: 'Wendy One', sans-serif">No</label>

                            </div>
                        </div>

                        <div class="flex items-center justify-center">

                            <img src="PYM/Botón_Pez.png" alt="" class=" w-30 h-16 relative">

                            <button class="md:block hidden absolute text-[#7C1B04] text-center"
                                style="font-family: 'Luckiest Guy', cursive;">
                                Guardar
                            </button>
                        </div>
                    </div>


                    </form>
                </div>
            </div>
</body>

</html>