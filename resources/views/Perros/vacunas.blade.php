<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Vibur&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<body>

  <nav class="flex justify-between items-center w-full bg-[#e3eeff] px-6">
    <img src="Recursos/Logo.png" class="w-14 h-14">
    <div class="flex flex-col justify-center items-center">
      <img src="Recursos/Datos_Clinicos.png" alt="" class="w-14 h-14">
      <p class="text-md " style="font-family: 'Vibur', cursive;">Datos Clínicos</p>
    </div>
  </nav>
  <div class="w-full bg-[#76af3e] flex justify-center items-center h-20">
    <h1 class="text-white text-4xl py-2" style="font-family: 'Vibur', cursive;">Vacunaciones</h1>
  </div>
  <div class="flex flex-col justify-center items-center w-full h-full ">
    <table class="border-collapse w-4/5 my-10 h-1/2 bg-[#e1ffb0] table-fixed">
      <thead>
        <tr class="text-center ">
          <th class="border border-green-500 max-md:text-sm p-2">Nombre de la mascota</th>
          <th class="border border-green-500 max-md:text-sm p-2">Nombre de la vacuna</th>
          <th class="border border-green-500 max-md:text-sm p-2">Fecha de aplicación</th>
          <th class="border border-green-500 max-md:text-sm p-2">Primera dosis</th>
          <th class="border border-green-500 max-md:text-sm p-2">Segunda dosis</th>
          <th class="border border-green-500 max-md:text-sm p-2">Autorización</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <td class="border border-green-500 max-md:text-sm p-2">Indiana</td>
          <td class="border border-green-500 max-md:text-sm p-2">Indianapolis</td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
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
          <td class="border border-green-500 max-md:text-sm p-2"></td>
        </tr>
        <tr class="text-center">
          <td class="border border-green-500 max-md:text-sm p-2">Michigan</td>
          <td class="border border-green-500 max-md:text-sm p-2">Detroit</td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
          <td class="border border-green-500 max-md:text-sm p-2"></td>
        </tr>
      </tbody> 
    </table>

    <div class="flex flex-row justify-between items-center ">

      <div class="flex flex-col justify-center items-center px-10">
        
        <img src="Recursos/Boton_Hueso.png" alt="" class="w-40 h-40 realtive ">
        <button type="submit" class="w-36 h-24 absolute text-[#7C1B04]" style="font-family: 'Luckiest Guy', cursive;">Editar</button>
      </div>

      <div class="flex flex-col justify-center items-center px-10">
        <img src="Recursos/Boton_Hueso.png" alt="" class="w-40 h-40 relative ">
        <button type="submit" class="w-36 h-24 absolute text-[#7C1B04]" style="font-family: 'Luckiest Guy', cursive;">Guardar</button>
      </div>
    </div>

  </div>

</body>

</html>