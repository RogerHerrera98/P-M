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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Vibur&display=swap" rel="stylesheet">
    <!-- Enlace a la fuente Nunito desde Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- Inclusión del script de Tailwind CSS desde CDN -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Registro</title>
</head>

<body>
    <div class="flex flex-col justify-center items-center">
        <nav class="bg-[#e3eeff] w-full ">
            <div class="flex flex-row items-center">
                <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl ">P&M</h1>
                <img src="Recursos/Logo2.png" alt="" class="w-12 h-12 ">
            </div>
        </nav>
        <div class="w-full h-20 bg-[#c19489] flex justify-center items-center">
            <h1 style="font-family: 'Vibur', cursive;" class="text-[#FDFCF8] text-4xl">Registro</h1>
        </div>

        <div class="w-4/5 h-screen flex flex-row justify-center bg-[#ebddda] my-1 ">



        <form method="post" action="{{ route('registrar-usuario') }}">
    @csrf

                <div class="w-4/5 ">
                    <label for="Nombre" class="block text-sm text-[#7C1B04]"
                        style="font-family: 'Wendy One', sans-serif">Nombres</label>
                    <!-- Etiqueta y campo de entrada para el nombre -->
                    <input type="text" id="Nombre" name="Nombre"
                        class="w-full px-4 py-2 focus:outline-none focus:border-[#80220c] focus:ring focus:ring-[#80220c] bg-[#b1796c] "
                        placeholder="" required>
                    <p id="errorMsg" class="text-red-700 mt-2 hidden">Error: Solo se permite ingresar texto. Inténtalo
                        de nuevo.</p>
                </div>

                <div class="w-4/5">
                    <label for="Apellido" class="block text-sm text-[#7C1B04]"
                        style="font-family: 'Wendy One', sans-serif">Apellidos</label>
                    <!-- Etiqueta y campo de entrada para el apellido -->
                    <input type="text" id="Apellido" name="Apellido"
                        class=" w-full px-4 py-2  focus:outline-none focus:border-[#80220c] focus:ring focus:ring-[#80220c] bg-[#b1796c]"
                        placeholder="" required>
                    <p id="errorMsg2" class="text-red-700 mt-2 hidden">Error: Solo se permite ingresar texto. Inténtalo
                        de nuevo.</p>
                </div>

                <div class="w-4/5">
                    <label for="email" class="block text-sm text-[#7C1B04]"
                        style="font-family: 'Wendy One', sans-serif">Correo Electrónico</label>
                    <!-- Etiqueta y campo de entrada para el correo -->
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 focus:outline-none focus:border-[#80220c] focus:ring focus:ring-[#80220c] bg-[#b1796c]
                        
                        " placeholder="" required>
                </div>

                <div class="w-4/5">
                    <label for="pass" class="block text-sm text-[#7C1B04]"
                        style="font-family: 'Wendy One', sans-serif">Contraseña</label>
                    <!-- Etiqueta y campo de entrada para la contraseña -->
                    <input type="password" id="pass" name="pass" class="w-full px-4 py-2
                        focus:outline-none focus:border-[#80220c] focus:ring focus:ring-[#80220c] bg-[#b1796c]
                        " placeholder="" required>

                    <ul id="requirementsList" class="mt-2 list-disc text-red-500 hidden">
                        <li id="lengthReq">Debe ser mayor de 8 caracteres</li>
                        <li id="upperReq">Debe contener al menos una mayúscula</li>
                        <li id="lowerReq">Debe contener al menos una minúscula</li>
                        <li id="specialCharReq">Debe contener al menos un carácter especial</li>
                    </ul>

                    <p id="successMsg" class="text-green-500 mt-2 hidden">¡Contraseña válida!</p>
                </div>

                <div class="w-4/5">
                    <label for="confirpass" class="block text-sm text-[#7C1B04]"
                        style="font-family: 'Wendy One', sans-serif">Confirma Contraseña</label>
                    <!-- Etiqueta y campo de entrada para la confirmacion  -->
                    <input type="password" id="confirpass" name="confirpass"
                        class="w-full px-4 py-2 focus:outline-none focus:border-[#80220c] focus:ring focus:ring-[#80220c] bg-[#b1796c]"
                        placeholder="" required>

                    <p id="matchMessage" class="text-green-500 mt-2 hidden">Las contraseñas coinciden.</p>
                    <p id="mismatchMessage" class="text-red-500 mt-2 hidden">Las contraseñas no coinciden.</p>
                </div>
                <div
                    class="flex  content-center justify-center items-end my-6 hover:bg-[#b1796c] active:bg-[#b1797c] focus:outline-none focus:ring focus:ring-black rounded-full">
                    <img src="Recursos/Boton_Huella.png" alt="Boton Huella" class="w-32 h-32 relative">
                    <button type="submit" class=" absolute w-32 h-16 text-white text-xl"
                        style="font-family: 'Luckiest Guy', cursive;">ENTRAR</button>
                </div>

            </form>

            <div class=" w-2/5 h-full m-6 max-md:py-10">
                <img src="Recursos/Foto_Registro.webp" alt="" class="object-center h-96 max-md:h-60">
            </div>
        </div>


    </div>
    </body>
    </html>
    
    <script>
        // Validacion nombre
        var inputElement = document.getElementById('Nombre');
        var errorMsg = document.getElementById('errorMsg');

        inputElement.addEventListener('input', function () {
            var inputText = inputElement.value;

            if (/^[a-zA-Z]+$/.test(inputText)) {
                // Texto válido, puedes hacer lo que quieras con él aquí
                console.log("Texto ingresado:", inputText);
                errorMsg.classList.add('hidden');
            } else {
                // Muestra el mensaje de error
                errorMsg.classList.remove('hidden');
            }
        });

    </script>

    <script>
        // Validacion apellidos
        var inputElementApellido = document.getElementById('Apellido');
        var errorMsg2 = document.getElementById('errorMsg2');

        inputElementApellido.addEventListener('input', function () {
            var inputTextApellido = inputElementApellido.value;

            if (/^[a-zA-Z]+$/.test(inputTextApellido)) {
                // Texto válido, puedes hacer lo que quieras con él aquí
                console.log("Texto ingresado:", inputTextApellido);
                errorMsg2.classList.add('hidden');
            } else {
                // Muestra el mensaje de error
                errorMsg2.classList.remove('hidden');
            }
        });
    </script>
    <script>



        // validacion contraseña
        var passwordInput = document.getElementById('pass');
        var requirementsList = document.getElementById('requirementsList');
        var lengthReq = document.getElementById('lengthReq');
        var upperReq = document.getElementById('upperReq');
        var lowerReq = document.getElementById('lowerReq');
        var specialCharReq = document.getElementById('specialCharReq');
        var successMsg = document.getElementById('successMsg');

        function updateListVisibility() {
            var isLengthValid = lengthReq.classList.contains('text-green-500');
            var hasUpperCase = upperReq.classList.contains('text-green-500');
            var hasLowerCase = lowerReq.classList.contains('text-green-500');
            var hasSpecialChar = specialCharReq.classList.contains('text-green-500');

            var allRequirementsMet = isLengthValid && hasUpperCase && hasLowerCase && hasSpecialChar;

            requirementsList.classList.toggle('hidden', allRequirementsMet);
            successMsg.classList.toggle('hidden', !allRequirementsMet);
        }

        passwordInput.addEventListener('focus', function () {
            requirementsList.classList.remove('hidden');
        });

        passwordInput.addEventListener('blur', function () {
            updateListVisibility();
        });

        passwordInput.addEventListener('input', function () {
            var password = passwordInput.value;

            // Verificar cada requisito
            var isLengthValid = password.length >= 8;
            var hasUpperCase = /[A-Z]/.test(password);
            var hasLowerCase = /[a-z]/.test(password);
            var hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(password);

            // Actualizar clases y mensajes
            lengthReq.classList.toggle('text-green-500', isLengthValid);
            upperReq.classList.toggle('text-green-500', hasUpperCase);
            lowerReq.classList.toggle('text-green-500', hasLowerCase);
            specialCharReq.classList.toggle('text-green-500', hasSpecialChar);

            updateListVisibility();
        });


    </script>
    <script>
        var passwordInput = document.getElementById('pass');
        var confirmPasswordInput = document.getElementById('confirpass');
        var matchMessage = document.getElementById('matchMessage');
        var mismatchMessage = document.getElementById('mismatchMessage');

        
        function updatePasswordMatch() {
            var password = passwordInput.value;
            var confirmPassword = confirmPasswordInput.value;

            var passwordsMatch = password === confirmPassword;

            matchMessage.classList.toggle('hidden', !passwordsMatch);
            mismatchMessage.classList.toggle('hidden', passwordsMatch);
        }

        confirmPasswordInput.addEventListener('focus', function() {
            // Mostrar los mensajes solo cuando el foco está en el input de confirmar contraseña
            matchMessage.classList.remove('hidden');
            mismatchMessage.classList.remove('hidden');
            updatePasswordMatch();
        });

        passwordInput.addEventListener('input', function() {
            updatePasswordMatch();
        });

        confirmPasswordInput.addEventListener('input', function() {
            updatePasswordMatch();
        });
    </script>






