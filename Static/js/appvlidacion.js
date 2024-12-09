    const nombreInput = document.getElementById("nombre");
    const precioInput = document.getElementById("precio");
    const nombreAlert = document.getElementById("nombreAlert");
    const precioAlert = document.getElementById("precioAlert");

    const expreNombre = /^[a-zA-Z\s]+$/;
    const exprePrecio = /^[0-9]+$/;

    function validarNombre(nombre) {
        return expreNombre.test(nombre) && nombre.length > 0;
    }

    function validarPrecio(precio) {
        return exprePrecio.test(precio) && precio.length > 0;
    }

    function validacion() {
        let esValido = true;

        if (!validarNombre(nombreInput.value)) {
            nombreAlert.classList.remove("d-none");
            esValido = false;
        } else {
            nombreAlert.classList.add("d-none");
        }

        if (!validarPrecio(precioInput.value)) {
            precioAlert.classList.remove("d-none");
            esValido = false;
        } else {
            precioAlert.classList.add("d-none");
        }

        if(esValido){
            document.getElementById("frm1").submit();
        }

        return esValido;
    };

