<?php
declare(strict_types=1);

/**
 * Mostra la capçalera de la botiga.
 *
 * @return void
 */
function capcalera(): void
{
    echo '<header><h1>BitBazar</h1><p>Material informàtic</p></header>';
}

/**
 * Mostra el peu de la botiga amb l'any actual.
 *
 * @return void
 */
function peu(): void
{
    echo '<footer>BitBazar · ' . date('Y') . '</footer>';
}

/**
 * Funció declarada però que NO es crida.
 *
 * @return void
 */
function senseCridar(): void
{
    echo 'Mai ho veuràs';
}
// Declarar una funció no l'executa: només existeix fins que algú la crida pel nom.
?>
<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>BitBazar</title><link rel="stylesheet" href="estils.css"></head><body>
<?php
capcalera();
peu();
peu();
peu();
?>
</body></html>
