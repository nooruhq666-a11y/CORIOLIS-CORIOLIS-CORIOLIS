<?php
header('Content-Type: application/json');
if (file_exists('donnees.json')) {
    echo file_get_contents('donnees.json');
} else {
    echo json_encode([
        'prenom' => 'Firstname',
        'nom' => 'LASTNAME',
        'identifiant' => '560·····834',
        'etablissement' => 'Etablissement'
    ]);
}