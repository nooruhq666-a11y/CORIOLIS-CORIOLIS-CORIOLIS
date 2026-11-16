<?php
$prenom = $_POST['prenom'] ?? '';
$nom = $_POST['nom'] ?? '';
$identifiant = $_POST['identifiant'] ?? '';
$etablissement = $_POST['etablissement'] ?? '';

// Extraire le nom court de l'établissement : "CA Alpes Provence" → "Alpes Provence"
$etablissementCourt = trim(str_replace('CA ', '', $etablissement));

$data = [
    'prenom' => $prenom,
    'nom' => $nom,
    'identifiant' => $identifiant,
    'etablissement' => $etablissementCourt
];

file_put_contents('donnees.json', json_encode($data));

echo 'OK';