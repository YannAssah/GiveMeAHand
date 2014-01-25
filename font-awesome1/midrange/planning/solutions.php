<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 19/01/14
 * Time: 16:30
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Solutions et Services - Planning</title>
    <link href="../img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='demos/cupertino/jquery-ui.min.css' />
    <link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='lib/jquery.min.js'></script>
    <script src='lib/jquery-ui.custom.min.js'></script>
    <script src='fullcalendar/fullcalendar.min.js'></script>
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/bootstrap.min.js"></script>
    <meta charset="utf-8">
</head>
<body>


<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="../home.php" class="navbar-brand">MIDRANGE</a>
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
                        <li><a href="../planning/index.html">Planning</a></li>
                        <li><a href="../projet.php">Projet</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Outils<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="download">
                        <li><a tabindex="-1" href="#">RedMine</a></li>
                        <li><a tabindex="-1" href="#">GLPI</a></li>
                        <li><a tabindex="-1" href="#">Maestro</a></li>
                        <li><a tabindex="-1" href="#">Sage</a></li>
                        <li><a tabindex="-1" href="../upload/index.php">Partage</a></li>
                        <li><a tabindex="-1" href="#">Liens utiles</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../contact.php">Contact</a>
                </li>
            </ul>
            <div id="search_right">
                <form class="navbar-form navbar-left">
                    <input type="search" class="form-control col-lg-8" placeholder="Rechercher">
                </form>
                <a href="index.php"><img src="http://findicons.com/files/icons/2256/hamburg/32/logout.png" style="margin-top: 8px;"></a>
            </div>
        </div>
    </div>
</div>


<br><br><br><br><br>
<div id="left">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li><a href="./index.html" data-target-id="home"><i class="fa fa-home fa-fw"></i>Consulting</a></li>
                <li class="active"><a href="./solutions.html" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i>Solutions et Services</a></li>
                <li><a href="./computers.php" data-target-id="pages"><i class="fa fa-file-o fa-fw"></i>Computers</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="container" style="margin-top: 20px">

    <div class="page-header" id="banner">
        <div class="row">
            <br>
            <script>
$(document).ready(function() {

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    var calendar = $('#calendar').fullCalendar({
                        events: "http://5.135.145.108/midrange/planning/fullcalendar/event3.php",
                        // Convert the allDay from string to boolean
                        eventRender: function(event, element, view) {
        if (event.allDay === 'true') {
            event.allDay = true;
        } else {
            event.allDay = false;
        }
    },
                        header: {
        left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        selectable: true,
                        selectHelper: true,
                        theme: true,
                        select: function(start, end, allDay) {
        var title = prompt('Titre:');
        if (title) {
            start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
            end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
            $.ajax({
                                    url: 'http://5.135.145.108/midrange/planning/fullcalendar/add_events3.php',
                                    data: 'title='+ title+'&start='+ start +'&end='+ end ,
                                    type: "POST",
                                    success: function(json) {
                alert('Evenement créé');
            }
                                });
                                calendar.fullCalendar('renderEvent',
                                    {
                                        title: title,
                                        start: start,
                                        end: end
                                    },
                                    true // make the event "stick"
                                );
                            }
        calendar.fullCalendar('unselect');
    },
                        editable: true,

                        eventDrop: function(event, delta) {
        start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
        end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
        $.ajax({
                                url: 'http://5.135.145.108/midrange/planning/fullcalendar/events-update3.php',
                                data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                                type: "POST",
                                success: function(json) {
            alert("Evenement modifié");
        }
                            });
                        },
                        eventResize: function(event) {
        start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
        end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
        $.ajax({
                                url: 'http://5.135.145.108/midrange/planning/fullcalendar/events-update3.php',
                                data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                                type: "POST",
                                success: function(json) {
            alert("Evennement édité");
        }
                            });

                        },

                        eventClick: function(event) {
        start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
        end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
        if (confirm("Voulez-vous vraiment supprimer ?")) {
            $.ajax({
                                    url: 'http://5.135.145.108/midrange/planning/fullcalendar/delete_events3.php',
                                    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                                    type: "POST",
                                    success: function(json) {
                alert("Fait !");
                location.reload();
            }
                                });
                            }
    }


                    });

                });

            </script>
            <style>

body {
    margin-top: 40px;
                    text-align: center;
                    font-size: 14px;
                    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                }

                #calendar {
                    width: 900px;
                    margin: 0 auto;
                }

            </style>


            <div id='calendar'></div>
</body>
</html>
