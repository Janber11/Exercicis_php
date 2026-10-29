<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Apartat 4</title></head>
<body>
<h1>Apartat 4</h1>
<?php
$concerts = [
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0],
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0],
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0],
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0],
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0],
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0],
];

$escenaris = [
    'Gran' => [
        'capacitat' => 6000,
        'coberta'   => 'no',
        'ubicacio'  => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 2500,
        'coberta'   => 'sí',
        'ubicacio'  => 'Pavelló',
    ],
];
?>

<h2>Exercici 1</h2>
<table border="1">
    <tr><th>Nom</th><th>Escenari</th><th>Hora</th><th>Assistents</th><th>Preu</th></tr>
<?php foreach ($concerts as $c): ?>
    <tr>
        <td><?php echo $c['nom']; ?></td>
        <td><?php echo $c['escenari']; ?></td>
        <td><?php echo $c['hora']; ?></td>
        <td><?php echo $c['assistents']; ?></td>
        <td><?php echo number_format($c['preu'], 2); ?></td>
    </tr>
<?php endforeach; ?>
</table>
<p>Tercer concert: <?php echo $concerts[2]['nom']; ?></p>

<h2>Exercici 2</h2>
<p>Capacitat de Gran: <?php echo $escenaris['Gran']['capacitat']; ?></p>

<?php foreach ($escenaris as $nom => $dades): ?>
    <h3><?php echo $nom; ?></h3>
    <ul>
    <?php foreach ($dades as $camp => $valor): ?>
        <li><?php echo $camp . ": " . $valor; ?></li>
    <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
</body>
</html>
