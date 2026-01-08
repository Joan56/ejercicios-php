<?php

$estudiantes = [
	"Ana" => [8, 7, 9],
	"Luis" => [5, 6, 4],
	"Maria" => [10, 9, 10],
	"Carlos" => [6, 6, 6]
];

function calcularPromedio($notas) {
	$suma = array_sum($notas);
	$cantidad = count($notas);
	return $suma / $cantidad;
}

$aprobados = 0;
$suspendidos = 0;

$mejorPromedio = 0;
$mejorEstudiante = "";


foreach ($estudiantes as $nombre => $notas) {
	$promedio = calcularPromedio($notas);
	echo $nombre . ": " . $promedio . "\n";

if ($promedio >= 6) {	
	echo "El alumno $nombre con un promedio de $promedio esta aprobado\n";
	echo "------------------------------------------------------------\n";
	$aprobados++;

} else {
	echo "El alumno $nombre con un promedio de $promedio esta suspenso\n";
	echo "------------------------------------------------------------\n";
	$suspendidos++;
}
if ($promedio > $mejorPromedio) {
	$mejorPromedio = $promedio;
	$mejorEstudiante = $nombre;
}
}
echo "Total de Aprobados $aprobados\n";
echo "Total de suspendidos $suspendidos\n";

echo "------------------------------------------------------------------------\n";
echo "El estudiante con el promedio mas alto fue: $mejorEstudiante con $mejorPromedio\n";
