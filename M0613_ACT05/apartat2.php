<?php
declare(strict_types=1);

/**
 * Mostra un missatge de benvinguda.
 *
 * @param string $nom Nom de la persona
 * @return void
 */
function saluda(string $nom): void
{
    echo "<p>Benvingut/da, $nom!</p>";
}

/**
 * Mostra la fitxa d'un producte.
 *
 * @param string $nom   Nom del producte
 * @param float  $preu  Preu sense IVA
 * @param int    $estoc Unitats disponibles
 * @return void
 */
function targeta(string $nom, float $preu, int $estoc): void
{
    echo '<div class="targeta">';
    echo "<h3>$nom</h3>";
    echo '<p>' . number_format($preu, 2, ',', '.') . " EUR · $estoc unitats</p>";
    echo '</div>';
}
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<?php
saluda('Anna');
saluda('Pau');
saluda('Marta');
?>
<div class="graella">
<?php
targeta('Teclat mecanic', 79.90, 4);
targeta('Ratoli vertical', 29.95, 7);
targeta('Hub USB-C', 34.90, 20);
?>
</div>
<?php
// Exercici 3: si poso el preu on va el nom, amb strict_types PHP llança un TypeError
// perquè un float no és un string. Els arguments van per ordre i amb el tipus exacte.
try {
    targeta(79.90, 'Teclat', 4);
} catch (TypeError $e) {
    echo '<p>Error de tipus: ' . $e->getMessage() . '</p>';
}
// Ja ho he tornat a deixar bé (les crides de dalt són les correctes).
?>
</body></html>
