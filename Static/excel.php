<?php include '../Static/connect/db.php';?>
<?php
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment; filename="test.xls"');            
?>
<h1>Consultar servicios y Precios</h1>

<p><b>TOTAL DE SERVICIOS: 
<?php
    $query = "SELECT count(*) FROM servicios";
    $resultado= mysqli_query($conn,$query);
    $row = mysqli_fetch_array($resultado);
    echo $row['count(*)'];
?>
</b></p>

<table class="table table-striped table-dark">
<thead>
<tr>
    <td>ID</td><td>SERVICIO</td><td>COSTO</td>
</tr>
</thead>
<?php 
       $consulta = "SELECT *FROM servicios;";
       $result = mysqli_query($conn,$consulta);
       while($row = mysqli_fetch_array($result)){?>
        <tr>
             <td><?php echo $row['idservicios'];?></td>
             <td><?php echo $row['nombre'];?></td>
             <td><?php echo $row['precio'];?></td>
        </tr>      
    <?php } ?> 

    <tr>
        <td></td>
        <td><b>Total</b></td>
        <td>
            <b>
            <?php
                $query = "SELECT sum(precio) FROM servicios";
                $resultado= mysqli_query($conn,$query);
                $row = mysqli_fetch_array($resultado);
                echo $row['sum(precio)'];
            ?>
            </b>
        </td>
    </tr>
    
</table>
