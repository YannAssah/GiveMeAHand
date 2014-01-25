<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Give Me a Hand</title>

    <!-- Bootstrap core CSS -->
    <link href="css1/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css1/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="mess.css">
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

            <h1>Messagerie</h1>

            <ol class="breadcrumb">
            
            <div class="row">
              <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Christophe Neto</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Vikram Sanath</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Sophie Nguyen</p></a></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Hama Mohamed</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Abdou Ghansum</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Pascal Poulle</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Hicham Bouffi</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Yann Assah</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>

            <ol class="breadcrumb">
            <div class="row">
            <a data-toggle="modal" data-target="#myModal">
              <div class="col-xs-6 col-md-4"><p class="fa fa-envelope"> From : Sofiane Gaaloul</p></div>
              <div class="col-xs-6 col-md-4"> Object : Coucou John Smith ...</div>
              <div class="col-xs-6 col-md-4"> 23 Janvier 2014</div>
            </a>
            </div>
            </ol>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <a href="profile.html"><h4 class="modal-title" id="myModalLabel"><i class="fa-white fa fa-user"></i> Christophe Neto Paradela</h4></a>
      </div>
      <div class="modal-body">
        Coucou John Smith, J'sais pas t'es qui etc..... bla bla bla bla, Coucou John Smith, J'sais pas t'es qui etc..... bla bla bla bla, Coucou John Smith, J'sais pas t'es qui etc..... bla bla bla bla, Coucou John Smith, J'sais pas t'es qui etc..... bla bla bla bla
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <br>
        <a href="message.html" class="btn btn-info btn-default"><i class="fa-white fa fa-envelope"></i> Répondre</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
            
          </div>
        </div>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>

  </body>
</html>
