<?php
// Si no s'arriba des del formulari, no hi ha dades
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Has d\'arribar aqui des del formulari. ';
    echo '<a href="registre.html">Torna-hi</a></p>';
    exit;
}

// ---------- Apartat 4: les dades en un array associatiu ----------
$usuari = [
    'nom'        => trim($_POST['nom'] ?? ''),
    'cognoms'    => trim($_POST['cognoms'] ?? ''),
    'naixement'  => trim($_POST['naixement'] ?? ''),
    'telefon'    => trim($_POST['telefon'] ?? ''),
    'correu'     => trim($_POST['correu'] ?? ''),
    'usuari'     => trim($_POST['usuari'] ?? ''),
    'carrer'     => trim($_POST['carrer'] ?? ''),
    'poblacio'   => trim($_POST['poblacio'] ?? ''),
    'cp'         => trim($_POST['cp'] ?? ''),
    'tipus'      => trim($_POST['tipus'] ?? ''),
    'origen'     => trim($_POST['origen'] ?? ''),
    'butlleti'   => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

// Les contrasenyes van a part (no es mostren mai)
$clau  = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';

// Compta quants camps han quedat buits
function campsBuits($dades) {
    $total = 0;
    foreach ($dades as $i) {
        if ($valor === '') {
            $total++;
        }
    }
    return $total;
}

// ---------- Apartat 5: validació ----------
$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}

if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms són obligatoris.';
}

if ($usuari['correu'] === '') {
    $errors[] = 'El correu és obligatori.';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no té un format valid.';
}

if (strlen($usuari['usuari']) < 4) {
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim 4 caràcters.';
}

if (strlen($clau) < 6) {
    $errors[] = 'La contrasenya ha de tenir com a mínim 6 caràcters.';
}

if ($clau !== $clau2) {
    $errors[] = 'Les dues contrasenyes no coincideixen.';
}

if ($usuari['cp'] !== '' && !preg_match('/^[0-9]{5}$/', $usuari['cp'])) {
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

if ($usuari['tipus'] === '') {
    $errors[] = 'Has de triar un tipus de client.';
}

if (!isset($_POST['condicions'])) {
    $errors[] = 'Has d\'acceptar les condicions del servei.';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>BitBazar · Resultat</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php if (count($errors) > 0): ?> 

    <div class="errors">
        <h2>No s'ha pogut crear el compte</h2>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <p><a href="registre.html">Torna al formulari</a></p>
    </div>

<?php else: ?>

    <h1>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h1>
    <p>Hem registrat el teu compte amb el correu
        <strong><?= htmlspecialchars($usuari['correu']) ?></strong>.</p>

    <table>
        <?php foreach ($usuari as $camp => $valor): ?>
            <tr>
                <th><?= htmlspecialchars(etiqueta($camp)) ?></th>
                <td><?= htmlspecialchars($valor) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Camps que has deixat buits: <?= campsBuits($usuari) ?></p>

<?php endif; ?>
            <?php
            echo " <p> $value <p>  "?>
</body>
</html>
