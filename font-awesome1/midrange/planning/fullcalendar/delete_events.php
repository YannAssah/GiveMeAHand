<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16/01/14
 * Time: 17:13
 */

/* VALUES */
$id=$_POST['id'];
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];

// connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=midrange', 'midgrange', 'midgrangeprojetetna');
} catch(Exception $e) {
    exit('Impossible de se connecter à la base de données.');
}


$requete = "DELETE FROM evenement WHERE id='$id'";
$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

