<?php
declare(strict_types=1);

/**
 * Calcula l'àrea d'un rectangle.
 *
 * @param float $base   Base
 * @param float $altura Altura
 * @return float
 */
function area(float $base, float $altura): float
{
    return $base * $altura;
}

/**
 * Indica si un producte està esgotat.
 *
 * @param int $unitats Unitats que queden
 * @return bool
 */
function esgotat(int $unitats): bool
{
    return $unitats === 0;
}
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<p>Decimals: <?= area(3.5, 4.5) ?></p>
<p>Enters: <?= area(3, 4) ?></p>
<p>Esgotat(0): <?= esgotat(0) ? 'sí' : 'no' ?></p>
<?php
try {
    echo area('3', 4.0);
} catch (TypeError $e) {
    echo '<p>Error de tipus: ' . $e->getMessage() . '</p>';
}
echo '<p>Convertit amb (float): ' . area((float) '3', 4.0) . '</p>';

// Millor que PHP avisi: així l'error es veu de seguida i no es converteixen
// dades en silenci, que podria amagar errors difícils de trobar.
?>
</body></html>
