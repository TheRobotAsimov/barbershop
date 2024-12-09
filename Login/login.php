<?php include '../includes/header.php';?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3>AUTENTIFICACIÓN</h3>
            <form method="POST" name="frm1" id="frm1" action="validation.php">
                <div class="form_container">
                    <label for="usuario" class="formulario_label">Usuario:
                        <input type="text" name="usuario" id="usuario" class="formulario_input">
                    </label>  
                </div> 
                <div class="form_container">
                    <label for="contrasena" class="formulario_label">Contraseña:
                        <input type="password" name="contrasena" id="contrasena" class="formulario_input">
                    </label>
                </div>                  
                <div class="form_container">            
                    <input type="button" class="formulario_btn" value="Enviar" onclick="validacion();"> 
                </div> 
            </form> 
            <a href="../UsuarioWeb/index.php" class="enlace-minimalista">
                <img src="../Static/img/flecha.png" class="volver">
            </a>
        </div>
    </article>
</div>

<script src="../Static/js/validaciones.js"></script>  

<?php include '../includes/footer.php';?>
