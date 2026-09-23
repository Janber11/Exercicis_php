<?php
// Definicions de constants amb const o define()
define('BOTIGA', 'Tienda Online CHACHI');
const IVA = 21;
const MONEDA = 'Pesetas';
define('DESCOMPTE_SOCI', 10); // Descompte en percentatge (%)

// Altres dades del producte (variables)
$slogan_botiga = "Esto es una tienda online guay";
$titol_producte = "Camiseta chachi";
$descripcio = "Camiseta Epstein";
$preu_base = 99.99;
$stock = 5;
$referencia = "CAP-12345789";
$text_footer = "Footer chachi L.S";

// Càlculs automàtics usant les constants
$import_iva = $preu_base * (IVA / 100);
$total = $preu_base + $import_iva;
$total_soci = $total * (1 - (DESCOMPTE_SOCI / 100));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1><?= BOTIGA ?></h1>
        <p><?= $slogan_botiga ?></p>
    </header>

    <main>
        <article class="producte">

            <h2><?= $titol_producte ?></h2>
            <p class="descripcio"><?= $descripcio ?></p>
            
            <!-- Ús de number_format() per personalitzar el format de preu -->
            <p class="preu">Preu sense IVA: <?= number_format($preu_base, 2, ',', '.') ?> <?= MONEDA ?></p>
            <p class="preu">IVA (<?= IVA ?>%): <?= number_format($import_iva, 2, ',', '.') ?> <?= MONEDA ?></p>

            /* Dona l'error Fatal ERROR: Cannot redeclare constant IVA in ... line 48 */
            <?php const IVA = 4; ?>
            
            
            <p class="total">TOTAL: <?= number_format($total, 2, ',', '.') ?> <?= MONEDA ?></p>
            <p class="descompte">Preu Soci (-<?= DESCOMPTE_SOCI ?>%): <?= number_format($total_soci, 2, ',', '.') ?> <?= MONEDA ?></p>

            <p class="stock">Unitats disponibles: <?= $stock ?></p>
            <p class="ref"><?= $referencia ?></p>

        </article>
    </main>

    <footer>
        <p><?= $text_footer ?></p>
    </footer>
</body>
</html>