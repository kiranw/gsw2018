<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="shortcut icon" href="http://gsw.mit.edu/2018/favicon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="splash/css/style.css">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="splash/img/logo.png" id="navbar-logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mobile" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="speakers.php">Speakers</a></li>
                <!--li><a href="schedule.php">Schedule</a></li-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Competitions <span class="caret"></span>
                    </a>
                    <div id="competitionMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="epc.php">Elevator <br> Pitch Competition</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="bpc.php">Business Plan Competition</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="startup-showcase.php">Startup Showcase</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="navbarDropdown" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About <span class="caret"></span>
                    </a>
                    <div id="aboutMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="history.php">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="team.php">Who we are</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sponsors.php">Sponsors</a>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php
$scripts = "
    <script>
        $(document).scroll(function () {
            var scrollPos = $(document).scrollTop();
            if (scrollPos > 250) {
                $('#navbar-logo').addClass('navbar-logo-small');
                $('.navbar').addClass('navbar-condensed');
            } else {
                $('#navbar-logo').removeClass('navbar-logo-small');
                $('.navbar').removeClass('navbar-condensed');
            }
        });

        (function() {
            var nav = document.getElementById('nav'),
            anchor = nav.getElementsByTagName('a'),
            current = window.location.href.split('/')[window.location.href.split('/').length-1];
                        
            for (var i = 0; i < anchor.length; i++) {
                var url = anchor[i].href.split('/')[anchor[i].href.split('/').length-1];

                if(url == current) {
                    
                        anchor[i].className = \"active\";
                }
            }
        })();
    </script>";
?>