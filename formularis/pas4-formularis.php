<?php

$nom = '';
$correu = '';
$dia = '';
$errors = [];
$inscrit = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom    = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $dia    = trim($_POST['dia'] ?? '');

    if($nom === ''){
        $errors['nom'] = 'El nom és obligatori.';
    }

    if($correu === ''){
        $errors['correu'] = 'El correu és obligatori.';
    }

    elseif(filter_var($correu, filter_validate_email) === false){
        $errors['CORREU'] = 'Aquest correu no té un format vàlid';
    }

    if($dia !== 'divendres' && $dia !== 'dissabte'){
        $errors['dia'] = 'Has de triar un dia.';
    }

    // Si el count del array $errros es 0 es que no hay errores
    if(count($errors) === 0){
        
    }
}


?>