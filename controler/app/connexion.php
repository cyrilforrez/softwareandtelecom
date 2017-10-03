
<?php
include_once('view/app/registration.php');
include_once('model/connexion_sql.php');


if (isset($_POST["email"]) and isset($_POST["password"])) {
  $connexions = get_connexion($_POST["email"], $_POST["password"]);
    if (!$connexions) {
        header('Location:controler/app/home.php');
    } else {

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password']= $_POST['password'];

        header('Location:controler/app/home.php');
    }
}
