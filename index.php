<?php
$titlePage = "Le Doge Club vous souhaite la bienvenue";
$currentPage = "index";
$pageDescription = "La page principale du site";
include('header.php');
?>


<!--<div id="BgHeader" class="entreprisesBg">
</div>-->


<div id="videoBlock" style="width: 100%; height: 500px;" data-vide-bg="video/ocean"
     data-vide-options="position: 0% 50%">
    <div id="videoOver"><h1>Notre diversité fait notre unité</h1>
        <div class="videoTitleDeco"></div>
        <h3>Le Doge Club, fédérateur des entreprises du numérique</h3></div>
</div>

<div class="container">

    <section id="indexPage">

        <div class="row">
            <div class="col-xs-12">
                <h2>Qui sommes-nous ?</h2>
                <div class="titleDeco">
                    <div class="titleDecoForm">
                    </div>
                </div>
            </div>
        </div>

        <div class="main">

            <div class="row">
                <div class="col-lg-9 col-lg-offset-1">
                    <p>Connaissez-vous Euratechnologies, cet écosystème digital avec 300 entreprises? Oui? Eh bien nous
                        vous présentons son petit frère le Doge Club!
                    </p>
                    <p>Le Doge Club est une association créée par Kayak Communication
                        qui regroupe toutes les entreprises du bâtiment A et B du 2 et 4 avenue des Saules
                        à Lille juste derrière Euratechnologies.
                    </p>
                    <p>Notre but est de fédérer ces entreprises et de communiquer largement sur les activités qui y sont
                        exercées.

                    </p>
                </div>
            </div>

        </div>


    </section>

</div>

<div class="container-fluid greyBgIndex">

    <div class="row">
        <div class="col-xs-12">
            <h2>Dernières actualités</h2>
            <div class="titleDeco">
                <div class="titleDecoForm">
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-4 indexNews">
                <a href="#">
                    <img class="img-responsive" src="img/news_kayak.jpg" alt="photo meet up">
                </a>
                <h3>
                    <a href="#">Premier meet-up de Kayak Communication</a>
                </h3>
                <p>Ce mardi 19 Septembre 2016, Kayak Communication a effectué son premier meet-up
                    d'une longue série dans le domaine du numérique....
                </p>
                <button class="btn btn-primary">
                    Lire la suite
                </button>
            </div>

            <div class="col-md-4 indexNews">
                <a href="#">
                    <img class="img-responsive" src="img/news_ak10.jpg" alt="photo bureau">
                </a>
                <h3>
                    <a href="#">La société Ak 10 arrive dans nos locaux</a>
                </h3>
                <p>Ak10, nouvelle entreprise du numérique qui s'installe dans nos locaux. Leur mission :
                    minimiser vos dépenses dans les goulags.
                </p>
                <button class="btn btn-primary">
                    Lire la suite
                </button>
            </div>

            <div class="col-md-4 indexNews">
                <a href="#">
                    <img class="img-responsive" src="img/news_apero.jpg" alt="photo fête">
                </a>
                <h3>
                    <a href="#">Retour sur l'apéro du 12 Septembre 2016</a>
                </h3>
                <p>Le Doge Club a organisé ce mardi 12 Septembre 2016 un apéro pour que toutes les entreprises
                    des locaux A et B fassent plus ample connaissance.
                </p>
                <button class="btn btn-primary">
                    Lire la suite
                </button>
            </div>

        </div>

    </div>

</div>

<div class="container whiteBgIndex">

    <div class="row">
        <div class="col-xs-12">
            <h2>Evénements à venir !</h2>
            <div class="titleDeco">
                <div class="titleDecoForm">
                </div>
            </div>
        </div>
    </div>

    <div id="indexAgenda">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <li>
                        <a href="#">
                            <h5>19/09/2017</h5>
                            <p>Meet-up de Kayak Communication</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h5>12/09/2017</h5>
                            <p>Apéro de rencontre organisé par le Doge Club</p>
                        </a>
                    </li>
                    <li>
                        <a href="#"><h5>07/09/2017</h5>
                            <p>Tournoi badminton - 4e journée!</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <button class="btn btn-primary">Voir l'agenda</button>

    </div>


</div>

<?php include('footer.php'); ?>
