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
    <title>Registro</title>
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
            <form action="" method="post" class="w-2/5 h-full max-md:w-3/5 ">
               <div class="flex flex-col justify-center items-center mt-10  w-full max-md:mt-8">
               <div class="flex flex-col w-2/3 mb-4">
                    <label for="nombre"  style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Nombres</label>
                    <input type="text" name="nombre" id="nombre"  style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] px-4 h-8 text-md" oninput="validarNumero()">
                    <p id="mensaje" class="text-red-500 text-sm mt-2"></p>
                </div>
                <div class="flex flex-col w-2/3 mb-4">
                    <label for="apellido" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Apellidos</label>
                    <input type="text" name="apellido" id="apellido" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] px-4 h-8 text-md" oninput="validarNumero2()">
                    <p id="mensaje2" class="text-red-500 text-sm mt-2"></p>
                </div>
                <div class="flex flex-col w-2/3 mb-4">
                    <label for="email" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Correo Electrónico</label>
                    <input type="email" name="email" id="email" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] px-4 h-8 text-md" oninput="validarEmail()">
    <p id="mensajeEmail" class="text-red-500 text-sm mt-2"></p>
                </div>
                <div class="flex flex-col w-2/3 mb-4 relative">
                    <label for="contra" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Contraseña</label>
                    <input type="password" name="contra" id="contra" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] pl-4 pr-7 h-8 text-md">
                    <div>
                    <img src="Recursos/Huella_Contra.webp" alt="" class="w-8 h-8 absolute top-7 right-0">
                    </div>
                    <ul id="requirementsList" class="mt-2 list-disc text-red-500 hidden">
                        <li id="lengthReq">Debe ser mayor de 8 caracteres</li>
                        <li id="upperReq">Debe contener al menos una mayúscula</li>
                        <li id="lowerReq">Debe contener al menos una minúscula</li>
                        <li id="specialCharReq">Debe contener al menos un carácter especial</li>
                    </ul>

                    <p id="successMsg" class="text-green-500 mt-2 hidden ">¡Contraseña válida!</p>
                </div>
                <div class="flex flex-col w-2/3 mb-4 relative">
                    <label for="confContra" style="font-family: 'Wendy One', sans-serif" class="text-white text-lg">Confirma contraseña </label>
                    <input type="password" name="confContra" id="confContra" style="font-family: 'Wendy One', sans-serif" class="rounded-full bg-[#b1796c] pl-4 pr-7 h-8 text-md ">
                    <div>
                    <img src="Recursos/Huella_Contra.webp" alt="" class="w-8 h-8 absolute top-7 right-0">
                    </div>
                    <p id="matchMessage" class="text-green-500 mt-2 hidden">Las contraseñas coinciden.</p>
                    <p id="mismatchMessage" class="text-red-500 mt-2 hidden">Las contraseñas no coinciden.</p>
                </div>

                <div class="flex flex-col justify-center items-center w-28 h-28 mb-4 relative hover:bg-[#b1796c] rounded-full">
                <img src="Recursos/Boton_Huella.png" alt="" class="w-28 h-28">
                    <div class="w-full flex flex-col justify-center items-center">
                        <button type="button" onclick="validarFormulario()" style="font-family: 'Luckiest Guy'" class="text-white absolute bottom-5 w-28">ENTRAR</button>
                    </div>
                </div>
               </div>


                </form>
            <div class="w-2/5 h-full flex flex-col items-center justify-start max-md:justify-center ">
                <img src="Recursos/Foto_Registro2.png" alt="" class="w-2/3 h-2/3 mt-10  max-md:w-4/5 max-md:h-2/5">
            </div>
        </div>
    </div>

</div>
<!-- Modal -->
<div id="myModal" class="modal fixed inset-0 h-full w-full bg-black bg-opacity-50 hidden">
    <div class="modal-content mx-auto my-10 p-6 bg-white rounded-lg shadow-lg">
        <span class="close absolute top-0 right-0 p-4 cursor-pointer" onclick="cerrarModal()">&times;</span>
        <p id="modalMessage" class="text-lg mb-4"></p>
        <button onclick="enviarFormulario()" class="bg-blue-500 text-white py-2 px-4 rounded">Aceptar</button>
    </div>
</div>

<script>
    function validarNumero() {
      // Obtén el valor del campo de entrada
      var valorNombre = document.getElementById('nombre').value;

      // Verifica si el valor contiene un número
      if (/\d/.test(valorNombre)) {
        // Si contiene un número, muestra el mensaje de error
        document.getElementById('mensaje').textContent = 'El nombre no debe contener números.';
      } else {
        // Si no contiene un número, borra el mensaje de error
        document.getElementById('mensaje').textContent = '';
      }
    }
  </script>

<script>
    function validarNumero2() {
      // Obtén el valor del campo de entrada
      var valorApellido = document.getElementById('apellido').value;

      // Verifica si el valor contiene un número
      if (/\d/.test(valorApellido)) {
        // Si contiene un número, muestra el mensaje de error
        document.getElementById('mensaje2').textContent = 'Los apellidos no deben contener números.';
      } else {
        // Si no contiene un número, borra el mensaje de error
        document.getElementById('mensaje2').textContent = '';
      }
    }
  </script>

<script>
    function validarEmail() {
      // Obtén el valor del campo de correo electrónico
      var valorEmail = document.getElementById('email').value;

      // Verifica si el valor contiene el formato básico de un correo electrónico
      if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valorEmail)) {
        // Si es válido, borra el mensaje de error
        document.getElementById('mensajeEmail').textContent = '';
      } else {
        // Si no es válido, muestra el mensaje de error
        document.getElementById('mensajeEmail').textContent = 'Ingrese un correo electrónico válido.';
      }
    }
  </script>
   <script>

// validacion contraseña
var passwordInput = document.getElementById('contra');
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
        var passwordInput = document.getElementById('contra');
        var confirmPasswordInput = document.getElementById('confContra');
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

<!-- ... (código existente) ... -->


<!-- ... (código existente) ... -->

<script>
    function abrirModal(mensaje) {
        // Muestra el modal con el mensaje proporcionado
        document.getElementById('modalMessage').textContent = mensaje;
        document.getElementById('myModal').style.display = 'block';
    }

    function cerrarModal() {
        // Cierra el modal
        document.getElementById('myModal').style.display = 'none';

        // Envía el formulario si todas las validaciones han sido exitosas
        if (document.getElementById('myModal').style.display === 'none') {
            document.querySelector('form').submit();
        }
    }

    function enviarFormulario() {
        // Lógica adicional antes de enviar el formulario si es necesario
        document.querySelector('form').submit();
    }

    function validarFormulario() {
        // Obtén los valores de todos los campos.
        var valorNombre = document.getElementById('nombre').value;
        var valorApellido = document.getElementById('apellido').value;
        var valorEmail = document.getElementById('email').value;
        var valorPassword = document.getElementById('contra').value;
        var valorConfirmPassword = document.getElementById('confContra').value;

        // Verifica si todos los campos están llenos.
        if (valorNombre.trim() === '' || valorApellido.trim() === '' || valorEmail.trim() === '' || valorPassword.trim() === '' || valorConfirmPassword.trim() === '') {
            abrirModal('Por favor, complete todos los campos.');
            return;
        }

        // Realiza las validaciones específicas.
        validarNumero();
        validarNumero2();
        validarEmail();
        updatePasswordMatch();

        // Verifica si hay algún mensaje de error en las validaciones.
        var mensajesError = document.querySelectorAll('.text-red-500');
        for (var i = 0; i < mensajesError.length; i++) {
            if (mensajesError[i].textContent !== '') {
                abrirModal('Corrija los errores antes de continuar.');
                return;
            }
        }

        // Si todas las validaciones pasan, el formulario es válido.
        abrirModal('Formulario válido. ¿Deseas enviar los datos?');
    }
</script>


<!-- ... (código existente) ... -->

</body>
</html>