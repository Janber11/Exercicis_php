<?php
/*
nom = 'Aina'; // Falta el $ en la variable
$assignatura = 'Desenvolupament web' // Falta ;

$nota1 = 7;
$nota2 = 9;
$mitjana = $nota1 + $nota2 / 2; // $nota1 i $nota2 tiene que ir entre ()

echo '<h1>Bulleti de notes</h1>';
echo '<p>Alumna: $nom</p>'; // Se tiene que hacer con doble comilla para que salga el valor de $nom
echo '<p>Assignatura: ' + $assignatura + '</p>'; // Se concatena con . no con +

echo "<p>Mitjana: $mitjana</p>;""" // Faltan las " porque no están alli arriba

echo '<p>Generat el ' . date('d/m/Y') . '</p>'; //tiene que ir con ()'dd/mm/yyyy')*/
$nom = 'Aina'; // Falta el $ en la variable
$assignatura = 'Desenvolupament web' // Falta ;

$nota1 = 7;
$nota2 = 9;
$mitjana = ($nota1 + $nota2) / 2; // $nota1 i $nota2 tiene que ir entre ()

echo '<h1>Bulleti de notes</h1>';
echo "<p>Alumna: $nom</p>"; // Se tiene que hacer con doble comilla para que salga el valor de $nom
echo '<p>Assignatura: ' . $assignatura . '</p>'; // Se concatena con . no con +

echo "<p>Mitjana: $mitjana</p>;" // Faltan las " porque no están alli arriba

echo '<p>Generat el ' . date('d/m/Y') . '</p>'; //tiene que ir con ()'dd/mm/yyyy')