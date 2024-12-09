<?php  include '../Static/connect/db.php'?>
<?php  include '../includes/header.php'?>
<?php include '../Static/connect/user.php'; ?>

<?php

    $servicio = $_POST['nombre'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO servicios (nombre, precio) VALUES ('$servicio', '$precio')";
    $result = mysqli_query($conn, $query);

    sleep(3);

    header('Location: create.php');

?>

<?php  include '../includes/footer.php'; ?>