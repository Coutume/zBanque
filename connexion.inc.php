<?php
$user = 'root'; // utilisateur de la base
$pwd = 'allan'; // mot de passe de l'utilisateur
$host = 'localhost'; // hôte de connexion
$dbname = 'ousse'; // nom de la base de données où enregistrer les données des banques

if (file_exists('connexion.priv.inc.php'))
    require 'connexion.priv.inc.php';
