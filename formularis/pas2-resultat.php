<?php

// echo "<hola, " .$POST['nom']. "</p>";

// trim para sacar los espacios en blanco y inicializar variable si viene vacia
$nom    = trim($_POST['nom'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$dia    = trim($_POST['dia'] ?? '');

echo "<p>Hola, " .$nom. "</p>";