<?php
$titlePage = "Nos évènements à venir";
$currentPage = "agenda";
$pageDescription = "Page agenda";
include('header.php');
?>


<div id="bgHeader" class="agendaBg">
</div>

<div class="container">

    <section>

        <div class="row">
            <div class="col-xs-12">
                <h2>Agenda</h2>
                <div class="titleDeco">
                    <div class="titleDecoForm">
                    </div>
                </div>
            </div>
        </div>


        <div id="main">

            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="agendaCell">
                        <div class="agendaCellImage">
                            <div class="dateCell"><h5>21/09/2018</h5></div>
                            <img src="img/agenda_kayak.jpg" class="img-responsive" alt="image 1080 kayak">
                        </div>
                        <div class="agendaCellTxt">
                            <h4>Meet-up de Kayak Communication</h4>
                            <p>Organisation d'un meet-up sur l'innovation dans les locaux
                                de la WildcodeSchool Lille.</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgenda1">Découvrir
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalAgenda1" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Meet-up de Kayak Communication</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="businessContact">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <img src="img/agenda_kayak.jpg" class="img-responsive"
                                                     alt="image 1080 kayak">
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="dateCellModal">
                                                    <h5><span>Quand ? </span>Le 21 Septembre 2018</h5>
                                                    <h5><span>L'heure ? </span>De 8H30 à 9H30</h5>
                                                    <h5><span>Où ? </span>Wild Code School (Doge, lot 2B)</h5>
                                                </div>
                                                <div class="businessContactButton">
                                                    <button class="btn btn-primary">S'inscrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="businessDescription text-left">
                                            <p>Kayak communications organise un meet-up sur l'innovation ce mardi 19
                                                Septembre 2016 dans les locaux
                                                de la WildcodeSchool Lille.
                                            </p>
                                            <p>Ce meet-up animé par <strong>Habib Oualidi</strong> vous fera découvrir
                                                le modèle 1080° créé par Kayak communication.
                                                Cette démarche créative d'un genre nouveau vous montrera comment ne
                                                laisser aucune place au hasard et de
                                                créer efficacement de l'innovation?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="agendaCell">
                        <div class="agendaCellImage">
                            <div class="dateCell"><h5>12/09/2017</h5></div>
                            <img src="img/news_apero.jpg" class="img-responsive" alt="photo fête">
                        </div>
                        <div class="agendaCellTxt">
                            <h4>Apéro Doge Club</h4>
                            <p>Venez faire plus ample connaissance avec les autres entreprises des locaux.</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgenda2">Découvrir
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalAgenda2" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Apéro Doge Club </h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="businessContact">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <img src="img/news_apero.jpg" class="img-responsive" alt="photo fête">
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="dateCellModal">
                                                    <h5><span>Quand ? </span>Le 12 Septembre 2018</h5>
                                                    <h5><span>L'heure ? </span>De 17H30 à 19H30</h5>
                                                    <h5><span>Où ? </span>Accueil du Doge</h5>
                                                </div>
                                                <div class="businessContactButton">
                                                    <button class="btn btn-primary">S'inscrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="businessDescription text-left">
                                            <p>Venez faire plus ample connaissance avec les autres entreprises des locaux.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="agendaCell">
                        <div class="agendaCellImage">
                            <div class="dateCell"><h5>07/09/2017</h5></div>
                            <img src="img/news_badminton.jpg" class="img-responsive"
                                 alt="photo volant&raquette badminton">
                        </div>
                        <div class="agendaCellTxt">
                            <h4>Tournoi badminton - 4e journée!</h4>
                            <p>Drawer vs Adista et Homido vs effiPilot</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgenda3">Découvrir
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalAgenda3" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tournoi badminton - 4e journée!</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="businessContact">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <img src="img/news_badminton.jpg" class="img-responsive" alt="photo volant&raquette badminton">
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="dateCellModal">
                                                    <h5><span>Quand ? </span>Le 07 Septembre 2018</h5>
                                                    <h5><span>L'heure ? </span>De 8H30 à 9H30</h5>
                                                    <h5><span>Où ? </span>Stade Euratechnologie</h5>
                                                </div>
                                                <div class="businessContactButton">
                                                    <button class="btn btn-primary">S'inscrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="businessDescription text-left">
                                            <p>Drawer vs Adista et Homido vs effiPilot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="agendaCell">
                        <div class="agendaCellImage">
                            <div class="dateCell"><h5>05/09/2017</h5></div>
                            <img src="img/news_badminton.jpg" class="img-responsive"
                                 alt="photo volant&raquette badminton">
                        </div>
                        <div class="agendaCellTxt">
                            <h4>Tournoi badminton - 3e journée!</h4>
                            <p>WildCodeSchool vs Soft Computing et Axellience vs Allianzes</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgenda4">Découvrir
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalAgenda4" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tournoi badminton - 3e journée!</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="businessContact">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <img src="img/news_badminton.jpg" class="img-responsive" alt="photo volant&raquette badminton">
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="dateCellModal">
                                                    <h5><span>Quand ? </span>Le 05 Septembre 2018</h5>
                                                    <h5><span>L'heure ? </span>De 8H30 à 9H30</h5>
                                                    <h5><span>Où ? </span>Stade Euratechnologie</h5>
                                                </div>
                                                <div class="businessContactButton">
                                                    <button class="btn btn-primary">S'inscrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="businessDescription text-left">
                                            <p>WildCodeSchool vs Soft Computing et Axellience vs Allianzes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="agendaCell">
                        <div class="agendaCellImage">
                            <div class="dateCell"><h5>31/08/2017</h5></div>
                            <img src="img/news_badminton.jpg" class="img-responsive"
                                 alt="photo volant&raquette badminton">
                        </div>
                        <div class="agendaCellTxt">
                            <h4>Tournoi badminton - 2e journée!</h4>
                            <p>KaliCustomer vs Le Village by CA et Le Wagon vs Picto Travel</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgenda5">Découvrir
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalAgenda5" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tournoi badminton - 2e journée!</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="businessContact">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <img src="img/news_badminton.jpg" class="img-responsive" alt="photo volant&raquette badminton">
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="dateCellModal">
                                                    <h5><span>Quand ? </span>Le 31 Août 2018</h5>
                                                    <h5><span>L'heure ? </span>De 8H30 à 9H30</h5>
                                                    <h5><span>Où ? </span>Stade Euratechnologie</h5>
                                                </div>
                                                <div class="businessContactButton">
                                                    <button class="btn btn-primary">S'inscrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="businessDescription text-left">
                                            <p>KaliCustomer vs Le Village by CA et Le Wagon vs Picto Travel</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="agendaCell">
                        <div class="agendaCellImage">
                            <div class="dateCell"><h5>29/08/2017</h5></div>
                            <img src="img/news_badminton.jpg" class="img-responsive"
                                 alt="photo volant&raquette badminton">
                        </div>
                        <div class="agendaCellTxt">
                            <h4>Tournoi badminton - 1e journée!</h4>
                            <p>Giroptic vs Critizr et Itelios vs Kayak</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgenda6">Découvrir
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalAgenda6" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tournoi badminton - 1e journée!</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="businessContact">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <img src="img/news_badminton.jpg" class="img-responsive" alt="photo volant&raquette badminton">
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="dateCellModal">
                                                    <h5><span>Quand ? </span>Le 29 Août 2018</h5>
                                                    <h5><span>L'heure ? </span>De 8H30 à 9H30</h5>
                                                    <h5><span>Où ? </span>Stade Euratechnologie</h5>
                                                </div>
                                                <div class="businessContactButton">
                                                    <button class="btn btn-primary">S'inscrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="businessDescription text-left">
                                            <p>Giroptic vs Critizr et Itelios vs Kayak</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>

</div>

<?php include("footer.php"); ?>

