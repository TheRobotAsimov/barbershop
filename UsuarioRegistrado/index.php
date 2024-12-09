<?php include '../Static/connect/db.php'; ?>
<?php include '../Static/connect/user.php'; ?>
<?php include '../includes/header.php' ?>

<article class="entrada">
    <div class="entrada_contenido">
        <h3>BARBERSHOP MÉXICO</h3>
        <?php echo "<p>Bienvenido $user</p>" ?>
        <hr>
        <h4>Reservaciones Aceptadas:</h4>
        <a href="create.php" class="enlace-minimalista mb-4">
          <img src="../Static/img/create.png" class="volver">
          <span>Nueva Reservación</span>
        </a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>Fecha y Hora</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = $_SESSION['id'];
                $query = "SELECT * FROM reservaciones WHERE idusuario = '$id'";
                $result_reservaciones = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result_reservaciones)) { ?>
                    <tr>
                        <td><?php
                            $query2 = "SELECT * FROM servicios WHERE idservicios = '" . $row['idservicio'] . "'";
                            $result_servicio = mysqli_query($conn, $query2);
                            $servicio = mysqli_fetch_array($result_servicio);
                            echo $servicio['nombre']." - $".$servicio['precio'];
                            ?></td>
                        <td><?php echo $row['fechahora'] ?></td>
                        <td><?php echo $row['telefono'] ?></td>
                        <td>
                            <div class="enlaces">
                                <a href="edit.php?id=<?php echo $row['idreservaciones']; ?>" class="enlace-minimalista">
                                    <img src="../Static/img/update.png" class="volver" alt="Update">
                                </a>
                                <a href="delete.php?id=<?php echo $row['idreservaciones']; ?>" class="enlace-minimalista">
                                    <img src="../Static/img/delete.png" class="volver" alt="Delete">
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="entrada__imagen">
        <picture>
            <img loading="lazy" src="../Static/img/3.jpg" alt="imagen blog">
        </picture>
    </div>
</article>
</div>
</div>

<a href="../Login/logout.php"><img src="../Static/img/logout.png" class="icon"></a>

<?php include '../includes/footer.php' ?>
