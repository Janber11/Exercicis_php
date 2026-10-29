<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Apartat 3</title></head>
<body>
<h1>Apartat 3</h1>

<h2>Exercici 1</h2>
<?php
$cartell = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');

if (in_array('Mushkaa', $cartell, true)) {
    echo "Mushkaa és al cartell.<br>";
} else {
    echo "Mushkaa no és al cartell.<br>";
}

if (in_array('Els Pets', $cartell, true)) {
    echo "Els Pets són al cartell.<br>";
} else {
    echo "Els Pets no són al cartell.<br>";
}

function buscaGrup(array $llista, string $grup) {
    foreach ($llista as $posicio => $valor) {
        if ($valor == $grup) {
            return $posicio;
        }
    }
    return -1;
}

echo "Julieta: " . buscaGrup($cartell, 'Julieta') . "<br>";
echo "Els Pets: " . buscaGrup($cartell, 'Els Pets') . "<br>";
?>

<h2>Exercici 2</h2>
<?php
$assistents = array(
    'Txarango' => 5100,
    'Mushkaa' => 1850,
    'Oques Grasses' => 4200,
    'Julieta' => 2100,
    'Figa Flawas' => 3600
);

$c1 = $assistents;
$c2 = $assistents;
$c3 = $assistents;
$c4 = $assistents;

asort($c1);
arsort($c2);
ksort($c3);
krsort($c4);

echo "<h3>asort</h3><pre>";
print_r($c1);
echo "</pre>";
echo "<h3>arsort</h3><pre>";
print_r($c2);
echo "</pre>";
echo "<h3>ksort</h3><pre>";
print_r($c3);
echo "</pre>";
echo "<h3>krsort</h3><pre>";
print_r($c4);
echo "</pre>";

// asort() ordena pel valor (els assistents).
// ksort() ordena per la clau (el nom del grup).
?>

<h2>Exercici 3</h2>
<?php
$barrejat = $assistents;
shuffle($barrejat);
echo "<pre>";
print_r($barrejat);
echo "</pre>";
// shuffle() ha perdut les claus: han desaparegut els noms dels grups
// i només queden els números amb índexs 0,1,2...

$noms = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');
shuffle($noms);
echo "<ol>";
foreach ($noms as $nom) {
    echo "<li>$nom</li>";
}
echo "</ol>";
?>
</body>
</html>
