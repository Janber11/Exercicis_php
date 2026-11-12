<?php
require_once 'config.php';
require_once 'funcions.php';

// Accés directe (sense passar pel formulari)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    $titolPagina = 'Acces directe';
    require 'header.php';

    echo '<h2>Aqui no s\'hi arriba directament</h2>';
    echo '<a class="tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';

    require 'footer.php';
    exit;
}

// Recollir les dades
$usuari = [
    'nom'       => camp('nom'),
    'cognoms'   => camp('cognoms'),
    'correu'    => camp('correu'),
    'usuari'    => camp('usuari'),
    'naixement' => camp('naixement'),
    'cp'        => camp('cp'),
    'origen'    => camp('origen', 'no ho ha dit'),
];
$clau     = camp('clau');
$condicions = isset($_POST['condicions']);

// Validar
$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}
if (!filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'El correu no és vàlid.';
}
if (strlen($usuari['usuari']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari ha de tenir mínim ' . MIN_USUARI . ' caràcters.';
}
if (strlen($clau) < MIN_CLAU) {
    $errors[] = 'La clau ha de tenir mínim ' . MIN_CLAU . ' caràcters.';
}
if (!$condicions) {
    $errors[] = 'Has d\'acceptar les condicions.';
}

// El títol s'ha de calcular ABANS del header
$titolPagina = count($errors) > 0
    ? 'No s\'ha creat el compte'
    : 'Compte creat';

require 'header.php';
?>

    <?php if (count($errors) > 0): ?>

        <h2>Hi ha errors</h2>
        <ul class="errors">
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
        <a class="tornar" href="<?= PAG_FORMULARI ?>">Tornar al formulari</a>

    <?php else: ?>

        <h2>Resum del registre</h2>
        <table>
            <?php foreach ($usuari as $clauCamp => $valor): ?>
                <tr>
                    <th><?= etiqueta($clauCamp) ?></th>
                    <td><?= htmlspecialchars($valor) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a class="tornar" href="gracies.php">Continuar</a>

    <?php endif; ?>

<?php
require 'footer.php';
