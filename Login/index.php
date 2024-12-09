<?php include '../Static/connect/db.php'; ?>
<?php include '../includes/header.php'; ?>

<?php

    session_start();
    $user = $_SESSION['usuario'];

    if(isset($user)){
        if($user == 'admin'){
            header('Location: ../UsuarioAdmin/admin.php');
        }else{
            header('Location: ../UsuarioRegistrado/index.php');
        }
    ?>

    <a href="logout.php">Cerrar Sesión</a>

    <?php
    }else{
        header('Location: login.php');
    }

?>