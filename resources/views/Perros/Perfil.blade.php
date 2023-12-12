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
    <title>Perfil</title>
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
<div class="bg-[#956e37] w-full h-16 flex justify-center items-center ">

            <h1 style="font-family: 'Vibur', cursive;" class="text-4xl text-white">Perfil del Perro</h1>

</div>
<div class="h-screen  w-full bg-no-repeat bg-cover bg-center flex flex-col justify-center items-center" style="background-image: url('Recursos/Fondo_Inicio.jpg');">
    <div class=" w-4/5 h-full  bg-[#956e37]/50 my-2">
        <div>
            <div>
                <img src="Recursos/Foto_Perro.jpg" alt="">
            </div>
            <form action="" method="post">
            <div class="flex flex-col w-2/3 mb-4">
                    <label for="nombre"  style="font-family: 'Wendy One', sans-serif" class="text-[#781e08] text-lg">Nombres</label>
                    <input type="text" name="nombre" id="nombre"  style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#e0ae65] px-4 h-8 text-md" oninput="validarNumero()">
                    <p id="mensaje" class="text-red-500 text-sm mt-2"></p>
                </div>
                <div class="flex flex-col w-2/3 mb-4">
                    <label for="raza" style="font-family: 'Wendy One', sans-serif" class="text-[#781e08] text-lg">Raza</label>
                    <input type="text" name="raza" id="raza" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#e0ae65] px-4 h-8 text-md" oninput="validarNumero2()">
                    <p id="mensaje2" class="text-red-500 text-sm mt-2"></p>
                </div>
                <div>
                    <label for="sexo">Sexo</label>
                    <div>
                        <input type="checkbox" name="checkHembra" id="checkHembra">
                        <label for="raza" style="font-family: 'Wendy One', sans-serif" class="text-[#781e08] text-lg">Hembra</label>

                    </div>

                </div>
                <div>

                </div>
                <div>

                </div>
                


            </form>
        </div>
    </div>

</div>


</body>
</html>