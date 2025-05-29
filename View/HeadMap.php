<?php
require_once('../Models/GetFormsPoints.php');
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lienzo para Mapa</title>
  <link rel="stylesheet" href="../Styles/HeadMap.css" />
  <style>
    #map {
      height: 500px;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="contenedor-mapa">
    <div class="borde-izquierdo">
      <div class="elemento-borde">LEGENDA</div>
      <div class="elemento-borde">CONTROLES</div>
    </div>

    <div class="contenido-mapa">
      <!-- Aquí puedes poner tu mapa o contenido -->

      <h2 style="text-align: center">TU MAPA AQUÍ</h2>

      <p style="text-align: center"></p>
      <div id="map" class="mb-3"></div>
    </div>

    <div class="borde-derecho">
      <div class="elemento-borde">INFORMACIÓN</div>
      <div class="elemento-borde">AYUDA</div>
    </div>
  </div>
  <script>
    const puntosPHP = <?php echo json_encode($puntos); ?>;
    console.log(puntosPHP);
  </script>

  <script src="../Scripts/HeadMap.js"></script>

  <script
    async
    defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFI7AThHLSRjZnwrKUaNEWb2eA3ZraDbI&libraries=visualization&callback=initMap"></script>


</body>

</html>