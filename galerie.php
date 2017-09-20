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

        <!-- Projects Row -->
        <div id="main">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                        <img src="https://s3.amazonaws.com/ooomf-com-files/lqCNpAk3SCm0bdyd5aA0_IMG_4060_1%20copy.jpg"
                             alt="...">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                        <img src="https://s3.amazonaws.com/ooomf-com-files/deYU3EyQP9cN23moYfLw_Dandelion.jpg"
                             alt="...">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                        <img src="https://s3.amazonaws.com/ooomf-com-files/8H0UdTsvRFqe03hZkNJr_New%20York%20-%20On%20the%20rock%20-%20Empire%20State%20Building.jpg"
                             alt="...">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                        <img src="https://s3.amazonaws.com/ooomf-com-files/Z3LXxzFMRe65FC3Dmhnp_woody_unsplash_DSC0129.jpg"
                             alt="...">
                    </a>
                </div>
            </div>
        </div>

        <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>

</div>


<?php include("footer.php"); ?>
