<?php include '../Static/connect/db.php'?>
<?php include '../includes/header.php'?>
<?php include '../Static/connect/user.php'; ?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM servicios WHERE idservicios = $id";
        $result = mysqli_query($conn, $query);
        sleep(2);
        header('Location: read.php');
    }

?>
