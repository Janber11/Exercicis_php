<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Apartat 2</title></head>
<body>
<h1>Apartat 2</h1>
<?php
$grups = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');
$grupsEstils = array(
    'Txarango' => 'Mestissatge',
    'Mushkaa' => 'Pop',
    'Oques Grasses' => 'Rock',
    'Julieta' => 'Pop',
    'Figa Flawas' => 'Pop urba'
);
?>

<h2>Exercici 1</h2>
<ul>
<?php foreach ($grups as $grup): ?>
    <li><?php echo $grup; ?></li>
<?php endforeach; ?>
</ul>

<ul>
<?php foreach ($grups as $posicio => $grup): ?>
    <li><?php echo $posicio . ": " . $grup; ?></li>
<?php endforeach; ?>
</ul>

<h2>Exercici 2</h2>
<table border="1">
    <tr><th>Grup</th><th>Estil</th></tr>
<?php foreach ($grupsEstils as $grup => $estil): ?>
    <tr><td><?php echo $grup; ?></td><td><?php echo $estil; ?></td></tr>
<?php endforeach; ?>
    <tr><td>Total grups</td><td><?php echo count($grupsEstils); ?></td></tr>
</table>

<h2>Exercici 3</h2>
<table border="1">
    <tr><th>Grup</th><th>Estil</th></tr>
<?php
reset($grupsEstils);
do {
    $grup = key($grupsEstils);
    $estil = current($grupsEstils);
    echo "<tr><td>$grup</td><td>$estil</td></tr>";
} while (next($grupsEstils));
?>
    <tr><td>Total grups</td><td><?php echo count($grupsEstils); ?></td></tr>
</table>
<?php
// Em sembla més clar el foreach, perquè és més curt i no cal moure
// el punter a mà.
?>

<h2>Exercici 4</h2>
<?php
function recorrerInvers(array $llista) {
    end($llista);
    do {
        $clau = key($llista);
        $valor = current($llista);
        echo "$clau: $valor<br>";
    } while (prev($llista));
}

recorrerInvers($grups);
echo "<br>";
recorrerInvers($grupsEstils);
echo "<br>Array original:<br>";

foreach ($grupsEstils as $grup => $estil) {
    echo "$grup: $estil<br>";
}
// L'array original no canvia perquè la funció rep una còpia.
?>
</body>
</html>
