<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="stylesheet" href="css/news.css">

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
            <h1>Fil d'actualité</h1>
            <ol class="breadcrumb">
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Bienvenue sur la plateforme Web de Give Me a Hand !
               
            </div>
              <div class="media3">
                  <div class="fil">Fil d'actualité:</div><br>
                  <form class="comment" action="index.php" method="post">
                      <input type="text" id="comment" name="comment" class="post" placeholder="Ajoutez votre actualité !"></input>
                  </form>
            <div id="fildactu">
                  <br>
                  <div class="overflow">
                      <?php include('news.php'); ?>
                  </div>
              </div>
          </div>
          </div>
        </div>

          <script src="js/jquery-1.10.2.js"></script>
          <script src="js/bootstrap.js"></script>
  </body>
</html>
