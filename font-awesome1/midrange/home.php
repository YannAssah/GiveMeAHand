<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <title>Midrange - Intranet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   <link rel="stylesheet" href="css/home.css" media="screen">
    <link rel="stylesheet" href="css/connect.css" media="screen">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes\
/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  </head>
  <body>

 <?php include_once("menu.php"); ?>


    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
<br><br><br><br><br>
          </div>
<!-- PROFILE -->
<div id="right">
<div class="media3">
	<center><div class="fil">Fil d'actualité:</div></center><br>
<form class="comment" action="home.php" method="post">
<input type="text" id="comment" name="comment" class="comment" placeholder="       Ajoutez votre actualité !"></input>
</form>
	<br>
	<div class="overflow">
            <?php include('news.php'); ?>
	</div>
        </div>
      <div class="col-lg-5">
        <div class="media">
	<?php include("getprofile.php"); ?>
        </div><br>
        <div class="media conget">
	<h4 class="media-heading">Gestion de congé</h4>
	    <form class="conget" method="post" action="conget.php">
            <label for="username">Début</label>
	    <input type="date" name="begin" required><br>
            <label for="username">Fin</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" name="end" required>
            <button type="submit">Demande</button>
	<h4 class="media-heading"><small>
        </form>
		<?php include("conget.php");?></small></h4>
        </div>

      </div>

      <br><br>
</div>
 <!-- PROFILE -->

          <div class="col-lg-6">
                <div id="bsap_1277971" class="bsarocks bsap_c466df00a3cd5ee8568b5c4983b6bb19"></div>
          </div>
        </div>
      </div>

<!-- Content ============================================= --> 


<!-- Content ============================================= --> 
   <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
