<?php include '../Static/connect/db.php' ?>
<?php include '../includes/header.php' ?>
<?php include '../Static/connect/user.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM reservaciones WHERE idreservaciones = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $idservicios = $row['idservicio'];
        $fechahora = $row['fechahora'];
        $telefono = $row['telefono'];
    }
}

if (isset($_POST['servicio'])) {
    $id = $_GET['id'];
    $idservicios = $_POST['servicio'];
    $fechahora = $_POST['fehora'];
    $telefono = $_POST['telefono'];

    $query = "UPDATE reservaciones SET idservicio = '$idservicios', fechahora = '$fechahora', telefono = '$telefono' WHERE idreservaciones = $id";
    mysqli_query($conn, $query);

    header('Location: index.php');
}
?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3>Actualizar Reservación</h3>
            <form method="POST" action="edit.php?id=<?php echo $id; ?>">
                <div class="form_container">
                    <label for="servicio" class="formulario_label">Tipo del servicio:</label>
                    <select name="servicio" id="servicio" class="formulario_input">
                        <option value="">Seleccione un servicio</option>
                        <?php
                        $sql = "SELECT * FROM servicios";
                        $result = mysqli_query($conn, $sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <option value='<?php echo $mostrar['idservicios'] ?>' <?php if ($mostrar['idservicios'] == $idservicios) echo 'selected'; ?>><?php echo $mostrar['nombre'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form_container">
                    <label for="fehora" class="formulario_label">Fecha y Hora:</label>
                    <input type="datetime-local" name="fehora" id="fehora" class="formulario_input" value="<?php echo $fechahora; ?>">
                </div>
                <div class="form_container">
                    <label for="telefono" class="formulario_label">Telefono:</label>
                    <input type="text" name="telefono" id="telefono" class="formulario_input" value="<?php echo $telefono; ?>">
                </div>
                <div class="form_container">
                    <input type="submit" value="Actualizar" class="formulario_btn">
                </div>
            </form>
            <a href="index.php" class="enlace-minimalista">
                <img src="../Static/img/flecha.png" class="volver">
            </a>
        </div>
    </article>
</div>

<?php include '../includes/footer.php'; ?>