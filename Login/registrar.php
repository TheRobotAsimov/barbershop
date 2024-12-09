<?php include '../includes/header.php';?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3>Registro</h3>
            <form method="POST" name="frm1" id="frm1" action="email.php">
                <div class="form_container">
                    <label for="email" class="formulario_label">Correo:
                        <input type="text" name="email" id="email" class="formulario_input">
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

<script src="../Static/js/validacionesR.js"></script>  

<?php include '../includes/footer.php';?>
