<?php
declare(strict_types=1);

$botiga = 'BitBazar';

/**
 * Intenta usar una variable global sense rebre-la (dona warning a propòsit).
 *
 * @return string
 */
function mostra(): string
{
    return 'Som a ' . $botiga;
}

/**
 * Versió bona: el nom entra per paràmetre.
 *
 * @param string $nom Nom de la botiga
 * @return string
 */
function mostraBe(string $nom): string
{
    return "Som a $nom";
}

/**
 * Comptador amb variable local normal.
 *
 * @return int
 */
function comptaLocal(): int
{
    $n = 0;
    $n++;
    return $n;
}

/**
 * Comptador amb variable static.
 *
 * @return int
 */
function comptaStatic(): int
{
    static $n = 0;
    $n++;
    return $n;
}
// Warning al log: Warning: Undefined variable $botiga in .../apartat6.php on line 13
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<p><?= mostra() ?></p>
<p><?= mostraBe($botiga) ?></p>
<p>Local: <?= comptaLocal() ?>, <?= comptaLocal() ?>, <?= comptaLocal() ?></p>
<p>Static: <?= comptaStatic() ?>, <?= comptaStatic() ?>, <?= comptaStatic() ?></p>
<?php
// Local dona 1,1,1 perquè la variable es crea de nou a cada crida.
// Static dona 1,2,3 perquè recorda el seu valor entre crides.
?>
</body></html>
