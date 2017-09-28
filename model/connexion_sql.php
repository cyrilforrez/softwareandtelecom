<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'root', 'DarkShot666');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
