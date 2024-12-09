<?php include '../Static/connect/db.php'?>
<?php include '../includes/header.php'; ?>
<?php include '../Static/connect/user.php'; ?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM servicios WHERE idservicios = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $servicio = $row['nombre'];
            $precio = $row['precio'];
        }
    }

    if(isset($_POST['nombre'])){
        $id = $_GET['id'];
        $servicio = $_POST['nombre'];
        $precio = $_POST['precio'];

        $query = "UPDATE servicios SET nombre = '$servicio', precio = '$precio' WHERE idservicios = $id";
        mysqli_query($conn, $query);

        header('Location: read.php');
    }

?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3>Actualizar Servicio</h3>
            <form method="POST" action="update.php?id=<?php echo $id; ?>">
                <div class="form_container">
                    <label for="nombre" class="formulario_label">Tipo del servicio:</label>
                    <input type="text" name="nombre" id="nombre" class="formulario_input" value="<?php echo $servicio; ?>">
                </div>
                <div class="form_container">
                    <label for="precio" class="formulario_label">Costo del servicio:</label>
                    <input type="text" name="precio" id="precio" class="formulario_input" value="<?php echo $precio; ?>">
                </div>
                <div class="form_container">
                    <input type="submit" value="Actualizar" class="formulario_btn">
                </div>
            </form>
            <a href="read.php" class="enlace-minimalista">
                <img src="../Static/img/flecha.png" class="volver">
            </a>
        </div>
    </article>
</div>
