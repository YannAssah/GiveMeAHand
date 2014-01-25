<?php

?>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<div id="fullscreen_bg" class="fullscreen_bg"/>
<div id="logologin"><img style="width: 300px; height: auto;" src="./img/logologin.png"></div>
<div class="container">

    <!--<div id="mark">MIDRange INTRA (Alpha)</div>-->

    <form class="form-signin" action="connect.php" method="post">
        <h1 class="form-signin-heading">Connexion :</h1>
        <input type="text" class="form-control" placeholder="Identifiant" required="" autofocus="" id="usr_name" name="usr_name">
        <input type="password" class="form-control" placeholder="Mot de passe" required="" id="usr_password" name="usr_password">
        <input name="req" id="req" class="btn btn-lg btn-primary btn-block" type="submit" value="Connexion">
    </form>
	<?php required("connect.php");?>
</div>

