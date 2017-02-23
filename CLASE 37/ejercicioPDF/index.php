<?php
	require_once("../fpdf/fpdf.php");

	/* P: Portrait o L: Landscape (apaisado), unidad de medida y tipo de página */
	$pdf = new FPDF("P", "mm", "A4");
	$pdf->AddPage();

	// Fuente, tipo (negrita, cursiva, etc) y tamaño. Todas las medidas son en milímetros.
	$pdf->SetFont("Helvetica", "B", 16);

	// $pdf->Write(altura en milímetros, texto, hipervinculo)
	$pdf->Write(10, "Mi Primer texto");

	/* Salto de línea */
	$pdf->Ln();

	$pdf->Write(50, "Mi segundo texto", "http://www.google.es");

	$pdf->Ln();

	/* Crear una celda */

	/* Color de relleno, en formato RGB */
	$pdf->SetFillColor(0, 0, 255);

	/* Color de relleno, en escala de grises */
	$pdf->SetTextColor(255);

	/* Color de los bordes, en formato RGB */
	$pdf->SetDrawColor(0, 0, 200);	

	/* Ancho, alto, texto, borde (1 para que tenga borde), donde escribir (0 derecha, 1 línea siguiente y 2 si es seguido), alineacion (L, R, C: Izquierda, Derecha, Centrado), si tiene relleno y enlace en caso de que tenga */
	$pdf->Cell(50, 10, "Texto de celda", 1, 1, "C", 1);

	/* Para especificar donde empieza a pintar. Para poner un texto o una imagen donde queramos */
	// $pdf->SetX(100);
	// $pdf->SetY(100);

	/* o bien */
	$pdf->SetXY(100, 100);
	$pdf->SetTextColor(0);
	$pdf->Write(2, "Mi tercer texto");

	/* Url de la imagen*/
	$pdf->Image("logo.jpg", 50, 120, 100, 100, "JPG");

	// Aquí introducimos lo que queramos que salga

	$pdf->Output();
?>