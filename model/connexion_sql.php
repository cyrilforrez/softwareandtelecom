<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=softwareandtelecom;charset=utf8', '', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
