<?php include '../Static/connect/db.php'?>
<?php  include '../includes/header.php'?>
            <article class="entrada">
                <div class="entrada_contenido">
                    <h3>BARBERSHOP MÉXICO</h3>
                    <div class="enlaces">
                        <a href="../Login/registrar.php" class="enlace-minimalista"> 
                            <img src="../Static/img/createac.png" class="icon"> 
                            <span>Registrar</span> 
                        </a> 
                        <a href="../Login/login.php" class="enlace-minimalista"> 
                            <img src="../Static/img/usericon.png" class="icon">
                            <span>Iniciar Sesión</span>
                        </a>
                    </div>
                    
                    <h4>Servicios:</h4>
                    <?php
                        $query = "SELECT * FROM servicios";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)) { ?>
                            <p class="servicios"><?php echo $row['nombre'] ?> - $<?php echo $row['precio']?></p>
                    <?php } ?> 
                    
                    <h4>Horarios:</h4>
                    <p>De 10:00 a 20:00 todos los días excepto Jueves</p>
                    <hr>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ab9ByDjg9FE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="entrada__imagen">
                    <picture>                      
                        <img loading="lazy" src="../Static/img/3.jpg" alt="imagen blog"> 
                    </picture>
                </div>
            </article> 
        </div>
    </div>

<?php  include '../includes/footer.php'?>    
