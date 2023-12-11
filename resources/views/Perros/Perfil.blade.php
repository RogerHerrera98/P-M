<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Moo+Lah+Lah&family=Praise&family=Vibur&family=Wendy+One&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Perfil del Perro</title>
</head>
<body>
<nav class="bg-[#E3EEFF] h-20 w-full flex flex-row justify-between items-center">
    <div class="flex justify-between items-center m-1">
        <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
        <img class="w-14 h-14" src="Recursos/Logo2.png" alt="Icono P&M">
    </div>
    <div class="flex flex-col justify-center items-center m-1">
        <img src="Recursos/Carnet.png" alt="carnet" class="w-14 h-14">
        <p style="font-family: 'Vibur', cursive;" class="text-sm text-black text-center ">Carnet</p>
    </div>
</nav>
<div class="bg-[#c09489] w-full h-16 flex justify-center items-center ">

            <h1 style="font-family: 'Vibur', cursive;" class="text-4xl text-white">Registro</h1>

</div>
<div class="h-screen  w-full bg-no-repeat bg-cover bg-center flex flex-col justify-center items-center" style="background-image: url('Recursos/Fondo_Inicio.jpg');">
    <div class=" w-4/5 h-full  bg-[#c09489]/50 my-1">
        <div class="w-full h-full flex flex-row justify-center items-center px-4 py-2">
            <form action="" method="post" class="w-2/5 h-full  ">
               <div class="flex flex-col justify-center items-center mt-16 w-full">
               <div class="flex flex-col w-2/3 mb-4">
                    <label for="nombre"  style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Nombres</label>
                    <input type="text" name="nombre" id="nombre"  style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] pl-4 h-8 text-md">
                </div>
                <div class="flex flex-col w-2/3 mb-4">
                    <label for="apellido" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Apellidos</label>
                    <input type="text" name="apellido" id="apellido" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] pl-4 h-8 text-md">
                </div>
                <div class="flex flex-col w-2/3 mb-4">
                    <label for="email" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Correo Electrónico</label>
                    <input type="email" name="email" id="email" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] pl-4 h-8 text-md">
                </div>
                <div class="flex flex-col w-2/3 mb-4 relative">
                    <label for="contra" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Contraseña</label>
                    <input type="password" name="contra" id="contra" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] pl-4 pr-7 h-8 text-md">
                    <div>
                    <img src="Recursos/Huella_Contra.webp" alt="" class="w-8 h-8 absolute bottom-0 right-0">
                    </div>
                </div>
                <div class="flex flex-col w-2/3 mb-4 relative">
                    <label for="confContra" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Confirma contraseña </label>
                    <input type="password" name="confContra" id="confContra" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] pl-4 pr-7 h-8 text-md ">
                    <div>
                    <img src="Recursos/Huella_Contra.webp" alt="" class="w-8 h-8 absolute bottom-0 right-0">
                    </div>
                </div>

                <div class="flex flex-col justify-center items-center w-28 h-28 mb-4 relative hover:bg-[#b1796c] rounded-full">
                <img src="Recursos/Boton_Huella.png" alt="" class="w-28 h-28">
                    <div class="w-full flex flex-col justify-center items-center">
                        <button type="submit" style="font-family: 'Luckiest Guy'" class="text-white absolute bottom-5 w-28">ENTRAR</button>
                    </div>
                </div>
               </div>


                </form>
            <div class="w-2/5 h-full flex flex-col items-center justify-start">
                <img src="Recursos/Foto_Registro2.png" alt="" class="w-2/3 h-2/3 mt-10">

            </div>
        </div>
    </div>

</div>


</body>
</html>