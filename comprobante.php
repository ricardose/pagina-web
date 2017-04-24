<?php
	$rut = $_GET['rut'];
	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellidos'];
	$correo = $_GET['correo'];
	$telefono = $_GET['telefono'];
	$tarjeta = $_GET['tarjeta'];
	$ntarjeta = $_GET['ntarjeta'];

	require ('fpdf/fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 16);
	$pdf->Cell(80); # mover hacia la derecha
	$pdf->Cell(30, 10, 'Comprobante de compra', 0, 0, 'C');
	$pdf->Ln(20); # salto de linea
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(0, 10, 'RUT: ' . $rut, 0, 1);
	$pdf->Ln(1); # salto de linea
	$pdf->Cell(0, 10, 'Nombre: ' . $nombre, 0, 1);
	$pdf->Ln(1);
	$pdf->Cell(0, 10, 'Apellidos: ' . $apellidos, 0, 1);
	$pdf->Ln(1);
	$pdf->Cell(0, 10, 'Correo: ' . $correo, 0, 1);
	$pdf->Ln(1);
	$pdf->Cell(0, 10, 'Telefono: ' . $telefono, 0, 1);
	$pdf->Output();
?>
