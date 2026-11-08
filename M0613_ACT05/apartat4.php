<?php
declare(strict_types=1);

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
 * Aplica un descompte a un preu.
 *
 * @param float $preu       Preu original
 * @param int   $percentatge Descompte en % (per defecte 10)
 * @return float
 */
function aplicaDescompte(float $preu, int $percentatge = 10): float
{
    return round($preu * (1 - $percentatge / 100), 2);
}

/**
 * Torna una benvinguda.
 *
 * @param string $nom       Nom de la persona
 * @param string $salutacio Salutació (per defecte 'Hola')
 * @return string
 */
function benvinguda(string $nom, string $salutacio = 'Hola'): string
{
    return "$salutacio, $nom!";
}

// Exercici 3: si poso el paràmetre opcional el primer, PHP dona un avís (Deprecated):
// "Optional parameter declared before required parameter is implicitly treated as a required parameter".
// L'he tornat a deixar bé: els paràmetres amb valor per defecte van al final.
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<p>Sense IVA indicat: <?= preuAmbIva(100) ?></p>
<p>Amb 0.10: <?= preuAmbIva(100, 0.10) ?></p>
<p>Amb 0.04: <?= preuAmbIva(100, 0.04) ?></p>
<p>Descompte per defecte: <?= aplicaDescompte(200) ?></p>
<p>Descompte del 25%: <?= aplicaDescompte(200, 25) ?></p>
<p><?= benvinguda('Anna') ?> / <?= benvinguda('Anna', 'Bon dia') ?></p>
</body></html>
