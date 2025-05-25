
const form = document.getElementById('reporteForm');


form.addEventListener('submit',  (event)=> {
    event.preventDefault();

    const Username = document.getElementById('NombreUsuario').value.trim();
    const UserDate = document.getElementById('Fechayhora').value;
    const UserDescription = document.getElementById('DescripcionUsuario').value.trim();

    if (Username === "", UserDate === "", UserDescription === "") {
        alert('Todos los campos son obligatorios')
        return false;
    }

    this.submit()

})


