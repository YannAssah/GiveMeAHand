<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
		<div class="container">
    		    <form class="form-signin" action="connect.php" method="post">
        		<h1 class="form-signin-heading">Connexion :</h1>
        		<input style="width: 210px;" type="email" class="form-control" placeholder="Email" required="" autofocus="" id="user_mail" name="user_mail">
	        	<input style="width: 210px;" type="password" class="form-control" placeholder="Mot de passe" required="" id="user_password" name="user_password">
	        	<input style="width: 210px;" name="req" id="req" class="btn btn-lg btn-primary btn-block" type="submit" value="Connexion">
		    </form>
		<?php required("connect.php"); ?>
		</div>
	</body>
</html>
