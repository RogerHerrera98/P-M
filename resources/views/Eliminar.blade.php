<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet"> 
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="CSS/style.css"> 
    <title>TecNM Campus Motul</title>
    <title>Document</title>
</head>
<body class="bg-[#DCD4BF]"> 
    <div id="myModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="modal-content bg-white p-8 rounded shadow-md">
            <span class="close absolute top-4 right-4 cursor-pointer" onclick="cerrarModal()">&times;</span>
            <p class="text-center">Tu amigo se ha Eliminado con éxito</p>
            <button onclick="cerrarModal()" class="mt-3 px-4 py-2 bg-[#B1796C] text-white rounded-full focus:outline-none focus:ring focus:border-blue-300">Cerrar</button>
    </div>
        </div>
    </div>

    <nav class="bg-[#35312E] italic font-serif w-full text-white flex flex-col md:flex-row md:justify-between md:px-7 md:py-2 text-xl">
        <div class="flex justify-center md:gap-4">
        
            <h1 class="font-sans-serif">P&M</h1>
        </div>
        <div class="flex flex-col md:flex-row text-center md:gap-5">
            <ul class="py-1 hover:underline">
                <li><a href="index.html" class="font-sans-serif">Registro</a></li>
            </ul>
        </div>
    </nav>
        
           <div class=" flex justify-center md:gap-4 ">
               
            </div>
           
        </nav>
    </div>


        <div class="md:container md:mx-auto md:w-1/2 md:max-w-screen-md py-20 p-10">
       
           
          <div class=" p-10 rounded shadow-md w-full bg-[#FDFCF8]">
            <div class="flex relative">
            <img src="Recursos/Gato.png" alt="logotipo" class="flex flex-none  w-14 h-14"/>
            <img src="Recursos/Gato.png" alt="logotipo" class="flex flex-none w-14 h-14 absolute bottom-0 left-[90%]"/>
        </div>
         <!--Nombres de amigos-->
                <h2 class="text-center text-2xl italic font-sans-serif mb-6 font-semibold ">ELIMINAR AMIGO</h2> 
                
                <form method="post" action="{{ route('eliminar-mascota') }}">
                @csrf
                 @method('delete')
               

                <div class="mb-4">
                <label for="nombre" class="block text-sm italic font-sans-serif  text-gray-600">Nombre</label> 
                <input type="text" id="nombre" name="nombre" class="w-3/4 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" 
                placeholder="Inserta el nombre del amigo que deseas eliminar" required>
                <span id="errorNombre" class="text-red-500 text-sm"></span>
                </div>
         
                        <button id="actualizar" onclick="validarCampos()"  type="submit" class="font-sans-serif text-white px-20 py-2 mx-auto rounded-full focus:outline-none focus:ring focus:border-blue-300 bg-[#B1796C] font-bold">Eliminar</button>
                   
                    
                 
                   
                </form>
                <div class="flex justify-between mb-5">
                <button id="regresar" onclick="redirigirAPhp()" type="" class="font-sans-serif text-white px-10 py-2 mx-auto rounded-full absolute left-[60%]  focus:outline-none focus:ring focus:border-blue-300 bg-[#35312E] font-bold">Regresar</button>
                </div>
            </div>
        </div>  
       
</body>

</html>

<script>

    function validarCampos() {
        var nombre = document.getElementById('nombre').value;
     
       
        if (nombre) {
            mostrarModal(); 
        } else {
            alert('Por favor, completa todos los campos antes de registrar.'); 
        }
    }
    function resetearFormulario() {
        document.getElementById('nombre').value = '';
    }

    function mostrarModal() {
        document.getElementById('myModal').classList.remove('hidden');
    }

    function cerrarModal() {
        document.getElementById('myModal').classList.add('hidden');
        resetearFormulario();
    }
</script>

<script>
    function redirigirAPhp() {
        window.location.href = '/';
}
</script>