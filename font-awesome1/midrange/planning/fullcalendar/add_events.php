<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16/01/14
 * Time: 16:50
 */
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];

// connexion à la base de données
 try {
     $bdd = new PDO('mysql:host=localhost;dbname=midrange', 'midgrange', 'midgrangeprojetetna');
 } catch(Exception $e) {
     exit('Impossible de se connecter à la base de données.');
 }

$sql = "INSERT INTO evenement (title, start, end) VALUES (:title, :start, :end)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end));
?>