<?php
/*

Decidir entre if, elseif i else.

S'ha de tenir en compte que l'ordre importa, ja que php llegeix d'adalt a avaix, per el que es necessita que el més important estigui adalt, i que tingue tres ===

Sintaxi alternativa dins de l'<HTML:
<?php if ($stock > 0): =>
    <p>En stock</p>
<?php else: =>
    <p>Esgotat</p>
<?php endif; ?>

foreach es para recorrer arrays


                Now SWITCH vs MATCH:                        
switch ($zona) {
    case 'local':
        $enviament = 0;
        break;
    case 'peninsula':
        $enviamnet  = 4.95;
        break;
    default:
        $enviament = 9.95;
}

$enviament = match ($zona) {
    'local'     => 0,
    'peninsula  => 4.95,
    default     => 9.95,

};

<table>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr>
            <td><? $i ?> x 7</td>
            <td><? $i  * 7?></td>
        </tr>
    <?php endfor; ?>
</table>

                ARRAYS
$colors = ['vermell', 'verd', 'blau'];
echo count($colors); // 3

$colors[] = 'groc'; // Afegeig el groc al final

print_r($colors); // veure l'array senser mentre depures, amb <pre> es llegeix mitllor

                ARRAYS associatius
$producte = [
    'nom'   => 'Teclat mecanic',
    'preu'  => 79.90,
    'stock' => 4,
];

echo $producte['nom'];
$producte['preu'] = 69.90;

foreach ($colors as $color) {
        echo "<li>$color</li>";
}

$productes = [
        ['nom' => 'Teclat',     'preu' => 79.9],
        ['nom' => 'Ratoli',     'preu' => 24.5],
        ['nom' => 'Monitor',    'preu' => 189],
];

<?php foreach ($productes as $p) : ?>
    <tr>
        <td><?= $p['nom'] ?></td>
        <td><?= $p['preu'] ?> EUR</td>
    </tr>
<?php endforeach; ?>

count($a)
in_array($x, $a, true) si un valor está te lo dice
array_key_exists('k', $a) si una clau existeix
sort / rsort / asort    ordena per valor o per clau
array_sum /  max / min  suma, max i minim
array_column ($a, 'k')  treu columna d'array d'arrays
implode (',', $a) / explode array a text i text a array

*/