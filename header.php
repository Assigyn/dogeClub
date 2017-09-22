<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Wild Code School, équipe 3">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Doge Club - <?php echo $titlePage; ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/format.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/fav_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Open+Sans" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php if($currentPage =="index") echo"class=\"bodyWhite\"";?>>

<div class="container-fluid no-padding">

    <header>
        <nav class="navbar navbar-default navbar-fixed-top compensate-for-scrollbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">

                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($currentPage =="news") echo"class=\"active\"";?>><a href="news.php">Actualités</a></li>
                        <li <?php if($currentPage =="agenda") echo"class=\"active\"";?>><a href="agenda.php">Agenda</a></li>
                        <li <?php if($currentPage =="businesses") echo"class=\"active\"";?>><a href="entreprises.php">Entreprises</a></li>
                        <li <?php if($currentPage =="gallery") echo"class=\"active\"";?>><a href="galerie.php">Galerie</a></li>
                        <li><a class="js-scrollTo" href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </header>

</div>