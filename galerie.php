<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Galerie - DogeClub.fr</title>

    <link href="css/format.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>

    h2, p
    {
        text-align: center;
    }

    img
    {
        text-align: center;
    }

    .row
    {
        margin-top: 30px;
    }

    .modal-dialog 
    {
        width:600px;
    }

    .thumbnail {
        margin-bottom:6px;
    }
    </style>
    
  </head>

  <body>

    <div>
        <div class="container-fluid no-padding">

         <header>
           <?php include("header.php"); ?>
         </header>

          <div id="BgHeader" class="galleryBg">
          </div>

        </div>


        <div class="container">

        <section>

            <div class="row">
               <div class="col-xs-12">
                  <h2>Galerie de Photos</h2>
                  <div id="titleDeco">
                     <div id="titleDecoForm">
                     </div>
                  </div>
               </div>
            </div>

            <!-- Projects Row -->
            <div class="container">
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                        <img src="https://s3.amazonaws.com/ooomf-com-files/lqCNpAk3SCm0bdyd5aA0_IMG_4060_1%20copy.jpg" alt="...">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                        <img src="https://s3.amazonaws.com/ooomf-com-files/deYU3EyQP9cN23moYfLw_Dandelion.jpg" alt="...">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                        <img src="https://s3.amazonaws.com/ooomf-com-files/8H0UdTsvRFqe03hZkNJr_New%20York%20-%20On%20the%20rock%20-%20Empire%20State%20Building.jpg" alt="...">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                        <img src="https://s3.amazonaws.com/ooomf-com-files/Z3LXxzFMRe65FC3Dmhnp_woody_unsplash_DSC0129.jpg" alt="...">
                    </a>
                </div>
            </div>

            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
            
        <footer>
                <?php include('footer.php'); ?>
        </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
    </script>

  </body>
</html>