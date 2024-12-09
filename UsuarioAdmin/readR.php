<?php include '../Static/connect/db.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../Static/connect/user.php'; ?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3 class="mb-4">Reservaciones</h3>
            <!--
            <div class="enlaces">
                <a href="../Static/excel.php" class="enlace-minimalista">
                    <img src="../Static/img/excel.webp" class="volver" alt="Excel">
                </a>
                <a href="../Static/reporte2.php" class="enlace-minimalista">
                    <img src="../Static/img/pdf2.png" class="volver" alt="PDF">
                </a>
            </div>
            -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Servicio</th>
                        <th>Fecha y Hora</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM reservaciones";
                    $result_reservaciones = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_reservaciones)) {
                    ?>
                        <tr>
                            <td><?php
                                $query2 = "SELECT * FROM usuarios WHERE idusuario = '" . $row['idusuario'] . "'";
                                $result_usuario = mysqli_query($conn, $query2);
                                $usuario = mysqli_fetch_array($result_usuario);
                                echo $usuario['usuario'];
                                ?></td>
                            <td><?php
                                $query2 = "SELECT * FROM servicios WHERE idservicios = '" . $row['idservicio'] . "'";
                                $result_servicio = mysqli_query($conn, $query2);
                                $servicio = mysqli_fetch_array($result_servicio);
                                echo $servicio['nombre'];
                                ?></td>
                            <td><?php echo $row['fechahora'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>
                            <td><?php echo $row['estado'] ?></td>
                            <td>
                                <div class="enlaces">
                                    <a href="updateR.php?id=<?php echo $row['idreservaciones']; ?>" class="enlace-minimalista">
                                        <img src="../Static/img/update.png" class="volver" alt="Update">
                                    </a>
                                    <a href="deleteR.php?id=<?php echo $row['idreservaciones']; ?>" class="enlace-minimalista">
                                        <img src="../Static/img/delete.png" class="volver" alt="Delete">
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="admin.php" class="enlace-minimalista">
                <img src="../Static/img/flecha.png" class="volver">
            </a>
        </div>
    </article>
</div>
