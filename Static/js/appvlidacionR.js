document.addEventListener("DOMContentLoaded", function () {
    const servicioInput = document.getElementById("servicio");
    const usuarioInput = document.getElementById("usuario");
    const fehoraInput = document.getElementById("fehora");
    const servicioAlert = document.getElementById("servicioAlert");
    const usuarioAlert = document.getElementById("usuarioAlert");
    const fehoraAlert = document.getElementById("fehoraAlert");

    function validarServicio(servicio) {
        return servicio !== "";
    }

    function validarUsuario(usuario) {
        return usuario !== "";
    }

    function validarFehora(fehora) {
        return fehora !== "";
    }

    window.validacion = function () {
        let esValido = true;

        if (!validarServicio(servicioInput.value)) {
            servicioAlert.classList.remove("d-none");
            esValido = false;
        } else {
            servicioAlert.classList.add("d-none");
        }

        if (!validarUsuario(usuarioInput.value)) {
            usuarioAlert.classList.remove("d-none");
            esValido = false;
        } else {
            usuarioAlert.classList.add("d-none");
        }

        if (!validarFehora(fehoraInput.value)) {
            fehoraAlert.classList.remove("d-none");
            esValido = false;
        } else {
            fehoraAlert.classList.add("d-none");
        }

        if (esValido) {
            document.getElementById("frm2").submit();
        }

        return esValido;
    };
});