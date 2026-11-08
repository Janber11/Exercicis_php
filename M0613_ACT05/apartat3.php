<?php
declare(strict_types=1);

/**
 * Mostra el preu amb IVA amb echo.
 *
 * @param float $base Preu sense IVA
 * @return void
 */
function preuAmbIvaEcho(float $base): void
{
    echo $base * 1.21;
}

/**
 * Torna el preu amb IVA.
 *
 * @param float $base Preu sense IVA
 * @return float
 */
function preuAmbIva(float $base): float
{
    return $base * 1.21;
}

/**
 * Formata un preu amb dos decimals i EUR.
 *
 * @param float $preu Preu a formatar
 * @return string
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<?php
$preus = [10.0, 20.0, 30.0];
$total = 0.0;
foreach ($preus as $p) {
    $total += preuAmbIva($p);
}
echo '<p>Total amb IVA: ' . formatPreu($total) . '</p>';
echo '<p>Preu més car amb IVA: ' . formatPreu(preuAmbIva(max($preus))) . '</p>';

// Amb preuAmbIvaEcho() no puc fer-ho: només escriu el valor per pantalla i no el torna,
// per tant no el puc sumar, comparar ni passar a formatPreu().
?>
</body></html>
