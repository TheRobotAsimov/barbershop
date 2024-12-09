<?php include '../Static/connect/db.php'?>
<?php include '../includes/header.php'?>
<?php include '../Static/connect/user.php'; ?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM reservaciones WHERE idreservaciones = $id";
        $result = mysqli_query($conn, $query);
        sleep(2);
        header('Location: readR.php');
    }

?>
