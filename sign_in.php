<?php

    $user_mail = $_POST['user_mail'];
    $user_password = $_POST['user_password'];
 
try {
    $bdd = new mysqli("localhost", "root", "oVfw*h6.x", "gmh");
}
catch (Exception $e)
{
    die('Erreur :'. $e->getMessage());
}

 
if(isset($user_mail) && !empty($user_mail) && isset($user_password) && !empty($user_password))
{ 
        $requet2 = "SELECT * from user WHERE user_mail = '$user_mail' and user_password = '$user_password'";

	$success = $bdd->query($requet2);
	$data = (mysqli_fetch_array($success));
	
        if($success->num_rows == 1)
        {
	session_start();
	$_SESSION['user_id'] = $data['user_id'];
	$_SESSION['user_mail'] = $data['user_mail'];
	$_SESSION['user_name'] = $data['user_name'];
	$_SESSION['user_firstname'] = $data['user_firstname'];
	$_SESSION['user_avatar'] = $data['user_avatar'];
	setcookie("user_mail", $_POST['user_mail'], time()+(84600*30));
	?>
	<!DOCTYPE html><html><head><meta charset="utf-8"></head><body><center><img src="images/loading.gif"><br><h4>Vous allez être redirigé automatiquement!</h4></center></body></html>
	<meta http-equiv=refresh content="0.5; url=index.php">
	<?php
         }
        else
        {
        echo "Mauvais login batard!";
        }
	mysqli_free_result($success); 
}	
else { // pas d'envoi // affiche le formulaire ?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Connexion - Give Me a Hand</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_sign.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

        <link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
    </head>
    <body>
       <header>

  <img class="roll"src="picto_handicap.png">    
        <h1 class="titre">Give Me a Hand</h1>
<img class="run"src="runing_man.png">  
       </header>   
            <section>			
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                                <h1>Connexion</h1> 
                                <p> 
                                    <label for="user_mail" class="uname" data-icon="u"> Email </label>
                                    <input id="user_mail" name="user_mail" required="required" type="text" value="<?php echo $_COOKIE['user_mail']; ?>"/>
                                </p> <?php //le cookie pré-rempli le formulaire si la personne c'est connecté ?> 
                                <p> 
                                    <label for="user_password" class="youpasswd" data-icon="p"> Mot de passe </label>
                                    <input id="user_password" name="user_password" required="required" type="password" /> 
                                </p>
                                <p class="keeplogin"> 
		<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Garder ma session active</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Connexion" /> 
								</p>
                            </form>
                                <p class="change_link">
				Pas encore membre ?
									<a href="#toregister" class="to_register">Inscrivez-vous !</a>
								</p>
                            <!--</form>-->
                        </div>

                        <div id="register" class="animate form">
                            <form   method="post" action="formulaire.php"> 
                                <h1> Inscription  </h1>
                                <p> 
                                    <label for="user_name" class="uname" data-icon="u">Nom</label>
                                    <input id="user_name" name="user_name" required="required" type="text" />
                                </p>

                                <p> 
                                    <label for="user_firstname" class="uname" data-icon="u">Prénom</label>
                                    <input id="user_firstname" name="user_firstname" required="required" type="text" />
                                </p>

                                <!--<p> -->
                                    <label for="user_sexe">Sexe</label><br>
		
            <center>Homme <br><div class="man"><INPUT type= "radio" name="user_sexe" value="1" style="width:10%;"></div><br>Femme <br><div class="woman"><INPUT type= "radio" id="user_sexe" name="user_sexe" value="0" style="width:10%;"></div><br></center>
                                <!--</p> -->

                                <p>
                                 <label for="user_birth">Date de naissance</label>
                <input class="form-control" type="date" id="user_birth" name="user_birth" max="2001-01-01" required>
                                </p> 
                                <p> 
                                    <label for="user_mail" class="youmail" data-icon="e" >Email</label>
                                    <input id="user_mail" name="user_mail" required="required" type="email" /> 
                                </p>
                                <p> 
                                    <label for="user_password" class="youpasswd" data-icon="p">Mot de passe</label>
                                    <input id="user_password" name="user_password" required="required" type="password" />
                                </p>
                                
                                <p class="signin button"> 
									<input type="submit" name="submit" value="Inscription"/> 
								</p>
                                <p class="change_link">  
									Déjà membre ?
									<a href="#tologin" class="to_register"> Connectez-vous! </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>

        <footer></footer>
    </body>
</html>
<?php }?>
