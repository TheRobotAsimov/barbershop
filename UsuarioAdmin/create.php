<?php include '../includes/header.php';?>
<?php include '../Static/connect/user.php'; ?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3>AGREGA UN SERVICIO</h3>
            <form method="POST" name="frm1" id="frm1" action="altaservicios.php">
                <div class="form_container">
                    <label for="nombre" class="formulario_label">Tipo del servicio:</label>
                    <input type="text" name="nombre" id="nombre" class="formulario_input">
                    <div class="alert alert-danger mt-2 d-none" id="nombreAlert">
                        El nombre del servicio es obligatorio y debe contener solo letras.
                    </div>
                </div> 
                <div class="form_container">
                    <label for="precio" class="formulario_label">Costo del servicio:</label>
                    <input type="text" name="precio" id="precio" class="formulario_input" onkeypress="if((event.keyCode < 48) || (event.keyCode >57)){ event.returnValue=false; }" maxlength="4">
                    <div class="alert alert-danger mt-2 d-none" id="precioAlert">
                        El precio del servicio es obligatorio y debe contener solo números.
                    </div>
                </div>                  
                <div class="form_container">            
                    <input type="button" value="Enviar Datos" class="formulario_btn" onclick="validacion()"> 
                </div> 
            </form> 

            <div class="enlaces">
              <a href="admin.php" class="enlace-minimalista">
                  <img src="../Static/img/flecha.png" class="volver">
              </a>
                <a href="read.php" class="enlace-minimalista">
                    <img src="../Static/img/read.png" class="volver">
                </a>
            </div>
        </div>
    </article>
</div>

<script src='../Static/js/appvlidacion.js'></script>  
