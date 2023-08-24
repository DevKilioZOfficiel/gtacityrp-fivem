<?php

function base_url($path = '') {
    // Inclure le fichier de configuration si ce n'est pas déjà fait
    include_once('app/config/app.php');

    // Concaténer le chemin avec la base URL
    return BASE_URL . $path;
}