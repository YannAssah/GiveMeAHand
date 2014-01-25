<?php

try {
$bdd = new mysqli("localhost", "root", "oVfw*h6.x", "gmh");
}
catch (Exception $e)
{
        die('Erreur :'. $e->getMessage());
}



$nom=htmlspecialchars(trim($_POST['user_name']));

$prenom=htmlspecialchars(trim($_POST['user_firstname']));

$email = htmlspecialchars(trim($_POST['user_mail']));

$password = htmlspecialchars(trim($_POST['user_password']));

$sexe = htmlspecialchars(trim($_POST['user_sexe']));

$date = $_POST['user_birth'];

$creation = date('d/m/Y');

if(isset($nom) && !empty($nom)){

$requet = "INSERT INTO user (user_name,user_firstname,user_mail,user_password,user_sexe,user_birth,user_date_creation) VALUES ('$nom', '$prenom', '$email', '$password', '$sexe', '$date', '$creation')";
var_dump($requet);

$reponse = $bdd->query($requet);
var_dump($reponse);
echo "Inscription réussi!";
}
else{
echo "Erreur d'inscription ! ";
}
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}
else {
  echo "<br>Connexion a la base de donnee reussi<br>";
}

?>
