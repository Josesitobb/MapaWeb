const form = document.getElementById('reporteForm');
const intimidacionCheck = document.getElementById('intimidacionCheck');
const hurtoCheck = document.getElementById('hurtoCheck');
const agresionCheck = document.getElementById('agresionCheck');
const otroCheck = document.getElementById('otroCheck');
const noCheck = document.getElementById('noCheck');
const hiddenElement = document.getElementById('hiddenElement');

// Funcion para verificar si los check estan seleccionados
function toggleHiddenElement() {
    if (intimidacionCheck.checked || hurtoCheck.checked || agresionCheck.checked || otroCheck.checked) {
        hiddenElement.removeAttribute('hidden');

    } else {
        hiddenElement.setAttribute('hidden', true);
    }
}

[intimidacionCheck, hurtoCheck, agresionCheck, otroCheck].forEach(check => {
    check.addEventListener('change', toggleHiddenElement);
})


// Funcion para verificar los datos is se activa los check de   hurtoCheck || hurtoCheck  || otroCheck

function HiddenData() {
    // Pregunta 11

    const coordenadasInput = document.getElementById('coordenadasInput').value;
    if (!coordenadasInput) {
        alert('Por favor selecciona una ubicación en el mapa en la Pregunta 11');
        return false;
    }
    // Pregunta 12
    const lunescheck = document.getElementById('lunescheck');
    const martescheck = document.getElementById('martescheck');
    const miercolescheck = document.getElementById('miercolescheck');
    const juevescheck = document.getElementById('juevescheck');
    const viernescheck = document.getElementById('viernescheck');
    const sabadocheck = document.getElementById('sabadocheck');

    if (!lunescheck.checked && !martescheck.checked && !miercolescheck.checked && !juevescheck.checked && !viernescheck.checked && !sabadocheck.checked) {
        alert('Por favor, seleccione al menos un día en la Pregunta 12.');
        return false;

    }

    // Pregunta 13
    const tiempoSucedido = document.getElementById('tiempoSucedido').value;
    if (!tiempoSucedido) {
        alert('Por favor, ingrese una hora en la Pregunta 13.');
        return false;

    }

    // pregunta 14
    const CelularHurto = document.getElementById('CelularHurto');
    const PortatilHurto = document.getElementById('PortatilHurto');
    const relojHurto = document.getElementById('relojHurto');
    const dineroHurto = document.getElementById('dineroHurto');
    const Bicicleta_patinetaHurto = document.getElementById('Bicicleta_patinetaHurto');
    const otroHurto = document.getElementById('otroHurto');
    if (!CelularHurto.checked && !PortatilHurto.checked && !relojHurto.checked && !dineroHurto.checked && !Bicicleta_patinetaHurto.checked && !otroHurto.checked) {
        alert('Por favor, seleccione al menos un elemento en la Pregunta 14.');
        return false;

    }

    // Pregunta 15
    const IntervinieronDelicuentes = document.getElementById('IntervinieronDelicuentes').value;
    if (!IntervinieronDelicuentes) {
        alert('Por favor, seleccione una opción en la Pregunta 15.');
        return false;

    }

    // Pregunta 16
    const emplearonAlgunArma = document.getElementById('emplearonAlgunArma').value;
    if (!emplearonAlgunArma) {
        alert('Por favor, seleccione una opción en la Pregunta 16.');
        return false;

    }
    // Pregunta 17

    const desplazamientoPerpetradores = document.getElementById('desplazamientoPerpetradores').value;
    if (!desplazamientoPerpetradores) {
        alert('Por favor, seleccione una opción en la Pregunta 17.');
        return false;

    }

    // Pregunta 18
    const comoSeEncontraba = document.getElementById('comoSeEncontraba').value;
    if (!comoSeEncontraba) {
        alert('Por favor, seleccione una opción en la Pregunta 18.');
        return false;

    }

    // Pregunta 19
    const lecciones = document.getElementById('lecciones').value;
    if (!lecciones) {
        alert('Por favor, seleccione una opción en la Pregunta 19.');
        return false;

    }

    // Pregunta 20
    const posteriorHechos = document.getElementById('posteriorHechos').value;
    if (!posteriorHechos) {
        alert('Por favor, seleccione una opción en la Pregunta 20.');
        return false;

    }

    // Pregunta 21
    const recomendaciones = document.getElementById('recomendaciones').value;
    if (!recomendaciones) {
        alert('Por favor, escriba una recomendación en la Pregunta 21.');
        return false;

    }


    return form.submit();


}



form.addEventListener('submit', (event) => {
    event.preventDefault();
    // Primeras pregutas
    const Program = document.getElementById('Carrera').value;
    const Semestre = document.getElementById('Semestre').value;
    const Day = document.getElementById('Day').value;
    const Age = document.getElementById('Age').value;
    const Locality = document.getElementById('Locality').value;
    const Neighborhood = document.getElementById('Neighborhood').value;
    const Transport = document.getElementById('Transport').value;
    const Perception = document.getElementById('Perception').value;
    const AvRojas26 = document.getElementById('AvRojas26').value;
    const AvRojas63 = document.getElementById('AvRojas63').value;
    const AvRojas53yBoyaca = document.getElementById('AvRojas53yBoyaca').value;
// 1
    if (Program === "") {
        alert("Por favor, seleccione su programa académico (Pregunta 1).");
        return false;
    }
    // 2
    if (Semestre === "") {
        alert("Por favor, indique su semestre (Pregunta 2).");
        return false;
    }
    // 3
    if (Day === "") {
        alert("Por favor, seleccione el día en que diligencia el formulario (Pregunta 3).");
        return false;
    }
    // 4
    if (Age === "") {
        alert("Por favor, ingrese su edad (Pregunta 4).");
        return false;
    }
    // 5
    if (Locality === "") {
        alert("Por favor, seleccione su localidad (Pregunta 5).");
        return false;
    }
    //6
    if (Neighborhood === "") {
        alert("Por favor, indique su barrio (Pregunta 6).");
        return false;
    }
    // 7
    if (Transport === "") {
        alert("Por favor, seleccione su medio de transporte (Pregunta 7).");
        return false;
    }
    // 8
    if (Perception === "") {
        alert("Por favor, indique su percepción de seguridad (Pregunta 8).");
        return false;
    }
    // 9
    if (AvRojas26 === "") {
        alert("Por favor, califique el punto Av. Rojas con Calle 26 (Pregunta 9).");
        return false;
    }
    // 9
    if (AvRojas63 === "") {
        alert("Por favor, califique el punto Av. Rojas con Calle 63 (Pregunta 9).");
        return false;
    }
    // 9
    if (AvRojas53yBoyaca === "") {
        alert("Por favor, califique el punto Av. Rojas entre Calle 53 y Av. Boyacá (Pregunta 9).");
        return false;
    }

    // Validacion que seleccione uno
    if (!intimidacionCheck.checked && !hurtoCheck.checked && !agresionCheck.checked && !otroCheck.checked && !noCheck.checked) {
        alert('Por favor, seleccione al menos un campo en la Pregunta 10.');

        return false;
    }
    if (intimidacionCheck.checked && hurtoCheck.checked && agresionCheck.checked && otroCheck.checked && noCheck.checked) {
        alert('No puede seleccionar todas las opciones en la Pregunta 10.');
        return false;

    }
    if (noCheck.checked && (intimidacionCheck.checked || hurtoCheck.checked || agresionCheck.checked || otroCheck.checked)) {
        alert('La opción "No" no puede seleccionarse junto con otras opciones en la Pregunta 10.');
        return false;
    }

    if (intimidacionCheck.checked || hurtoCheck.checked || agresionCheck.checked || otroCheck.checked) {
        const valid = HiddenData();
        if (!valid) return false;
    }
    form.submit();
});




