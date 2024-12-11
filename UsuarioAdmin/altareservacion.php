<?php
include '../includes/header.php';
include '../Static/connect/user.php';
include '../Static/connect/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idservicio = $_POST['servicio'];
    $idusuario = $_POST['usuario'];
    $fechahora = $_POST['fehora'];
    $telefono = $_POST['telefono'];
    $estado = "Activo";

    $sql = "INSERT INTO reservaciones (idusuario, idservicio, fechahora, telefono, estado) VALUES ('$idusuario', '$idservicio', '$fechahora', '$telefono', '$estado')";
    
    $result = mysqli_query($conn, $sql);

    sleep(3);
    header('Location: readR.php');
}
?>
