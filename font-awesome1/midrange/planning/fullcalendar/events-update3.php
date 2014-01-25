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

$sql = "UPDATE evenement3 SET title=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id));

?>