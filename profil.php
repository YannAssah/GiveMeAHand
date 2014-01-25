<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Give Me a Hand</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
        <?php include("menu.php");?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <div id="img">
              <img src="nguyen_t.jpeg">
            </div>
            <h1>
<?php 
		var_dump($_SESSION['user_name']);
		var_dump($_SESSION['user_firstname']);

	if ($result = mysqli_query($bdd, $requet2)) {

    /* Récupère un tableau associatif */
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        
		 <b>Prénom Nom
            <?php
		echo $name;
		echo $firstname;
            printf ("%s %s", $firstname/*$row['user_name']*/, $name/*$row['user_firstname']*/);
		?>
		</b><br>
	<?php
    }

    /* Libération des résultats */
    mysqli_free_result($result);
}
?>
	</h1>
            <div id="description">
              description
            </div>
            <ol class="breadcrumb">
            </ol> 
          </div>
        </div>

<div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h1>Modern Business - A Bootstrap 3 Template</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h1>Ready to Style &amp; Add Content</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h1>Additional Layout Options at <a href="http://startbootstrap.com">http://startbootstrap.com</a>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>



<div id="titre">
  <h1>Vos actualités</h1>
</div>
        <form name="news" action="#"></form>
        <div id="news">
          <!--<textarea name="news" rows="2" cols="80" placeholder="Publiez qqch !"></textarea>-->
          <textarea class="form-control" rows="3" placeholder="Publiez vos actualités..."></textarea>
          <!--<input type="submit" name="publier" value="Publier">-->
          <button type="button" class="btn btn-primary">Publier</button>
        </div>
          <br/>
          <br/>
        <div id="flux">
          
        </div>
          <script src="js/jquery-1.10.2.js"></script>
          <script src="js/bootstrap.js"></script>
  </body>
</html>
