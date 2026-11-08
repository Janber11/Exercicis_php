<?php
declare(strict_types=1);

$productes = [
    ['nom' => 'Teclat mecanic RGB', 'categoria' => 'teclats', 'preu' => 79.90, 'estoc' => 4],
    ['nom' => 'Ratoli vertical', 'categoria' => 'ratolins', 'preu' => 29.95, 'estoc' => 7],
    ['nom' => 'Monitor 27" QHD', 'categoria' => 'monitors', 'preu' => 289.00, 'estoc' => 0],
    ['nom' => 'Auriculars ANC', 'categoria' => 'audio', 'preu' => 129.00, 'estoc' => 2],
    ['nom' => 'Hub USB-C 7 en 1', 'categoria' => 'accessoris', 'preu' => 34.90, 'estoc' => 20],
    ['nom' => 'Suport per a portatil', 'categoria' => 'accessoris', 'preu' => 24.50, 'estoc' => 0],
];

/**
 * Suma preu per unitats de tots els productes.
 *
 * @param array $productes Catàleg
 * @return float
 */
function valorEstoc(array $productes): float
{
    $total = 0.0;
    foreach ($productes as $item) {
        $total += $item['preu'] * $item['estoc'];
    }
    return round($total, 2);
}

/**
 * Compta els productes amb estoc zero.
 *
 * @param array $productes Catàleg
 * @return int
 */
function quantsEsgotats(array $productes): int
{
    $n = 0;
    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $n++;
        }
    }
    return $n;
}

/**
 * Preu mitjà (0 si l'array és buit).
 *
 * @param array $productes Catàleg
 * @return float
 */
function preuMitja(array $productes): float
{
    if (count($productes) === 0) {
        return 0.0;
    }
    $suma = 0.0;
    foreach ($productes as $item) {
        $suma += $item['preu'];
    }
    return round($suma / count($productes), 2);
}

/**
 * Només els productes amb estoc.
 *
 * @param array $productes Catàleg
 * @return array
 */
function nomesDisponibles(array $productes): array
{
    $res = [];
    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $res[] = $item;
        }
    }
    return $res;
}

/**
 * El producte amb el preu més alt.
 *
 * @param array $productes Catàleg
 * @return array
 */
function elMesCar(array $productes): array
{
    $car = $productes[0];
    foreach ($productes as $item) {
        if ($item['preu'] > $car['preu']) {
            $car = $item;
        }
    }
    return $car;
}

/**
 * Resum del catàleg.
 *
 * @param array $productes Catàleg
 * @return array Claus: total, disponibles, mes_car
 */
function resumCataleg(array $productes): array
{
    return [
        'total' => count($productes),
        'disponibles' => count(nomesDisponibles($productes)),
        'mes_car' => elMesCar($productes)['nom'],
    ];
}
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<p>Valor estoc: <?= valorEstoc($productes) ?></p>
<p>Esgotats: <?= quantsEsgotats($productes) ?></p>
<p>Preu mitjà: <?= preuMitja($productes) ?></p>
<p>Preu mitjà d'un array buit: <?= preuMitja([]) ?></p>
<ul>
<?php foreach (resumCataleg($productes) as $clau => $valor): ?>
    <li><?= $clau ?>: <?= $valor ?></li>
<?php endforeach; ?>
</ul>
</body></html>
