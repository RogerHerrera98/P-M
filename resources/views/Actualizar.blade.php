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
            <p class="text-center">Tu amigo se ha actualizado con éxito</p>
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
                <h2 class="text-center text-2xl italic font-sans-serif mb-6 font-semibold ">ACTUALIZAR </h2> 
                

                <form action="{{ route('actualizar-mascota-por-nombre') }}" method="POST">
                 @csrf
                @method('PUT')
                
                <div class="mb-4  justify-center">
<div class="flex items-center justify-center" id="lol">
    <input type="file" id="imagenInput" name="foto" class="hidden" accept="image/*">
    <div class="bg-[#B1796C] w-64 h-64 relative rounded-full overflow-hidden">
        <div id="imagenPreview" class="w-full h-full bg-cover bg-center"></div>

        <button type="button" onclick="document.getElementById('imagenInput').click()" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-20 text-white hover:bg-opacity-50 transition">
            Seleccionar Imagen
        </button>
    </div>
</div>

    <div class=" mr-2 mt-4">
        <label for="nombre" class="block text-sm italic font-sans-serif text-gray-600">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Inserta el nombre de tu mascota" required>
        <span id="errorNombre" class="text-red-500 text-sm"></span>
    </div>
</div>

        <!-- Típo de amigos-->
                <div class="mb-4">
                <label for="text" class="block text-sm italic font-sans-serif text-gray-600 ">Tipo de Amigo</label>
                <select class="w-1/2  px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" id="tipo" name="tipo">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                </select>
                </div>
                
<div class="flex items-center">
    <!-- Menú desplegable de razas a la izquierda -->
    <div class="w-1/2 pr-2 ">
        <label for="raza" class="block text-sm italic font-sans-serif text-gray-600">Raza</label>
        <select class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" id="raza" name="raza" required>
            <option value="Bulldog">Bulldog</option>
            <option value="Afgano">Afgano</option>
            <option value="Basenji">Basenji</option>
            <option value="Beagle">Beagle</option>
            <option value="Bóxer">Bóxer</option>
            <option value="Boston Terrier">Boston Terrier</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Otro">Otro</option>
        </select>
        
    </div>
            <div>
                <button onclick="mostrarFormulario1()" class="bg-blue-500 text-white p- rounded-md">Buscar</button>
                
            </div>
            
</div>


                    <!-- Inicio de la herramienta Radio button para Genero -->
                   <div class="mb-4">
                       <fieldset class="block text-sm font-medium text-gray-600 mb-4 " id="genero" name="genero">
                           <legend>
                           <span class="field-legend italic font-serif mr-2 ">Genero</span>
                           </legend>
                           <div class="field-radioButton italic font-serif mb-2">
                           <input type="radio" name="genero" id="option"
                           value="macho" checked>
                           <label for="macho ">Macho</label>
                           </div>
                           <div class="field-radioButton italic font-serif ">
                           <input type="radio" name="genero" id="option"
                           value="hembra">
                           <label for="hembra ">Hembra</label>
                           </div>
                           </fieldset>
                   </div>

    

    
                    <!-- colores-->
                   <div class="mb-4">
                        <label for="color" class="block text-sm italic font-sans-serif  text-gray-600">Color de amigo</label> 
                        <input type="text" id="color" name="color" class="w-3/4 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" 
                         placeholder="Inserta el color de tu mascota" required>
                    </div>

                    <!-- Amigo esterilizado?-->
                <div class="mb-4">
                    <label for="text" class="block text-sm italic font-sans-serif text-gray-600 ">Tu mascota está esterilizada?</label>
                     <select class="w-3/4  px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" id="esterilizada" name="esterilizada">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>

                

                <div class="mb-4">
                        <label for="text" class="block text-sm italic font-sans-serif text-gray-600 ">Señas particulares de tu mascota (Opcional)</label>
                        <!-- para las señales de amigo -->
                        <textarea type="text" id="señales" name="señales"class="w-3/4 px-2 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Inserta las señas particulares de tu mascota (Opcional)">
                        </textarea>
                    </div>



                    <!-- Nacimiento-->
                    <div class="mb-4">
                        <p class="block text-sm italic font-sans-serif text-gray-600">Fecha de Nacimiento de Amigo </p>
                        <input type="date" id="fecha" name="fecha" class="w-3/4  px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
                    </div>
                        <div class="flex justify-between items-center mb-4">
                            <button id="actulizar" onclick="validarCampos()"  type="submit" class="font-sans-serif text-white px-8 py-2 mx-auto rounded-full focus:outline-none focus:ring focus:border-blue-300 bg-[#B1796C] font-bold">Actualizar</button>
                            <div class="flex relative">
                            <img src="Recursos/Huella.png" alt="logotipo" class="flex flex-none  w-14 h-14"/>
                    </div>
                    
                        </div>

                        
                        <div id="overlay" class="fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50 z-50 hidden" onclick="cerrarFormulario1()"></div>
                </form>
                

<div class="flex items-center justify-center ">   
<form id="myForm1" class="bg-orange-700 hidden absolute mx-auto my-auto top--max transform -translate-y-3/4 backdrop-blur-lg h-max pb-4 px-4 rounded-md z-60" style="z-index: 70;">
        <button type="button" onclick="cerrarFormulario1()" class="bg-red-500 mx-2 my-2 p-1 px-6 text-white rounded-md">X</button>
        <input type="text" id="searchRaza" class="w-full ml-2 my-4 border rounded-md focus:outline-none focus:ring focus:border-blue-300" oninput="filterRazas()" placeholder="Escribe para buscar una raza">
    
        <!-- Lista de razas debajo de ambos elementos -->
        <div class="bg-white rounded-md shadow-md p-3 mx-2">
            <h5 class="mb-3">Razas Disponibles</h5>
            <ul id="razasList" class="razas-list max-h-40 overflow-y-auto"></ul>
        </div>
    </form>

        </div>
        
                        
                    </div>
        </div>  
      
</form>

</body>
</html> 

<script >

const Perro = ["Affen+A1:A24pinscher",
"Airedale terrier",
"Akita",
"Akita americano",
"Alaskan Husky",
"Alaskan malamute",
"American Foxhound",
"American pit bull terrier",
"American staffordshire terrier",
"Ariegeois",
"Artois",
"Australian silky terrier",
"Australian Terrier",
"Austrian Black & Tan Hound",
"Azawakh",
"Balkan Hound",
"Basenji",
"Basset Alpino (Alpine Dachsbracke)",
"Basset Artesiano Normando",
"Basset Azul de Gascuña (Basset Bleu de Gascogne)",
"Basset de Artois",
"Basset de Westphalie",
"Basset Hound",
"Basset Leonado de Bretaña (Basset fauve de Bretagne)",
"Bavarian Mountain Scenthound",
"Beagle",
"Beagle Harrier",
"Beauceron",
"Bedlington Terrier",
"Bichon Boloñes",
"Bichón Frisé",
"Bichón Habanero",
"Billy",
"Black and Tan Coonhound",
"Bloodhound (Sabueso de San Huberto)",
"Bobtail",
"Boerboel",
"Border Collie",
"Border terrier",
"Borzoi",
"Bosnian Hound",
"Boston terrier",
"Bouvier des Flandres",
"Boxer",
"Boyero de Appenzell",
"Boyero de Australia",
"Boyero de Entlebuch",
"Boyero de las Ardenas",
"Boyero de Montaña Bernes",
"Braco Alemán de pelo corto",
"Braco Alemán de pelo duro",
"Braco de Ariege",
"Braco de Auvernia",
"Braco de Bourbonnais",
"Braco de Saint Germain",
"Braco Dupuy",
"Braco Francés",
"Braco Italiano",
"Broholmer",
"Buhund Noruego",
"Bull terrier",
"Bulldog americano",
"Bulldog inglés",
"Bulldog francés",
"Bullmastiff",
"Ca de Bestiar",
"Cairn terrier",
"Cane Corso",
"Cane da Pastore Maremmano-Abruzzese",
"Caniche (Poodle)",
"Caniche Toy (Toy Poodle)",
"Cao da Serra de Aires",
"Cao da Serra de Estrela",
"Cao de Castro Laboreiro",
"Cao de Fila de Sao Miguel",
"Cavalier King Charles Spaniel",
"Cesky Fousek",
"Cesky Terrier",
"Chesapeake Bay Retriever",
"Chihuahua",
"Chin",
"Chow Chow",
"Cirneco del Etna",
"Clumber Spaniel",
"Cocker Spaniel Americano",
"Cocker Spaniel Inglés",
"Collie Barbudo",
"Collie de Pelo Cort",
"Collie de Pelo Largo",
"Cotón de Tuléar",
"Curly Coated Retriever",
"Dálmata",
"Dandie dinmont terrier",
"Deerhound",
"Dobermann",
"Dogo Argentino",
"Dogo de Burdeos",
"Dogo del Tibet",
"Drentse Partridge Dog",
"Drever",
"Dunker",
"Elkhound Noruego",
"Elkhound Sueco",
"English Foxhound",
"English Springer Spaniel",
"English Toy Terrier",
"Epagneul Picard",
"Eurasier",
"Fila Brasileiro",
"Finnish Lapphound",
"Flat Coated Retriever",
"Fox terrier de pelo de alambre",
"Fox terrier de pelo liso",
"Foxhound Inglés",
"Frisian Pointer",
"Galgo Español",
"Galgo húngaro (Magyar Agar)",
"Galgo Italiano",
"Galgo Polaco (Chart Polski)",
"Glen of Imaal Terrier",
"Golden Retriever",
"Gordon Setter",
"Gos d'Atura Catalá",
"Gran Basset Griffon Vendeano",
"Gran Boyero Suizo",
"Gran Danés (Dogo Aleman)",
"Gran Gascón Saintongeois",
"Gran Griffon Vendeano",
"Gran Munsterlander",
"Gran Perro Japonés",
"Grand Anglo Francais Tricoleur",
"Grand Bleu de Gascogne",
"Greyhound",
"Griffon Bleu de Gascogne",
"Griffon de pelo duro (Grifón Korthals)",
"Griffon leonado de Bretaña",
"Griffon Nivernais",
"Grifon Belga",
"Grifón de Bruselas",
"Haldenstoever",
"Harrier",
"Hokkaido",
"Hovawart",
"Husky Siberiano (Siberian Husky)",
"Ioujnorousskaia Ovtcharka",
"Irish Glen of Imaal terrier",
"Irish soft coated wheaten terrier",
"Irish terrier",
"Irish Water Spaniel",
"Irish Wolfhound",
"Jack Russell terrier",
"Jindo Coreano",
"Kai",
"Keeshond",
"Kelpie australiano (Australian kelpie)",
"Kerry blue terrier",
"King Charles Spaniel",
"Kishu",
"Komondor",
"Kooiker",
"Kromfohrländer",
"Kuvasz",
"Labrador Retriever",
"Lagotto Romagnolo",
"Laika de Siberia Occidental",
"Laika de Siberia Oriental",
"Laika Ruso Europeo",
"Lakeland terrier",
"Landseer",
"Lapphund Sueco",
"Lebrel Afgano",
"Lebrel Arabe (Sloughi)",
"Leonberger",
"Lhasa Apso",
"Lowchen (Pequeño Perro León)",
"Lundehund Noruego",
"Malamute de Alaska",
"Maltés",
"Manchester terrier",
"Mastiff",
"Mastín de los Pirineos",
"Mastín Español",
"Mastín Napolitano",
"Mudi",
"Norfolk terrier",
"Norwich terrier",
"Nova Scotia duck tolling retriever",
"Ovejero alemán",
"Otterhound",
"Rafeiro do Alentejo",
"Ratonero Bodeguero Andaluz",
"Retriever de Nueva Escocia",
"Rhodesian Ridgeback",
"Ridgeback de Tailandia",
"Rottweiler",
"Saarloos",
"Sabueso de Hamilton",
"Sabueso de Hannover",
"Sabueso de Hygen",
"Sabueso de Istria",
"Sabueso de Posavaz",
"Sabueso de Schiller (Schillerstovare)",
"Sabueso de Smaland (Smalandsstovare)",
"Sabueso de Transilvania",
"Sabueso del Tirol",
"Sabueso Español",
"Sabueso Estirio de pelo"]
const Gato = ["Abisinio",
"American Bobtail",
"American Curl",
"American Shorthair",
"American Wirehair",
"Angora Turco",
"Aphrodite Gigante",
"Australian Mist",
"Balines",
"Bengalí",
"Birmano",
"Bobtail Japonés",
"Bombay",
"British Shorthair",
"Burmés",
"Burmilla",
"California Spangled",
"Cartujo",
"Ceylon",
"Chausie",
"Colorpoint de Corto",
"Colorpoint de Pelo Largo",
"Cornish Rex",
"Cymric",
"Devon Rex",
"Dragon Li",
"Europeo de Pelo Corto",
"Exótico de Pelo Corto",
"Gato del Bosque Noruego",
"Gato del Desierto",
"Gato del Himalaya",
"Gato doméstico",
"Gato Montés Europeo",
"Gato Montés Africano",
"Gato Montés Asiático",
"Gato Montés de la Bahía de Bengal",
"Gato Montés de Pallas",
"Gato Montés de Temminck",
"Gato Montés Español",
"Gato Montés Felis Silvestris",
"Gato Montés Geoffroy",
"Gato Montés Gordoni",
"Gato Montés Indio",
"Gato Montés Iriomote",
"Gato Montés Javanés",
"Gato Montés Kellas",
"Gato Montés Kodkod",
"Gato Montés Leptailurus Serval",
"Gato Montés Lince Ibérico",
"Gato Montés Lince Rojo",
"Gato Montés Lince Rojo de Florida",
"Gato Montés Lynx Canadiense",
"Gato Montés Lynx Pardo",
"Gato Montés Lynx Rojo",
"Gato Montés Manul",
"Gato Montés Margay",
"Gato Montés Marjor",
"Gato Montés Oncilla",
"Gato Montés Orosi",
"Gato Montés Otocolobus Manul",
"Gato Montés Pampas",
"Gato Montés Pardinegro",
"Gato Montés Puma",
"Gato Montés Puma Concolor",
"Gato Montés Puma de Florida",
"Gato Montés Puma del Este",
"Gato Montés Puma del Oeste",
"Gato Montés Puma Melanura",
"Gato Montés Puma Mexicano",
"Gato Montés Puma Oriental",
"Gato Montés Puma Yagouaroundi",
"Gato Montés Puma Yagouaroundi Ameghino",
"Gato Montés Quimera",
"Gato Montés Rojo",
"Gato Montés Rufo",
"Gato Montés Salvaje",
"Gato Montés Serval",
"Gato Montés Serval Africano",
"Gato Montés Serval del Caracal",
"Gato Montés Serval del Caracal Africano",
"Gato Montés Serval del Sáhara",
"Gato Montés Serval Serval Africano",
"Gato Montés Servical",
"Gato Montés Silvestre",
"Gato Montés Subsahariano",
"Gato Montés Tigrillo",
"Gato Montés Tigrillo Andino",
"Gato Montés Tigrillo Asiático",
"Gato Montés Tigrillo de Bengala",
"Gato Montés Tigrillo del Caspio",
"Gato Montés Tigrillo Europeo",
"Gato Montés Tigrillo Indio",
"Gato Montés Tigrillo de la Selva Negra",
"Gato Montés Tigrillo Melanístico",
"Gato Montés Tigrillo Negro",
"Gato Montés Tigrillo Sudafricano",
"Gato Montés Tigrillo Tibetano",
"Gato Montés Turkestánico",
"Gato Montés Wildcat",
"Gato Montés Wildcat Africano",
"Gato Montés Yaguarundi",
"Gato Negro",
"Gato Persa",
"Gato Siamés",
"Gato Siames Tradicional",
"Gato Somalí",
"Gato Sphynx",
"Gato Tonquinés",
"Gato Toyger",
"Gato Van Turco",
"Gato Van Turco Blanco y Negro",
"Highlander",
"Himalayo",
"Javanés",
"Khao Manee",
"Korat",
"LaPerm",
"Maine Coon",
"Manchado de Rosetones",
"Mau Egipcio",
"Munchkin",
"Nebelung",
"Neva Masquerade",
"Ocicat",
"Ojos Azules",
"Oriental",
"Persa",
"Peterbald",
"Pixie Bob",
"Ragdoll",
"Ruso Azul",
"Sagrado de Birmania",
"Savannah",
"Scottish Fold",
"Selkirk Rex",
"Serengeti",
"Siamés",
"Siamés Tradicional",
"Siberiano",
"Singapur",
"Snowshoe",
"Sokoke",
"Somalí",
"Sphynx",
"Tailandés",
"Thai",
"Tonquinés",
"Toyger",
"Turco de Angora",
"Turco de Van",
"Van Turco",
"Van Turco Blanco y Negro",
"Van Turco Rojo y Blanco"]

    var select1 = document.getElementById('tipo');
        var select2 = document.getElementById('raza');
        var inputSearch = document.getElementById('searchRaza');
        
        select1.addEventListener('change',opcionCambiada );
        inputSearch.addEventListener('input', filterRazas);
        select1.addEventListener('change', filterRazas);
        

        function actualizarRazas() {
        var tipoSeleccionado = selectTipo.value;
        var lista = tipoSeleccionado === 'Perro' ? Perro : Gato;
        addOptions(lista);
        filterRazas();
    }
    
        
        function opcionCambiada(){
            var lista=[]
            select2.value = []
        
          if(select1.value==='Perro'){
            lista=Perro;
            }else{
           lista=Gato;
          }
            addOptions(lista)
        
        };
        function addOptions(list) {
        console.log(select2.value)
            var options = document.querySelectorAll('#raza option');
            options.forEach(o => o.remove());
        
         for (value in list) {
          var option = document.createElement("option");
          option.text = list[value];
          select2.add(option);
         }
        }

        function filterRazas() {
    var filter = inputSearch.value.toUpperCase();
    var tipoSeleccionado = select1.value;
    var lista = tipoSeleccionado === 'Perro' ? Perro : Gato;
    var filteredList = lista.filter(r => r.toUpperCase().includes(filter));

    // Actualizar el contenido del modal en tiempo real
    var modalBody = document.getElementById('razasList');
    modalBody.innerHTML = '';

    if (filteredList.length > 0) {
        filteredList.forEach(r => {
            var li = document.createElement('li');
            li.textContent = r;
            modalBody.appendChild(li);
        });

        // Mostrar el modal
        var myModal = new bootstrap.Modal(document.getElementById('razasModal'));
        myModal.show();
    } else {
        // Si no hay coincidencias, ocultar el modal
        var myModal = new bootstrap.Modal(document.getElementById('razasModal'));
        myModal.hide();
    }
}

    

    
        </script>

        <!-- Bootstrap JS y Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMEnHw8gHEm02Ll6dPQndvqSMaL81gj9CSe5MAqN63pFpWqadqBQPYckJxXM+I1a" crossorigin="anonymous"></script>

<script>
    function validarTextoEntrada(input, patron) {
    var texto = input.value
    var letras = texto.split("")
    var contieneNumeros = false;
    for (var x in letras) {
        var letra = letras[x]
        if (!(new RegExp(patron, "i")).test(letra)) {
            letras[x] = ""
            contieneNumeros = true;
        }
    }
    input.value = letras.join("")

    var errorNombreSpan = document.getElementById("errorNombre");
    errorNombreSpan.textContent = contieneNumeros ? "ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤNo se puede ingresar numeros." : "";
    }

var nombre = document.getElementById("nombre")
nombre.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})
</script>


<script>
    function validarCampos() {
        var nombre = document.getElementById('nombre').value;
        var tipo = document.getElementById('tipo').value;
        var raza = document.getElementById('raza').value;
        var opcion = document.getElementById('option').checked;
        var fecha = document.getElementById('fecha').value;

       
        if (nombre && tipo && raza && genero && fecha) {
            mostrarModal(); // Si todos los campos están llenos, abre el modal
        } else {
            alert('Por favor, completa todos los campos antes de registrar.'); 
        }
    }

    function resetearFormulario() {
        document.getElementById('nombre').value = '';
        document.getElementById('option').checked = true;
        document.getElementById('fecha').value = '';
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
        // Puedes cambiar "otroarchivo.php" por la ruta del archivo PHP al que deseas redirigir.
        window.location.href = '/Actualizar';
    }
</script>

<script>
    function redirigirAPhp1() {
        window.location.href = '/Eliminar';
}
</script>

<script>
    function redirigirAPhp2() {
        // Puedes cambiar "otroarchivo.php" por la ruta del archivo PHP al que deseas redirigir.
        window.location.href = '/mostrar-tabla';
    }
</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    document.getElementById('razasList').addEventListener('click', function(event) {
        // Verificar si el clic fue en un elemento de la lista
        if (event.target.tagName === 'LI') {
            // Obtener el texto del elemento clicado
            var razaSeleccionada = event.target.textContent.trim();

            // Actualizar el valor del campo de selección (select)
            document.getElementById('raza').value = razaSeleccionada;

            // Cerrar el modal (si es necesario)
            var myModal = new bootstrap.Modal(document.getElementById('razasModal'));
            myModal.hide();
        }
    });
</script>

<script>
   // Función para manejar el cambio en el input de la imagen
   function mostrarImagenPreview() {
            const input = document.getElementById('imagenInput');
            const preview = document.getElementById('imagenPreview');

            // Verifica si se seleccionó una imagen
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Asigna la imagen al fondo del contenedor
                    preview.style.backgroundImage = `url('${e.target.result}')`;
                };

                // Lee el contenido de la imagen seleccionada
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Asigna el evento de cambio al input de la imagen
        document.getElementById('imagenInput').addEventListener('change', mostrarImagenPreview);
    </script>

</script>

<script>
  window.addEventListener('resize', function() {
        const razasList = document.getElementById('razasList');
        const formulario = document.getElementById('myForm1');

        if (!formulario.classList.contains('hidden')) {
            ajustarFormularioSegunLista(formulario, razasList);
        }
    });

    function mostrarFormulario1() {
        const formulario = document.getElementById('myForm1');
        formulario.classList.remove('hidden');
        const overlay = document.getElementById('overlay');
        
        
        const razasList = document.getElementById('razasList');
        ajustarFormularioSegunLista(formulario, razasList);
        formulario.classList.remove('hidden');
        overlay.classList.remove('hidden');


        centrarFormularioEnPantalla(formulario);
    }

    function cerrarFormulario1() {
        const formulario = document.getElementById('myForm1');
        formulario.classList.add('hidden');
        const overlay = document.getElementById('overlay');
        overlay.classList.add('hidden');

    }

    function ajustarFormularioSegunLista(formulario, razasList) {
        const razasListHeight = razasList.offsetHeight;
        const nuevoHeight = `calc(${razasListHeight}px + 40px)`; // Ajusta según tu necesidad

        formulario.style.height = nuevoHeight;
        razasList.style.maxHeight = nuevoHeight;
    }

    function centrarFormularioEnPantalla(formulario) {
        const windowHeight = window.innerHeight;
        const formularioHeight = formulario.offsetHeight;
        formulario.style.top = `${(windowHeight - formularioHeight) / 2}px`;
    }
</script>



