<?php
// Aquesta constant no canvia mai: la vida màxima que pot tenir el personatge
const VIDA_MAXIMA = 100;

// Nom del personatge
$nom = 'Gollum';

// Classe del personatge (guerrer, mag, etc.)
$classe = 'Hobbit';

// Nivell actual del personatge
$nivell = 5;

// Vida actual (d'un màxim de 100, definit a la constant VIDA_MAXIMA)
$vidaActual = 75;

// Calculem quin percentatge de vida li queda
// Exemple: 75 vida actual de 100 màxima = 75%
$percentatgeVida = ($vidaActual / VIDA_MAXIMA) * 100;

// Comprovem si el personatge està ferit (té menys del 25% de vida)
$estaFerit = $percentatgeVida < 25;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Fitxa de personatge</title>
    <style>
        /* Fons fosc per a tota la pàgina */
        body {
            background: #222;
            color: white;
            font-family: Arial, sans-serif;
        }

        /* Bloc central on va tota la fitxa */
        .fitxa {
            background: #333;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="fitxa">

    <!-- Mostrem el nom fent servir cometes dobles (permeten posar la variable directament dins del text) -->
    <h1><?php echo "$nom"; ?></h1>

    <!-- Mostrem la classe i el nivell junts, també amb cometes dobles -->
    <p><?php echo "Classe: $classe - Nivell: $nivell"; ?></p>

    <!-- Mostrem la vida actual i la vida màxima -->
    <p><?php echo "Vida: $vidaActual / " . VIDA_MAXIMA; ?></p>

    <!-- Mostrem el percentatge de vida fent servir cometes simples i el punt (.) per unir text i variable -->
    <p><?php echo 'Percentatge de vida: ' . $percentatgeVida . '%'; ?></p>

    <!-- Barra visual de vida: l'amplada canvia segons el percentatge que hem calculat -->
    <div style="background: #ddd; width: 200px; height: 20px;">
        <div style="background: green; width: <?php echo $percentatgeVida; ?>%; height: 20px;"></div>
    </div>

    <!-- Si el personatge està ferit, mostrem un avís -->
    <?php if ($estaFerit) { ?>
        <p style="color: red;">Compte, el personatge està ferit!</p>
    <?php } ?>

</div>

</body>
</html>
