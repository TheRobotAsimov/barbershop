<?php
	include 'plantilla.php';
	include "./connect/db.php";
	$pdf = new PDF('P','mm','letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$query = "SELECT count(*) FROM servicios";
	$resultado= mysqli_query($conn,$query);
	$row = mysqli_fetch_array($resultado);
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);

	$pdf->Cell(65,10,'Total de servicios',1,0,'C',true);
	$pdf->Cell(65,10,$row['count(*)'],1,0,'C',true);
	$pdf->Ln(20);

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	?>

<?php
		$pdf->Cell(65,10,'ID',1,0,'C',true);
		$pdf->Cell(65,10,'NOMBRE',1,0,'C',true);
		$pdf->Cell(65,10,'PRECIO',1,0,'C',true);	     
		?>

<?php			   
	$query = "SELECT idservicios, nombre, precio FROM servicios;"; 
	$resultado= mysqli_query($conn,$query);
	$pdf->SetFont('Arial','',12);
	while($row = mysqli_fetch_array($resultado))
	{
		         $pdf->Ln(10);
				 $pdf->Cell(65,10,$row['idservicios'],1,0,'C');				 
				 $pdf->Cell(65,10,$row['nombre'],1,0,'C');			
		         $pdf->Cell(65,10,$row['precio'],1,0,'C');				
	}
	
	$pdf->Ln(10);

	$query = "SELECT sum(precio) FROM servicios";

	$resultado= mysqli_query($conn,$query);
	$row = mysqli_fetch_array($resultado);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(65,10,'',1,0,'C',true);
	$pdf->Cell(65,10,'Total',1,0,'C',true);
	$pdf->Cell(65,10,$row['sum(precio)'],1,0,'C',true);

	$pdf->Output();
?>