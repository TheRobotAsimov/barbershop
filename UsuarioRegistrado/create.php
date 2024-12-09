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
                    <input type="submit" value="Enviar Datos" class="formulario_btn"> 
                </div> 
            </form> 

            <a href="index.php" class="enlace-minimalista">
                <img src="../Static/img/flecha.png" class="volver">
            </a>
        </div>
    </article>
</div>

<?php include '../includes/footer.php'; ?>
