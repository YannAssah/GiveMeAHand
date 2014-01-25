<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <title>Midrange - Intranet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home.css" media="screen">
    <link rel="stylesheet" href="css/connect.css" media="screen">
    <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>

 <?php include_once("menu.php"); ?>

<?php

try {
	$link = mysqli_connect("localhost", "midgrange", "midgrangeprojetetna", "midrange");
}
	catch (Exception $e)
{
        die('Erreur :'. $e->getMessage());
}

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telf = $_POST['tel_f'];
$telm = $_POST['tel_m'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$services = $_POST['services'];
$message = $_POST['message'];
 
	
if(isset($nom) && isset($prenom) && isset($email) && isset($sujet)&& isset($services) && isset($message)){
 
if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($sujet) && !empty($services) && !empty($message)){
 
$requet = "INSERT INTO contact (nom,prenom,telf,telm,email,sujet,services,message) VALUES ('$nom', '$prenom', '$telf', '$telm', '$email','$sujet','$services','$message')";


//echo $requet;
$link->query($requet);
/*	   
		$dest = 'ghansumabdou@hotmail.fr'; 
		//$subject = "Test"; 
		$content = "Bonjour,\n"; 
		$content .= $message."\n"; 
		
		$headers = "From: $email"."\n"; 
		$headers .= "Content-Type: text/html; charset=iso-8859-1\n"; 
		//$headers .= "Cc: mmed_nour@hotmail.fr\n";  
		 mail($dest, $sujet, $content, $headers);  
		$var=  mail($dest, $sujet, $content, $headers);  
		
*/		


echo "<center><br/><br/><br/><br/><br/><br/><br/><br/><br/>Bonjour $prenom ";
echo $nom." <br/>Votre message est envoyé ! </center> ";


}
else{

	echo "<center><br/><br/><br/><br/><br/>Erreur : Message non envoye !</center> ";
}
}

?>
         
  </body>
</html>
