<?php
$titlePage = "Galerie photo";
$currentPage = "gallery";
$pageDescription = "Page galerie photo";
include('header.php');
?>


<div id="bgHeader" class="galleryBg">
</div>

<div class="container">

    <section>

        <div class="row">
            <div class="col-xs-12">
                <h2>Galerie de Photos</h2>
                <div class="titleDeco">
                    <div class="titleDecoForm">
                    </div>
                </div>
            </div>
        </div>


        <div id="main">

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="img/outside_doge.JPG" data-fancybox data-caption="Vue extérieure du batîment">
                        <img src="img/outside_doge.JPG" class="img-responsive" alt="outside Doge">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="img/inside_floor.JPG" data-fancybox data-caption="Vue intérieure du premier étage">
                        <img src="img/inside_floor.JPG" class="img-responsive" alt="inside Doge">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="img/top_doge.JPG" data-fancybox data-caption="Le plafond vu du dessous">
                        <img src="img/top_doge.JPG" class="img-responsive" alt="Plafond Doge">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="img/kayak_floor.JPG" data-fancybox data-caption="1er étage du DOge">
                        <img src="img/kayak_floor.JPG" class="img-responsive" alt="Etage Doge">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="img/doge_apero.JPG" data-fancybox data-caption="Le premier apéro organisé par le club !">
                        <img src="img/doge_apero.JPG" class="img-responsive" alt="Doge apero">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="img/doge_table.JPG" data-fancybox data-caption="Une autre vue du RDC">
                        <img src="img/doge_table.JPG" class="img-responsive" alt="RDC doge">
                    </a>
                </div>

            </div>

        </div>

    </section>

</div>


<?php include("footer.php"); ?>
