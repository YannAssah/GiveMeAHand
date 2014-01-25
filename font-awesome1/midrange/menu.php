<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16/01/14
 * Time: 15:33
 */
?>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    var availableTags = [
      "Contact",
      "Planning",
      "Projet",
      "Accueil",
      "Partage",
      "Liens utiles",
      "RedMine",
      "GLPI",
      "Maestro",
      "Sage"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
	$("#tags").keypress(function(e) {
	    if(e.which == 13) {
			var redi = $("#tags").val();
		if(redi == "Planning")
		{
		window.location.href = "../../index.php";
		}
		if(redi == "Contact")
		{
		window.location.href = "http://5.135.145.108/midrange/contact.php";
		}
		if(redi == "Projet")
		{
		window.location.href = "http://5.135.145.108/midrange/projet.php";
		}
		if(redi == "Accueil")
		{
		window.location.href = "http://5.135.145.108/midrange/home.php";
		}
		if(redi == "Partage")
		{
		window.location.href = "http://5.135.145.108/midrange/upload/index.php";
		}
		if(redi == "Liens utiles")
		{
		window.location.href = "#";
		}
	    }
	});
  });
  </script>



<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="home.php" class="navbar-brand">MIDRANGE</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li><a href="#">Messagerie</a></li>
                        <li><a href="planning/index.html">Planning</a></li>
                        <li><a href="projet.php">Projet</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Outils<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="download">
                        <li><a tabindex="-1" href="#">RedMine</a></li>
                        <li><a tabindex="-1" href="#">GLPI</a></li>
                        <li><a tabindex="-1" href="#">Maestro</a></li>
                        <li><a tabindex="-1" href="#">Sage</a></li>
                        <li><a tabindex="-1" href="upload/">Partage</a></li>
                        <li><a tabindex="-1" href="#">Liens utiles</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
		</ul>
            <div id="search_right">
		<div class="ui-widget">
                <div class="navbar-form navbar-left">
  			<input id="tags" class="form-control col-lg-8" placeholder="Rechercher">
		</div>
        <a href="index.php"><img src="http://findicons.com/files/icons/2256/hamburg/32/logout.png" style="margin-top: 8px;"></a>
		</div>
	    </div>

                    
                
            </div>
        </div>
    </div>
</div>
