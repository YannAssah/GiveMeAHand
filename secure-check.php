<?php   // on lance la session 
session_start(); 
if ( !isset($_SESSION['user_id']) ) 
{  
	die(header("Location: sign_in.php"));
}  // Sinon et bien c'est que la variable existe, donc on ne fait rien de spécial et le script continue sa route (et affiche ta page). 
else {
}   
?>
