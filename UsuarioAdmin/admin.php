<?php  include '../includes/header.php'?>
<?php include '../Static/connect/user.php'; ?>
<article class="entrada">
  <div class="entrada_contenido">
    <h3 class="no-margin">BARBERSHOP MÉXICO</h3>
    <p>Bienvenido usuario administrador. Elija una opción ha realizar.</p>
    <hr>
    <p><h4>GESTIÓN DE SERVICIOS:</h4>
    <a href="create.php"><img src="../Static/img/create.png"></a>
    <a href="read.php"> <img src="../Static/img/read.png"></a>
    <a href="read.php"><img src="../Static/img/update.png"></a>
    <a href="read.php"><img src="../Static/img/delete.png"></a></p>
    <p><h4>GESTIÓN DE RESERVACIONES:</h4>
    <a href="createR.php"><img src="../Static/img/create.png"></a>
    <a href="readR.php"> <img src="../Static/img/read.png"></a>
    <a href="readR.php"><img src="../Static/img/update.png"></a>
    <a href="readR.php"><img src="../Static/img/delete.png"></a></p>
  </div>
            
  
  <div class="entrada__imagen">
        <picture>                      
          <img loading="lazy" src="../Static/img/2.jpg" alt="imagen blog"> 
        </picture>
  </div>
</article>          

<a href="../Login/logout.php"><img src="../Static/img/logout.png" class="icon"></a>