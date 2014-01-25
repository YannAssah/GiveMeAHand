<?php

$bdd = mysqli_connect("localhost", "midgrange", "midgrangeprojetetna", "midrange");
  if (mysqli_connect_errno()) {
      printf("Échec de la connexion : %s\n", mysqli_connect_error());
      exit();
  }

$begin = $_POST['begin'];
$end = $_POST['end'];

if(isset($begin) && !empty($begin) && isset($end) && !empty($end)){
$requet = "INSERT INTO conget (begin,end,statut) VALUES ('$begin', '$end', 'En attente')";

$bdd->query($requet);
}
header('Location: home.php');

  $requet2 = "SELECT statut from conget ORDER by ID DESC limit 1";	
  $requet3 = "SELECT begin from conget ORDER by ID DESC limit 1";
  $requet4 = "SELECT end from conget ORDER by ID DESC limit 1";

  $statut = $bdd->query($requet2);

  $begin = $bdd->query($requet3);

  $end = $bdd->query($requet4);  
?>
<i style="color: green;">
<?php 
 	if($result = mysqli_query($bdd, $requet2))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["statut"]);
      		}
  	}
?></i>
<b style="color: blue;">Début:</b>
<small style="color: black;"><?php 
 	if($result = mysqli_query($bdd, $requet3))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["begin"]);
      		}
  	}
?></small> 
<b style="color: blue;">Fin:</b>
<small style="color: black;">
<?php 
 	if($result = mysqli_query($bdd, $requet4))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["end"]);
      		}
  	}
?></small> 
