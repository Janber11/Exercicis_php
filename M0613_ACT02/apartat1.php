<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Apartat 1</title></head>
<body>
<h1>Apartat 1</h1>

<h2>Exercici 1</h2>
<?php
$grups[0] = 'Txarango';
$grups[] = 'Mushkaa';
$grups[] = 'Oques Grasses';
$grups[8] = 'Julieta';
$grups[] = 'Figa Flawas';

$estils = array('Mestissatge', 'Pop urba', 'Rumba');
$edicions = range(2019, 2026);
$paraules = explode(' ', 'El festival torna aquest estiu');

// <pre> és una etiqueta HTML que mostra el text tal com està escrit
// (respecta espais i salts de línia). Així print_r es veu ordenat.
echo "<pre>";
print_r($grups);
print_r($estils);
print_r($edicions);
print_r($paraules);
echo "</pre>";

echo "<pre>";
print_r($estils);
var_dump($estils);
var_export($estils);
echo "</pre>";

// Diferència:
// print_r mostra només el contingut.
// var_dump mostra també el tipus i la mida de cada valor.
// var_export mostra el codi PHP per tornar a crear l'array.

// El grup següent no va a la 2 perquè [] posa l'element a l'últim
// índex + 1. L'últim era el 8, per tant va a la 9.
?>

<h2>Exercici 2</h2>
<?php
$estilsGrups = array('Txarango' => 'Mestissatge', 'Mushkaa' => 'Pop');
$estilsGrups['Julieta'] = 'Pop';
$estilsGrups['Figa Flawas'] = 'Pop urba';

echo "L'estil de Txarango és: " . $estilsGrups['Txarango'] . "<br>";

$estilsGrups['Oques Grasses'] = 'Rock';
echo "<pre>";
print_r($estilsGrups);
echo "</pre>";

echo "Nombre de grups: " . count($estilsGrups);
?>

<h2>Exercici 3</h2>
<?php
$cartell = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');
echo "Count: " . count($cartell);
echo "<pre>";
print_r($cartell);
echo "</pre>";

unset($cartell[2]);
echo "Count: " . count($cartell);
echo "<pre>";
print_r($cartell);
echo "</pre>";

$cartell[] = 'Rojals';
echo "<pre>";
print_r($cartell);
echo "</pre>";

// El grup nou ha anat a la posició 5 (l'últim índex era el 4).
// unset() no reordena els índexs.
// Un for de 0 a count()-1 pot fallar perquè ara els índexs són
// 0,1,3,4,5: l'índex 2 no existeix i no arribaria mai al 5.
?>
</body>
</html>
