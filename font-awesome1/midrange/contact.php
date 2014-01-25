<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <title>Midrange - Intranet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	
	<link rel="stylesheet" href="css/contact.css" media="screen">
	<link rel="stylesheet" href="css/contact_2.css" media="screen">
    <link rel="stylesheet" href="css/connect.css" media="screen">

  </head>
  <body>


<?php include_once("menu.php"); ?>

<div class="container center">
<div class="media3">
<form class="comment" action="mail.php" method="post">
	<label>Nom * </label><br>
	 <input class="span3" placeholder=
 		 "Votre Nom" type="text" name="nom" required><br>
		
		<label>Prenom * </label><br>
	<input class="span3" placeholder="Votre Prenom" type="text" name="prenom" required><br>
                
		<label>E-mail * </label><br>
	 <input class="span3" placeholder=
                "Votre email" type="email" name="email" required><br>

		<label>Tél. Fixe </label> <br>
	<input class="span3" placeholder=
                "téléphone fixe" type="text" name="tel_f"><br>

		<label>Tél. Mobile </label><br>
	<input class="span3" placeholder=
                "numero de portable" type="text" name="tel_m"><br>
                
		<label>Sujet du message * </label><br>
	<input class="span3" placeholder="Sujet de votre message" type="text" name="sujet" required><br>

		<label>Services</label><br>
                <select class="span3" id="subject" name="services">
                    <option selected value="na">
                        Sélectionner le service :
                    </option>
    
                    <option value="MIDRANGE Consulting">
                        MIDRANGE Consulting
                    </option>
    
                    <option value="MIDRANGE solutions & services">
                        MIDRANGE solutions & services
                    </option>
    
                    <option value="MIDRANGE computers">
                        MIDRANGE computers
                    </option>
                </select> 
            
    
            <div class="span5">
                <br/><label>Message </label>
                <textarea name="message" class="input-xlarge span5" placeholder="Votre message" id="message" rows="10" cols="70" required></textarea>
	<!-- <a HREF="mailto:san@antonio.net">san@antonio.net</a> -->

	  
	<br><br><i><font color="blue">Les champs indiqués d'un * doivent être complétés.</font></i></div>
	<br><button class="btn btn-primary pull-right" type="submit">Envoyer</button>
        

</form>
</div>

     <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script> 

  </body>
</html>

