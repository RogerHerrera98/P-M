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
    <title>Bienvenida</title>
    
   


<body> <!-- Cuerpo de la página con clases de Tailwind CSS para diseño flexible -->

    <nav class="bg-[#E3EEFF] h-20 w-full text-white flex flex-col md:flex-row md:justify-between md:px-7 md:py-4 text-xl">
    <div class="flex justify-between top-0 w-full">
        <div class="flex justify-between items-center ml-1">
        <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
        <img class="w-[60px] h-[60px]" src="PYM/Logo.png" alt="">
    </div>

    <div class="md:block hidden">
        <button class="w-[50px] h-[50px]"><img src="PYM/face.png" alt=""></button>

        <button class="w-[50px] h-[50px]"><img src="PYM/insta.png" alt=""></button>

        <button class="w-[50px] h-[50px]"><img src="PYM/twiter.png" alt=""></button>

    </div>

    <div class="flex items-center md:space-x-5 space-x-0">

        <div class="flex flex-col items-center">
            <button class="w-[50px] h-[50px] md:block hidden"><img src="PYM/sobre-nosotros.png" alt=""></button>
        <h1 class="font-sans-serif text p-2 md:p-0  text-black text-sm md:text-lg">Sobre Nosotros</h1>
        </div>

        <div class="flex flex-col items-center">
            <button class="w-[50px] h-[50px] md:block hidden"><img src="PYM/perfil.png" alt=""></button>
        <h1 class="font-sans-serif text p-2 md:p-0  text-black text-sm md:text-lg">Perfil</h1>
        </div>

        <div class="flex flex-col items-center">
            <button class="w-[50px] h-[50px] md:block hidden"><img src="PYM/Idioma.png" alt=""></button>
        <h1 class="font-sans-serif text p-2 md:p-0  text-black text-sm md:text-lg">Idioma</h1>
        </div>

        <div class="flex flex-col items-center">
            <button class="w-[50px] h-[50px] md:block hidden"><img src="PYM/Contacto.png" alt=""></button>
        <h1 class="font-sans-serif text p-2 md:p-0  text-black text-sm md:text-lg">Contacto</h1>
        </div>
    </div>
    </div>
    <div class="flex flex-col md:flex-row text-center md:gap-5">

        <div class=" flex justify-center md:gap-4 ">

        </div>

    </nav>



 
        <!-- Contenedor con clases de Tailwind CSS que proporcionan efectos de transición y sombra en respuesta a la interacción del usuario. -->
        <!-- hover:scale-105 escala el contenedor en un 105% cuando se pasa el ratón por encima. -->
        <!-- md:w-1/2 establece el ancho al 50% en dispositivos medianos y superiores. -->
        <!-- md:max-w-screen-md establece el ancho máximo en dispositivos medianos y superiores. -->
        <!-- py-20 establece un padding vertical de 20 unidades. -->
        <!-- p-10 establece un padding interno de 10 unidades. -->
        <!-- transition-transform y duration-300 aplican una transición suave en las transformaciones, con una duración de 300 milisegundos. -->


            <!-- Contenedor interno con fondo blanco, padding, bordes redondeados y sombra. -->
            
            <div class="bg-cover bg-center md:bg-no-repeat md:h-screen relative" style="background-image: url('PYM/Fondo_Bienvenida.jpg')">
                <div class="flex flex-col space-y-[450px] text-center items-center justify-center 
                 " >
                    <h2 class="font-[Praise] text-[#794A03] md:text-8xl text-6xl">Bienvenidos</h2>

                    <h3 class="font-[Vibur] text-[#794A03] text-4xl">"Regala el mejor cuidado que le puedes dar a tu mascota"</h3>

                    

                   <div class="absolute top-0">
                    <div class="relative">
                        <img src="PYM/Boton_Huella.png" alt="" class=" w-36 h-24 ">
                        <button class="md:block hidden text-[#FDFCF8] absolute inset-x-0 bottom-0 py-2" style="font-family: 'Luckiest Guy', cursive;">Ingresar</button>
                        
                    </div>
                   </div>

                          

                    
                    
                   
                </div>
               
            </div>
            <!-- Título de la sección de inicio de sesión -->
            
       




            </form>
        </div>
    </div>
</body>
</html>



