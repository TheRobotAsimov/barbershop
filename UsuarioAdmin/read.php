<?php include '../Static/connect/db.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../Static/connect/user.php'; ?>

<div class="contenedor-principal">
    <article class="entrada_form">
        <div class="entrada_contenido">
            <h3>Servicios</h3>
            <div class="enlaces">
                <a href="../Static/excel.php" class="enlace-minimalista">
                    <img src="../Static/img/excel.webp" class="volver" alt="Excel">
                </a>
                <a href="../Static/reporte2.php" class="enlace-minimalista">
                    <img src="../Static/img/pdf2.png" class="volver" alt="PDF">
                </a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM servicios";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $rows['idservicios']; ?></td>
                            <td><?php echo $rows['nombre']; ?></td>
                            <td><?php echo $rows['precio']; ?></td>
                            <td>
                                <div class="enlaces">
                                    <a href="update.php?id=<?php echo $rows['idservicios']; ?>" class="enlace-minimalista">
                                        <img src="../Static/img/update.png" class="volver" alt="Update">
                                    </a>
                                    <a href="delete.php?id=<?php echo $rows['idservicios']; ?>" class="enlace-minimalista">
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
