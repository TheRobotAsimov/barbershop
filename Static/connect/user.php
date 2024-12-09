<?php
    session_start();
    $user = $_SESSION['usuario'];
    $id = $_SESSION['id'];

    if (!isset($user)) {
        header('Location: ../UsuarioWeb/index.php');
    }

    $currentPath = $_SERVER['REQUEST_URI'];

    if ($user == 'admin') {
        if (strpos($currentPath, 'UsuarioAdmin') == false) {
            header('Location: ../UsuarioAdmin/admin.php');
        }
    } else {
        if (strpos($currentPath, 'UsuarioRegistrado') == false) {
            header('Location: ../UsuarioRegistrado/index.php');
        }
    }
?>

