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
 * Calcula el preu amb IVA.
 *
 * @param float $base Preu sense IVA
 * @param float $iva  Tipus d'IVA (per defecte 0.21)
 * @return float
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}

/**
 * Formata un preu a l'estil català: 1.234,50 EUR.
 *
 * @param float $preu Preu a formatar
 * @return string
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

/**
 * Estat de l'estoc d'un producte.
 *
 * @param int $estoc Unitats que queden
 * @return string
 */
function estatEstoc(int $estoc): string
{
    if ($estoc === 0) {
        return 'Esgotat';
    }
    if ($estoc <= 3) {
        return 'Últimes unitats';
    }
    return 'Disponible';
}

/**
 * Productes d'una categoria ('totes' torna el catàleg sencer).
 *
 * @param array  $productes Catàleg
 * @param string $categoria Categoria o 'totes'
 * @return array
 */
function filtraCategoria(array $productes, string $categoria): array
{
    if ($categoria === 'totes') {
        return $productes;
    }
    $res = [];
    foreach ($productes as $item) {
        if ($item['categoria'] === $categoria) {
            $res[] = $item;
        }
    }
    return $res;
}

/**
 * Resum del catàleg.
 *
 * @param array $productes Catàleg
 * @return array Claus: total, disponibles, esgotats, valor_estoc
 */
function resumCataleg(array $productes): array
{
    $resum = ['total' => count($productes), 'disponibles' => 0, 'esgotats' => 0, 'valor_estoc' => 0.0];
    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $resum['disponibles']++;
        } else {
            $resum['esgotats']++;
        }
        $resum['valor_estoc'] += $item['preu'] * $item['estoc'];
    }
    $resum['valor_estoc'] = round($resum['valor_estoc'], 2);
    return $resum;
}

/**
 * Escriu l'HTML de la targeta d'un producte.
 *
 * @param array $producte Un producte del catàleg
 * @return void
 */
function pintaTargeta(array $producte): void
{
    echo '<div class="targeta">';
    echo '<h3>' . htmlspecialchars($producte['nom']) . '</h3>';
    echo '<p>' . formatPreu(preuAmbIva($producte['preu'])) . ' (IVA inclòs)</p>';
    echo '<p>' . estatEstoc($producte['estoc']) . '</p>';
    echo '</div>';
}

/**
 * Escriu la graella de productes (o un missatge si no n'hi ha).
 *
 * @param array $productes Productes a mostrar
 * @return void
 */
function pintaGraella(array $productes): void
{
    if (count($productes) === 0) {
        echo '<p class="missatge">No hi ha productes en aquesta categoria.</p>';
        return;
    }
    echo '<div class="graella">';
    foreach ($productes as $producte) {
        pintaTargeta($producte);
    }
    echo '</div>';
}
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<header><h1>BitBazar</h1><p>El catàleg</p></header>

<h2>Resum</h2>
<ul>
<?php foreach (resumCataleg($productes) as $clau => $valor): ?>
    <li><?= $clau ?>: <?= $clau === 'valor_estoc' ? formatPreu($valor) : $valor ?></li>
<?php endforeach; ?>
</ul>

<h2>Tots els productes</h2>
<?php pintaGraella(filtraCategoria($productes, 'totes')); ?>

<h2>Només accessoris</h2>
<?php pintaGraella(filtraCategoria($productes, 'accessoris')); ?>

<h2>Categoria que no existeix</h2>
<?php pintaGraella(filtraCategoria($productes, 'impressores')); ?>
</body></html>
