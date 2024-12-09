<?php
include '../includes/header.php';
include '../Static/connect/user.php';
include '../Static/connect/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idservicio = $_POST['servicio'];
    $idusuario = $_POST['usuario'];
    $fechahora = $_POST['fehora'];

    $sql = "INSERT INTO reservaciones (idusuario, idservicio, fechahora) VALUES ('$idusuario', '$idservicio', '$fechahora')";
    
    $result = mysqli_query($conn, $sql);

    sleep(3);
    header('Location: readR.php');
}
?>
