<?php
$titlePage = "Galerie photo";
$currentPage = "gallery";
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
                <div class="col-lg-3">
                    <a href="img/P1000671.JPG" data-fancybox data-caption="My caption">
                        <img src="img/P1000671.JPG" class="img-responsive" alt="img01">
                    </a>
                </div>
                <div class="col-lg-3">
                    <img src="img/P1000671.JPG" class="img-responsive" alt="img01">
                </div>
                <div class="col-lg-3">
                    <img src="img/P1000671.JPG" class="img-responsive" alt="img01">
                </div>
                <div class="col-lg-3">
                    <img src="img/P1000671.JPG" class="img-responsive" alt="img01">
                </div>
            </div>

        </div>

    </section>

</div>


<?php include("footer.php"); ?>
