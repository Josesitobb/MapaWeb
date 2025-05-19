//Inicar array con elementos
let arrayConElementos = [];



function InicialMapa() {
    contador = 0;
    // Iniciar la coordenada de google
    var Universidad = { lat: 4.668506871633285, lng: -74.10310276150402 };
    var map = new google.maps.Map(document.getElementById("map"), {
        center: Universidad,
        zoom: 18,
        disableDoubleClickZoom: true,
    });

    // Hace el marcador
    let marker = new google.maps.Marker({
        position: Universidad,
        map: map,
        title: "Universidad libre"
    });
    // Hace el evento cuando da 2 clicks 
    map.addListener('dblclick', (evento) => {

        // Buscar la longitud
        let latitud = evento.latLng.lat();
        let longitud = evento.latLng.lng();

        const visualizacion = document.getElementById('Coordenadas').textContent = `latitud: ${latitud}, longitud: ${longitud}`
        // si el marcador esta lleno lo borra
        if (window.confirm("¿Quieres seleccionar esta ubicacion?")) {
            arrayConElementos.push({ id: arrayConElementos.length + 1, latitudArray: latitud, longitudArray: longitud })
            if (marker) {
                marker.setMap(null);
                marker = new google.maps.Marker({
                    position: { lat: latitud, lng: longitud },
                    map: map,

                });


            }
        }



        // Recorrer el array cada que se actualize el click
        let cuerpoTabla = "";
        arrayConElementos.forEach((element, index) => {
            cuerpoTabla += `
    <tr>
      <td>${index + 1}</td>
      <td>${element.latitudArray}</td>
      <td>${element.longitudArray}</td>
    </tr>
  `;
        });
        document.getElementById("tabla-coordenadas").innerHTML = cuerpoTabla;

    });
};


