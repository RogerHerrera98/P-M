<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Moo+Lah+Lah&family=Praise&family=Vibur&family=Wendy+One&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  @vite('resources/css/app.css')
</head>

<body>

  <nav class="flex justify-between items-center w-full bg-[#e3eeff] px-6">
  <div class="flex justify-between items-center m-1">
        <h1 style="font-family: 'Moo Lah Lah', sans-serif;" class="text-black md:p-5 text-3xl">P&M</h1>
        <img class="w-14 h-14" src="Recursos/Logo2.png" alt="Icono P&M">
    </div>
   <div class="flex flex-row justify-center items-center space-x-4">
   <div class="flex flex-col justify-center items-center">
      <img src="Recursos/pastillas.png" alt="" class="w-14 h-14">
      <p class="text-md " style="font-family: 'Vibur', cursive;">Desparasitaciones</p>
    </div>
   <div class="flex flex-col justify-center items-center">
      <img src="Recursos/Datos_Clinicos.png" alt="" class="w-14 h-14">
      <p class="text-md " style="font-family: 'Vibur', cursive;">Datos Clínicos</p>
    </div>
    
   </div>
  </nav>
  <div class="w-full bg-[#76af3e] flex justify-center items-center h-20">
    <h1 class="text-white text-4xl py-2" style="font-family: 'Vibur', cursive;">Vacunaciones</h1>
  </div>
  <div class="flex flex-col justify-center items-center w-full h-screen bg-no-repeat bg-cover bg-center" style="background-image: url('Recursos/Fondo_Cli.png');">
    <table class="border-collapse w-3/5 my-10 h-1/2  bg-[#e1ffb0] table-fixed">
      <thead>
        <tr class="text-center ">
          <th class="border border-green-500 max-md:text-sm p-2">Fecha</th>
          <th class="border border-green-500 max-md:text-sm p-2">Etiqueta</th>
          <th class="border border-green-500 max-md:text-sm p-2">Vacuna</th>
          <th class="border border-green-500 max-md:text-sm p-2">Fecha Próx. Vacuna</th>
          <th class="border border-green-500 max-md:text-sm p-2">Firma M.V.Z</th>
         
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <td class="border border-green-500 max-md:text-sm p-2">Indiana</td>
          <td class="border border-green-500 max-md:text-sm p-2">Indianapolis</td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          
        </tr>
        <tr class="text-center">
          <td class="border border-green-500 max-md:text-sm p-2">Ohio</td>
          <td class="border border-green-500 max-md:text-sm p-2">Columbus</td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          
        </tr>
        <tr class="text-center">
          <td class="border border-green-500 max-md:text-sm p-2">Michigan</td>
          <td class="border border-green-500 max-md:text-sm p-2">Detroit</td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          
        </tr>
      </tbody> 
    </table>

    <div class="flex flex-row justify-between items-center ">

      <div class="flex flex-col justify-center items-center px-10">
        
        <img src="Recursos/Boton_Pez.png" alt="" class="w-36 h-24 realtive ">
        <button type="submit" class=" absolute text-[#7C1B04]" style="font-family: 'Luckiest Guy', cursive;">Editar</button>
      </div>

      <div class="flex flex-col justify-center items-center px-10">
        <img src="Recursos/Boton_Pez.png" alt="" class="w-36 h-24 relative ">
        <button type="submit" class="absolute text-[#7C1B04]" style="font-family: 'Luckiest Guy', cursive;">Guardar</button>
      </div>
    </div>

  </div>

</body>

</html>