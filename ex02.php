<?php
// Declaramos una constante IVA (no cambia de valor)
const IVA = 0.21;

$producte = 'Teclat';
$base = 70.90;
$estoc = 4;

// Funció predefinida per arrodonir
$total = round($base * (1 + IVA), 2);
?>

<h2><?= $producte ?></h2>
<p>Preu amb IVA: <?= $total ?> EUR</p>
<p>Disponibilitat: <?= $estoc ?></p>

$nom = 'Jan';
$edad = 19;
$direccio = 'Carrer de Gurrea, 38';


<h1> Nom: <?= $nom ?></h1>
<h2> Dades personals: </h2>
<h2> Edat: <?= $edad ?></h2>
<h2> Direcció: <?= $direccio ?></h2>


