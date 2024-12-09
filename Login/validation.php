<?php include '../Static/connect/db.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../Static/connect/user.php'; ?>

<?php

    session_start();

    $user = $_POST['usuario'];
    $pass = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE usuario = '$user' AND contrasena = '$pass'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

    if(($row['usuario'] == $user) && ($row['contrasena'] == $pass)){
        $_SESSION['usuario'] = $user;
        $_SESSION['id'] = $row['idusuario'];
        header('Location: index.php');
    }else{
        header('Location: login.php');
    }

?>
