<?php include '../Static/connect/db.php'?>
<?php include '../includes/header.php'?>
<?php include '../Static/connect/user.php'; ?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $estado = "Cancelado";
        $query = "UPDATE reservaciones SET estado = '$estado' WHERE idreservaciones = $id";
        $result = mysqli_query($conn, $query);
        sleep(2);
        header('Location: index.php');
    }

?>

<?php include '../includes/footer.php'; ?>