<?php

$password_en_clair = "motdepasse";

// Affichage du mot de passe crypté.
$encrypted = password_hash($password_en_clair, PASSWORD_ARGON2I);

echo $encrypted;
// Exemple de véric-fication d'un mot de passe.
if(password_verify($password_en_clair, $encrypted)) {
    // Les mots de passe correspondent, on peut par exemple enregistrer toutes les informations de l'utilisateur en session.
}