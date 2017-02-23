<?php
	include ("funciones.php");
	require_once("../fpdf/fpdf.php");

	$alumnos = obtenerTodosLosAlumnos();

	$pdf = new FPDF();

	$pdf->AddPage();
	$pdf->SetFont("Arial", "B", 12);

	$hoy = date("d/m/y");
	$pdf->Cell(0, 10, $hoy, 0, 0, "R", 0);
	$pdf->Ln();

	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetTextColor(255);
	$pdf->SetDrawColor(128, 128, 128);

	$pdf->Cell(30, 8, "Nombre", 1, 0, "C", 1);
	$pdf->Cell(50, 8, "Apellidos", 1, 0, "C", 1);
	$pdf->Cell(30, 8, "Edad", 1, 0, "C", 1);
	$pdf->Cell(30, 8, "Curso", 1, 0, "C", 1);
	$pdf->Cell(20, 8, "Altura", 1, 0, "C", 1);
	$pdf->Cell(20, 8, "Sexo", 1, 1, "C", 1);

	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0);
	$pdf->SetFont("Arial", "", 10);

	foreach ($alumnos as $alumno)
	{
		$pdf->Cell(30, 8, utf8_decode($alumno["nombre"]), 1, 0, "C", 1);
		$pdf->Cell(50, 8, utf8_decode($alumno["apellidos"]), 1, 0, "C", 1);
		$pdf->Cell(30, 8, $alumno["edad"], 1, 0, "C", 1);
		$pdf->Cell(30, 8, utf8_decode($alumno["curso"]), 1, 0, "C", 1);
		$pdf->Cell(20, 8, $alumno["altura"], 1, 0, "C", 1);
		$pdf->Cell(20, 8, $alumno["sexo"], 1, 1, "C", 1);
	}

	$pdf->Output();
?>