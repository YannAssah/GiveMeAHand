<?php

    $usr_id = $_POST['usr_name'];
    $usr_password = $_POST['usr_password'];
 
try {
    $bdd = new mysqli("localhost", "root", "oVfw*h6.x", "midrange");
}
catch (Exception $e)
{
    die('Erreur :'. $e->getMessage());
}

 
if(isset($usr_id) && !empty($usr_id) && isset($usr_password) && !empty($usr_password)){
 
        $requet2 = "SELECT login, password from account WHERE login = '$usr_id' and password = '$usr_password'";
	
	$success = $bdd->query($requet2);

	
        if($success->num_rows == 1)
        {
	header('Location: home.php');
        }
        else
        {
	header('Location: index2.php');
?>
	<center>Mauvais login ou mot de passe!</center>
<?php
        }
}

?>
