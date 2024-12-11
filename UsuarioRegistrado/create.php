<?php include '../includes/header.php' ?>
<?php include '../Static/connect/user.php'; ?>
<?php include '../Static/connect/db.php'; ?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3>NUEVA RESERVACIÓN</h3>
            <form method="POST" name="frm2" id="frm2" action="altareservacion.php">
                <div class="form_container">
                    <label for="servicio" class="formulario_label">Tipo del servicio:</label>
                    <select name="servicio" id="servicio" class="formulario_input">
                        <option value="">Seleccione un servicio</option>
                        <?php
                        $sql = "SELECT * FROM servicios";
                        $result = mysqli_query($conn, $sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <option value='<?php echo $mostrar['idservicios'] ?>'><?php echo $mostrar['nombre'] . " - $" . $mostrar['precio'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form_container">
                    <label for="fehora" class="formulario_label">Fecha y Hora:</label>
                    <input type="datetime-local" name="fehora" id="fehora" class="formulario_input">
                </div>
                <div class="form_container">
                    <label for="telefono" class="formulario_label">Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" class="formulario_input" onkeypress="if((event.keyCode < 48) || (event.keyCode >57)){ event.returnValue=false; }" maxlength="10">
                    <div class="alert alert-danger mt-2 d-none" id="telefonoAlert">
                        El teléfono es obligatorio y debe contener solo números.
                    </div>
                </div>
                <div class="form_container">            
                    <input type="button" value="Enviar Datos" class="formulario_btn" onclick="validacion()"> 
                </div> 
            </form> 

            <a href="index.php" class="enlace-minimalista">
                <img src="../Static/img/flecha.png" class="volver">
            </a>
        </div>
    </article>
</div>

<script src='../Static/js/appvlidacionR.js'></script>  

<?php include '../includes/footer.php'; ?>
