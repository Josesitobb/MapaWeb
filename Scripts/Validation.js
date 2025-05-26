const form = document.getElementById('reporteForm');

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

    if (
        Program === "" || Semestre === "" || Day === "" || Age === "" ||
        Locality === "" || Neighborhood === "" || Transport === "" ||
        Perception === "" || AvRojas26 === "" || AvRojas63 === "" || AvRojas53yBoyaca === ""
    ) {
        alert('Todos los campos son obligatorios');
        return false;
    }

    form.submit(); 
});




