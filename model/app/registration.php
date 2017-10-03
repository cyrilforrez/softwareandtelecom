<?php

$req = $bdd->prepare('INSERT INTO user (name, firstname, age, email, password)
VALUES(:name, :firstname, :age, :email, :password)');
$req->execute(array(
	'name' => $_POST['name'],
	'firstname' => $_POST['firstname'],
	'age' => $_POST['age'],
	'email' => $_POST['email'],
	'password' => $_POST['password']
	));
  header('Location:index.php');

  function get_connexion($email, $password)
  {
   global $bdd;

   $req = $bdd->prepare('SELECT * FROM administration WHERE email = :email AND password = :password' );
   $req->execute(array(
     'email' => $_POST["email"],
     'password' => $_POST['password']
   ));
   $connexions = $req -> fetchAll();
   return $connexions;
  }
  header('Location:controler/app/home.php');
?>
