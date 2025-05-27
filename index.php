<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reporte de Robo - Formulario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Styles/style.css">

</head>

<body>
  <div class="container">
    <!-- Encabezado del formulario -->
    <header class="form-header">
      <h1>Entorno De Seguridad En La Universidad Libre</h1>
      <p class="lead">Esta encuesta forma parte de un proyecto de grado del programa de Ingeniería Ambiental, liderado por un estudiante </p>
    </header>

    <!-- Formulario principal -->
    <main>
      <form id="reporteForm" action="/Controllers/User.php" method="post">
        <!-- Información personal -->
        <fieldset class="mb-4">
          <legend class="h4 mb-3">Datos Basicos</legend>
          <!-- Carrera o programa -->
          <div class="mb-3">
            <label for="NombreUsuario" class="form-label required-field">1.Carrera o programa</label>
            <input type="text" class="form-control" id="Carrera" name="Program"
              placeholder="Ingrese el nombre de su carrera" require>
          </div>
          <!-- <div class="invalid-feedback">
              Por favor ingrese su nombre.
            </div> -->
          <!-- Semestres -->
          <div class="mb-3">
            <label for="Semestre" class="form-label required-field">2.Semestre</label>
            <select class="form-control" name="Semestre" id="Semestre" require>
              <option value="" selected disabled>Selecione un opcion</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>


            <!-- Jornada de estudio -->
            <div class="mb-3">
              <label for="Day" class="form-label required-field">3.Jornada</label>
              <select class="form-control" name="Day" id="Day" require>
                <option value="" selected disabled>Seleccione una Jornada</option>
                <option value="Diurna">Diurna</option>
                <option value="Nocturna">Nocturna</option>
                <option value="Mixta">Mixta</option>
              </select>
            </div>

            <!-- Edad -->
            <div class="mb-3">
              <label for="Age" class="form-label required-field">4.Edad</label>
              <input type="number" class="form-control" id="Age" name="Age"
                placeholder="Ingrese su edad" require>

            </div>


            <!-- Localidad -->
            <div class="mb-3">
              <label for="Locality" class="form-label required-field">5.Localidad</label>
              <select class="form-control" name="Locality" id="Locality" require>
                <option value="" selected disabled>Seleccione una Localidad</option>
                <option value="Usaquén">Usaquén</option>
                <option value="Chapinero">Chapinero</option>
                <option value="Santa Fé">Santa Fé</option>
                <option value="San Cristóbal">San Cristóbal</option>
                <option value="Usme">Usme</option>
                <option value="Tunjuelito">Tunjuelito</option>
                <option value="Bosa">Bosa</option>
                <option value="Kennedy">Kennedy</option>
                <option value="Engativá">Engativá</option>
                <option value="Suba">Suba</option>
                <option value=" Barrios Unidos"> Barrios Unidos</option>
                <option value="Teusaquillo">Teusquillo</option>
                <option value="Los Mártires">Los Mártires</option>
                <option value="Antonio Nariño">Antonio Nariño</option>
                <option value="Puente Aranda">Puente Aranda</option>
                <option value="Candelaria">Candelaria</option>
                <option value="Rafael Uribe Uribe">Rafael Uribe Uribe</option>
                <option value="Ciudad Bolívar">Ciudad Bolívar</option>
                <option value="Sumapaz">Sumapaz</option>
              </select>
            </div>

            <!-- Barrio de residencia -->
            <div class="mb-3">
              <label for="Neighborhood" class="form-label required-field">6.Barrio de residencia</label>
              <input type="text" class="form-control" id="Neighborhood" name="Neighborhood"
                placeholder="Escriba su barrio de residencia" require>

            </div>


            <!-- Cómo se transporta a la Universidad libre -->
            <div class="mb-3">
              <label for="Transport" class="form-label required-field">7.¿Cómo se transporta a la Universidad libre?</label>
              <select class="form-control" name="Transport" id="Transport" require>
                <option value="" selected disabled>
                  Seleccione una medio de transporte
                </option>
                <option value="Transporte Público">Transporte Público</option>
                <option value="Transporte plataforma">Transporte plataforma</option>
                <option value="Bicicleta-patineta electrica">Bicicleta - patineta electrica</option>
                <option value="Moto">Moto</option>
                <option value="Automóvil">Automóvil</option>
                <option value="A pie">A pie</option>

              </select>
            </div>


        </fieldset>
        <!-- Percepción de seguridad -->
        <fieldset class="mb-4 ">
          <legend class="h4 mb-3">Percepción de seguridad</legend>

          <!-- ¿Cual es su percepción de seguridad en zonas aledañas a la universidad? -->
          <label for="Perception" class="form-label required-field">9¿Cual es su percepción de seguridad en zonas aledañas a la universidad? de la siguiente responda del 1 al 5 siendo 1 poco segura y 5 muy segura</label>
          <select class="form-control" name="Perception" id="Perception" require>
            <option value="" selected disabled>
              Seleccione una percepcion
            </option>
            <option value="1">1 </option>
            <option value="2">2 </option>
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="5">5</option>
          </select>

          <div class="mb-3">
            <label for="AvRojas26" class="form-label required-field">10
              ¿Sobre la percepción de seguridad en zonas aledañas a la universidad, de las siguientes asigne un valor entre 1 y 5 siendo 1 poco segura y 5 muy segura?
            </label>
            <br>
            <br>
            <h6>Avenia rojas hacia las 26</h6>
            <select class="form-control" name="AvRojas26" id="AvRojas26" require>
              <option value="" selected disabled>
                Seleccione un valor
              </option>
              <option value="1">1 </option>
              <option value="2">2 </option>
              <option value="3">3 </option>
              <option value="4">4 </option>
              <option value="5">5</option>
            </select>

            <h6>Avenia rojas hacia la calle 63</h6>
            <select class="form-control" name="AvRojas63" id="AvRojas63" require>
              <option value="" selected disabled>
                Seleccione un valor
              </option>
              <option value="1">1 </option>
              <option value="2">2 </option>
              <option value="3">3 </option>
              <option value="4">3 </option>
              <option value="4">4</option>
            </select>

            <h6>Calle 53 entre avenida rojas y avenida Boyaca</h6>
            <select class="form-control" name="AvRojas53yBoyaca" id="AvRojas53yBoyaca" require>
              <option value="" selected disabled>
                Seleccione un valor
              </option>
              <option value="5">Muy Segura </option>
              <option value="4">Segura </option>
              <option value="3">Normal </option>
              <option value="2">Inseguridad </option>
              <option value="1">Muy Insegurda</option>
            </select>
          </div>

          <!-- Ha sido victima de intimidaciones, hurtos o agresiones en zonas aledañas a la universidad? -->
          <div class="mb-4">
            <div class="mb-3">
              <label class="form-label required-field">
                11. ¿Ha sido víctima de intimidaciones, hurtos o agresiones en zonas aledañas a la universidad?
              </label>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="intimidacionCheck" value="Intimidación" name="Intimidation[]">
                <label class="form-check-label" for="intimidacionCheck">Intimidación</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hurtoCheck" value="Hurto" name="Intimidation[]">
                <label class="form-check-label" for="hurtoCheck" name="Intimidation[]">Hurto</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agresionCheck" value="Agresión" name="Intimidation[]">
                <label class="form-check-label" for="agresionCheck" name="Intimidation[]">Agresión</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="otroCheck" value="Otro" name="Intimidation[]">
                <label class="form-check-label" for="otroCheck" name="Intimidation[]">Otro</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="noCheck" value="No" name="Intimidation[]">
                <label class="form-check-label" for="noCheck" name="Intimidation[]">No (No he sido víctima)</label>

              </div>
            </div>
          </div>
        </fieldset>

        <!-- Descripción de eventos de inseguridad -->
        <fieldset class="mb-4">
          <div id="hiddenElement" hidden>
            <legend class="h4 mb-3">Descripción de eventos de inseguridad</legend>
            <!-- En cual de los siguentes sectores fue victima de hurto? (señale en el mapa tantos como hayan ocurrido) -->
            <div class="mb-3">
              <label for="Fechayhora" class="form-label required-field">12.¿En cual de los siguentes sectores fue victima de hurto? (señale en el mapa tantos como hayan ocurrido)</label>
              <label class="form-label required-field">Ubicación del incidente</label>
              <button type="button" class="btn btn-map w-100" data-bs-toggle="modal" data-bs-target="#mapaModal">
                <i class="bi bi-map"></i> Seleccionar ubicación en el mapa
              </button>
              <small class="text-muted">Haga clic para seleccionar la ubicación exacta</small>
            </div>
            <input type="hidden" name="MapTheft" id="coordenadasInput">
            <!-- 13.Que dia ocurrieron los hechos -->

            <div class="mb-3">
              <label for="DescripcionUsuario" class="form-label required-field">13.Que dia ocurrieron los hecho</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="lunescheck" value="Lunes" name="DayFacts[]">
                <label class="form-check-label" for="lunescheck">Lunes</label>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="martescheck" value="Martes" name="DayFacts[]">
                <label class="form-check-label" for="martescheck">Martes</label>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="miercolescheck" value="Miercoles" name="DayFacts[]">
                <label class="form-check-label" for="miercolescheck">Miercoles</label>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="juevescheck" value="Jueves" name="DayFacts[]">
                <label class="form-check-label" for="juevescheck">Jueves</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="viernescheck" value="Viernes" name="DayFacts[]">
                <label class="form-check-label" for="viernescheck">Viernes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="sabadocheck" value="Sabado" name="DayFacts[]">
                <label class="form-check-label" for="sabadocheck">Sabado</label>
              </div>
            </div>

            <!-- 14.¿A que hora aproximada ocurrieron los hechos? -->
            <div class="mb-3">
              <label for="tiempoSucedido" class="form-label required-field">14.¿A que hora aproximada ocurrieron los hechos?</label>
              <input type="time" class="form-control" id="tiempoSucedido" name="TimeFacts"
                placeholder="Ingrese el nombre de su carrera">

            </div>
            <!-- 15 Fue victima de hurto de: -->
            <div class="mb-3">
              <label for="victimaDeHurto" class="form-label required-field">15. Fue victima de hurto de:</label>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="CelularHurto" value="Celular" name="StolenObject[]">
                <label class="form-check-label" for="CelularHurto">Celular</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="PortatilHurto" value="Portatil" name="StolenObject[]">
                <label class="form-check-label" for="PortatilHurto">Portátil</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="relojHurto" value="Reloj" name="StolenObject[]">
                <label class="form-check-label" for="relojHurto">Reloj</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="dineroHurto" value="Dinero" name="StolenObject[]">
                <label class="form-check-label" for="dineroHurto">Dinero</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="Bicicleta_patinetaHurto" value="Bicicleta-patineta" name="StolenObject[]">
                <label class="form-check-label" for="Bicicleta_patinetaHurto">Bicicleta patineta</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="otroHurto" value="Otros" name="StolenObject[]">
                <label class="form-check-label" for="otroHurto">Otros</label>

              </div>

              <!--16. ¿En el hecho intervinieron cuantos delincuentes?-->
              <div class="mb-3">
                <label for="IntervinieronDelicuentes" class="form-label required-field">16.¿En el hecho intervinieron cuantos delincuentes?</label>
                <select class="form-control" name="NumberOfOffenders" id="IntervinieronDelicuentes">
                  <option value="" selected disabled>
                    Seleccione una opcion
                  </option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="Mas De 2">Mas 2</option>

                </select>
              </div>
              <!-- 17.¿Emplearon algún tipo de arma? -->
              <div class="mb-3">
                <label for="emplearonAlgunArma" class="form-label required-field">17.¿Emplearon algún tipo de arma?</label>
                <select class="form-control" name="WeaponType" id="emplearonAlgunArma">
                  <option value="" selected disabled>
                    Seleccione una opcion
                  </option>
                  <option value="Ningún tipo de arma solo intimidaciones">Ningún tipo de arma solo intimidaciones</option>
                  <option value="Alguna sustancia">Alguna sustancia</option>
                  <option value="Arma blanca">Arma blanca</option>
                  <option value="Arma de fuego">Arma de fuego</option>

                </select>
              </div>

              <!-- 18.Los perpetradores se desplazaban: -->
              <div class="mb-3">
                <label for="desplazamientoPerpetradores" class="form-label required-field">18.Los perpetradores se desplazaban:</label>
                <select class="form-control" name="DisplacementOfPerpetrators" id="desplazamientoPerpetradores">
                  <option value="" selected disabled>
                    Seleccione una opcion
                  </option>
                  <option value="A pie">A pie</option>
                  <option value="Bicicleta">En bicicleta</option>
                  <option value="Moticicleta"> Motocicleta</option>
                  <option value="Vehiculo">Vehículo</option>
                  <option value="Otro">Otros</option>

                </select>
              </div>

              <!-- 19.Usted se encontraba: -->
              <div class="mb-3">
                <label for="comoSeEncontraba" class="form-label required-field">19.Usted se encontraba:</label>
                <select class="form-control" name="StateAtTheMoment" id="comoSeEncontraba">
                  <option value="" selected disabled>
                    Seleccione una opcion
                  </option>
                  <option value="Solo">Solo</option>
                  <option value="Acompañado">Acompañado</option>
                </select>
              </div>


              <!-- 20.¿En el hecho usted presento algún tipo de lesión? -->
              <div class="mb-3">
                <label for="lecciones" class="form-label required-field">20.¿En el hecho usted presento algún tipo de lesión</label>
                <select class="form-control" name="TypeOfLesson" id="lecciones">
                  <option value="" selected disabled>
                    Seleccione una opcion
                  </option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>



              <!-- 21.¿En el hecho usted presento algún tipo de lesión? -->
              <div class="mb-3">
                <label for="posteriorHechos" class="form-label required-field">21.Posterior a los hechos usted</label>
                <select class="form-control" name="AfterTheEvents" id="posteriorHechos">
                  <option value="" selected disabled>
                    Seleccione una opcion
                  </option>
                  <option value="Llamo al apolicía del cuadrante">Llamo a la policía del cuadrante</option>
                  <option value="Informó a familiares o amigos">Informó a familiares o amigos</option>
                  <option value="Informó a personal de launiversidad">Informó a personal de la universidad</option>
                  <option value="No informó">No informó</option>
                </select>
              </div>


              <!-- 22.¿Tienes alguna recomendacion para mejorar la seguridad o la percepcion de seguridad en zonas aledañas a la U?
 -->
              <div class="mb-3">
                <label for="recomendaciones" class="form-label required-field">22.¿Tienes alguna recomendacion para mejorar la seguridad o la percepcion de seguridad en zonas aledañas a la U?</label>
                <input type="text" class="form-control" id="recomendaciones"
                  placeholder="Ingrese una recomendaciones o sugerencias" name="Recommendation">
              </div>
            </div>

        </fieldset>


        <!-- Botones de acción -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <!-- <button type="reset" class="btn btn-outline-secondary me-md-2">Limpiar formulario</button> -->
          <button type="submit" class="btn btn-primary">Enviar reporte</button>
        </div>
      </form>
    </main>

    <!-- Tabla de coordenadas -->
    <!-- <section class="mt-5">
      <h2 class="h4 mb-3">Ubicaciones reportadas</h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Fecha</th>
              <th scope="col">Latitud</th>
              <th scope="col">Longitud</th>
            </tr>
          </thead>
          <tbody id="tabla-coordenadas"> -->
    <!-- Datos se llenarán dinámicamente -->
    <!-- <tr>
              <td colspan="5" class="text-center">No hay reportes registrados</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div> -->

    <!-- Modal del Mapa -->
    <div class="modal fade" id="mapaModal" tabindex="-1" aria-labelledby="mapaModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mapaModalLabel">Seleccione la ubicación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-info">
              <p id="Coordenadas">Haga clic en el mapa para seleccionar la ubicación exacta</p>
              <strong>Para marcar un punto, simplemente haz doble clic en el mapa y acepta la notificación</strong>
              <strong>Luego, haz clic en el botón 'Confirma ubicación' ubicado en la parte derecha del mapa</strong>
            </div>
            <div id="map" class="mb-3"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="confirmarUbicacion">Confirmar ubicación</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Scripts -->
    <!-- Map -->
    <script src="Scripts/Map.js"></script>
    <!-- Validaciones en javascrip -->
    <script src="Scripts/Validation.js"></script>


    <!-- Google maps -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFI7AThHLSRjZnwrKUaNEWb2eA3ZraDbI&callback=InicialMapa"
      async
      defer></script>

    <!-- Js
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script> -->


    <!-- JSboostraaaaapa -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
      integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D"
      crossorigin="anonymous"></script>


</body>

</html>