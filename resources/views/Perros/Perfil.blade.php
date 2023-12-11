<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=meta charset=" UTF-8>
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

<body class="bg-[#ffffff]"> <!-- Cuerpo de la página con clases de Tailwind CSS para diseño flexible -->


    <nav
        class="bg-[#E3EEFF] h-20 w-full text-white flex flex-col md:flex-row md:justify-between md:px-7 md:py-4 text-xl">
        <div class="flex justify-between top-0 w-full">
            <div class="flex justify-between items-center ml-1">
                <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
                <img class="w-[60px] h-[60px]" src="Recursos/Logo.png" alt="">
            </div>
            <div class="flex items-center md:space-x-5 space-x-0">

                <div class="flex flex-col items-center">
                    <button class="w-[50px] h-[50px] md:block hidden"><img src="Recursos/Vacunaciones.png" alt=""></button>
                    <h1 class="font-[Vibur] text p-3 md:p-0  text-black text-sm md:text-lg">Vacunaciones</h1>
                </div>

                <div class="flex flex-col items-center">
                    <button class="w-[50px] h-[50px] md:block hidden"><img src="Recursos/Datos_Clinicos.png" alt=""></button>
                    <h1 class="font-[Vibur] text p-3 md:p-0  text-black text-sm md:text-lg">Datos Clínicos</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">

            <div class=" flex justify-center md:gap-4 ">

            </div>


    </nav>

    <nav class="bg-[#946e36] w-full text-white md:flex-row md:justify-between md:px-7 md:py-4 text-xl h-16 ">
        <div class="flex items-center justify-center">
            <h1 style="font-family: 'Vibur', cursive;" class="">Perfil del Gato</h1>

        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">

            <div class=" flex justify-center md:gap-4 ">

            </div>

    </nav>

    <div class="md:container md:mx-auto md:w-1/2 md:max-w-screen-md py-10 px-50 ">

        <div class=" p-8 rounded shadow-md w-full bg-[#dcd4c3] border-2 border-[#d4c4ad]">

            <div class="flex flex-row">
                <div class="flex flex-col">

                    <div>
                        <img src="Recursos/Foto_Perro.jpg" alt="" class="w-full px-1 py-1 h-48">
                    </div>

                </div>
                <form action="" method="post" class=" flex flex-col px-16">

                    <div class="mb-4">
                        <label for="usuario" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Nombre</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="usuario" name="usuario"
                            class="w-full px-4 py-0 focus:outline-none focus:ring bg-[#E0AF65]" placeholder=""
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="raza" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Raza</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="text" id="raza" name="raza"
                            class="w-full px-4 py-0 focus:outline-none focus:ring bg-[#E0AF65]" placeholder=""
                            required>

                    </div>

                    <h4 class="block text-sm text-[#7C1B04]" style="font-family: 'Wendy One', sans-serif">Sexo</h4>


                    <div class="flex flex-row space-x-4">

                        <!-- Checkbox para indicar "Sí" -->
                        <div class="flex flex-row mb-4">
                            <input type="checkbox" id="hembra" name="hembra"
                                class="w-6 px-1 py-1 border focus:outline-none focus:ring bg-[#FDECDD]" placeholder=""
                                required>
                            <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                style="font-family: 'Wendy One', sans-serif">Hembra</label>
                        </div>

                        <div class="flex flex-row mb-4">
                            <input type="checkbox" id="macho" name="macho"
                                class="w-6 px-1 py-1 border-[#FDECDD] focus:outline-none focus:ring bg-[#FDECDD]"
                                placeholder="" required>
                            <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                style="font-family: 'Wendy One', sans-serif">Macho</label>

                        </div>

                        <!-- Checkbox para indicar "No" -->

                    </div>


                    <div class="mb-4">
                        <label for="nacimiento" class="block text-sm text-[#7C1B04]"
                            style="font-family: 'Wendy One', sans-serif">Fecha de nacimiento</label>
                        <!-- Etiqueta y campo de entrada para el correo -->
                        <input type="date" id="nacimiento" name="nacimiento"
                            class="w-full px-12 py-0 focus:ring bg-[#E0AF65]" placeholder="" required>
                    </div>


                    <h4 class="block text-sm text-[#7C1B04]" style="font-family: 'Wendy One', sans-serif">Discapacidad
                    </h4>


                    <div class="flex flex-row space-x-4">

                        <!-- Checkbox para indicar "Sí" -->
                        <div class="flex flex-row">
                            <input type="checkbox" id="checkSi" name="checkSi"
                                class="w-6 px-1 py-1 focus:outline-none focus:ring bg-[#FDECDD]" placeholder=""
                                required>
                            <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                style="font-family: 'Wendy One', sans-serif">Si</label>
                        </div>

                        <div class="flex flex-row">
                            <input type="checkbox" id="checkNo" name="checkNo"
                                class="w-6 px-1 py-1 focus:outline-none focus:ring bg-[#FDECDD]" placeholder=""
                                required>
                            <label for="checkbox" class="checkbox text-sm text-[#7C1B04] py-2 px-1"
                                style="font-family: 'Wendy One', sans-serif">No</label>

                        </div>

                    </div>
                    <div class="flex items-center justify-center">

                        <img src="Recursos/Boton_Hueso.png" alt="" class=" w-40 h-40 relative">

                        <button class="md:block hidden absolute text-[#7C1B04]"
                            style="font-family: 'Luckiest Guy', cursive;">
                            Editar
                        </button>
                    </div>
                </form>



            </div>

        </div>


        <script>
            const checkSi = document.getElementById('checkSi');
            const checkNo = document.getElementById('checkNo');

            checkSi.addEventListener('change', function () {
                if (checkSi.checked) {
                    checkNo.disabled = true;
                } else {
                    checkNo.disabled = false;
                }
            });

            checkNo.addEventListener('change', function () {
                if (checkNo.checked) {
                    checkSi.disabled = true;
                } else {
                    checkSi.disabled = false;
                }
            });






        </script>
        <script>
            const checkhembra = document.getElementById('hembra');
            const checkmacho = document.getElementById('macho');

            checkhembra.addEventListener('change', function () {
                if (checkhembra.checked) {
                    checkmacho.disabled = true;
                } else {
                    checkmacho.disabled = false;
                }
            });

            checkmacho.addEventListener('change', function () {
                if (checkmacho.checked) {
                    checkhembra.disabled = true;
                } else {
                    checkhembra.disabled = false;
                }
            });
        </script>





</body>

</html>