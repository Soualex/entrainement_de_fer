<?php
include("./include.php");
global $connexion;

session_unset(); //Détruit toutes les variables d'une session
session_destroy(); //Détruit la session
echo 'vous êtes déconnecté';
echo '<a href=accueil.php>Accueil</a>';