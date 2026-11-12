<?php
require_once 'config.php';

$titolPagina = 'Crea el teu compte';
require 'header.php';
?>

        <h2>Crea el teu compte</h2>

        <form action="processa.php" method="post">
            <p><label>Nom <input type="text" name="nom"></label></p>
            <p><label>Cognoms <input type="text" name="cognoms"></label></p>
            <p><label>Correu electrònic <input type="email" name="correu"></label></p>
            <p><label>Nom d'usuari (mínim <?= MIN_USUARI ?> caràcters) <input type="text" name="usuari"></label></p>
            <p><label>Clau (mínim <?= MIN_CLAU ?> caràcters) <input type="password" name="clau"></label></p>
            <p><label>Data de naixement <input type="date" name="naixement"></label></p>
            <p><label>Codi postal <input type="text" name="cp"></label></p>
            <p>
                <label>Com ens has conegut
                    <select name="origen">
                        <option value="Amics">Amics</option>
                        <option value="Xarxes">Xarxes socials</option>
                        <option value="Altres">Altres</option>
                    </select>
                </label>
            </p>
            <p><label><input type="checkbox" name="condicions"> Accepto les condicions</label></p>
            <button type="submit">Registrar-me</button>
        </form>

<?php
require 'footer.php';
