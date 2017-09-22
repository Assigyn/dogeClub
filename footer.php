<?php

$error = array();

if ($_POST) {


    if (empty($_POST['Name'])) {
        $error['Name'] = "Vous devez renseigner un nom.";
        $postForm = "false";
    }


    if (empty($_POST['Email'])) {
        $error['Email'] = "Votre email n'est pas valide.";
        $postForm = "false";
    }

    if (strlen($_POST['Message']) < 20) {
        $error['Message'] = "Votre message doit contenir au moins 20 caractères.";
        $postForm = "false";
    }

    if (count($error) == 0) {
        $postForm = "true";
        $_POST = array();
    }

}
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 hidden-xs" id="footerMenu">
                <ul>
                    <li><a href="news.php">Actualités</a></li>
                    <li><a href="agenda.php">Agenda</a></li>
                    <li><a href="entreprises.php">Entreprises</a></li>
                    <li><a href="galerie.php">Galerie</a></li>
                    <li><a href="mentions_legales.php">Mentions légales</a></li>
                </ul>
                <p class="copyright">Doge Club (c) 2017</p>
            </div>
            <div class="col-lg-4 col-xs-12" id="form">
                <h4 id="contact">Contactez nous !</h4>


                <!-- Modal -->
                <div class="modal fade sentMail" id="sentMail" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Votre message a bien été envoyé !</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                                        <img src="img/mail.png" alt="email sent" class="img-responsive">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <h3>Votre message a bien été envoyé, une réponse vous sera envoyée dès que
                                            possible.
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <form action="index.php#submit" class="form-horizontal" method="POST">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <input id="Name" name="Name" placeholder="Votre nom...." class="form-control input-md"
                                   type="text" value="<?php echo isset($_POST["Name"]) ? $_POST["Name"] : ''; ?>">
                            <p class="error_message"><?php if (isset($error['Name'])) {
                                    echo $error['Name'];
                                } ?></p>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <input id="Email" name="Email" placeholder="Votre mail..." class="form-control input-md"
                                   type="email" value="<?php echo isset($_POST["Email"]) ? $_POST["Email"] : ''; ?>">
                            <p class="error_message"><?php if (isset($error['Email'])) {
                                    echo $error['Email'];
                                } ?></p>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <textarea class="form-control" id="Message" name="Message"
                                      placeholder="Votre message..."><?php echo isset($_POST["Message"]) ? $_POST["Message"] : ''; ?></textarea>
                            <p class="error_message"><?php if (isset($error['Message'])) {
                                    echo $error['Message'];
                                } ?></p>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <button id="submit" name="submit" class="btn btn-primary">
                                Envoyer
                            </button>
                        </div>


                    </fieldset>
                </form>

            </div>
            <div class="col-xs-12 visible-xs hidden-sm">
                <p class="legalMentions"><a href="mentions_legales.php">Mentions légales</a></p>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<?php if ($currentPage == 'index') { ?>
    <script src="js/jquery.vide.js"></script>
<?php } ?>
<?php if ($currentPage == 'gallery') { ?>
    <script src="js/jquery.fancybox.min.js"></script>
<?php } ?>


<script>
    $(document).ready(function () {

        var php_page = "<?php echo $currentPage; ?>";
        var postForm = "<?php echo $postForm;?>";

        if (postForm == 'true') {
            $('#sentMail').modal('show');
        }

        //Video Background
        if (php_page == "index") {
            var videoBlock = $('#videoBlock');
            videoBlock.vide('video/videobg'); // Non declarative initialization

            var instance = videoBlock.data('vide'); // Get the instance
            var video = instance.getVideoObject(); // Get the video object
            instance.destroy(); // Destroy instance

            videoBlock.vide({
                'mp4': 'video/videobg',
                'ogv': 'video/videobg',
                'poster': 'video/videobg',
            });
        }

        //Smooth Scroll
        $('.js-scrollTo').on('click', function () {
            var page = $(this).attr('href');
            var speed = 750;
            $('html, body').animate({scrollTop: $(page).offset().top}, speed);
            return false;
        });

        //Navbar scroll

        $(window).on("scroll", function () {
            var changeColor = $(window).scrollTop();
            if (changeColor > 120) {
                $(".navbar-default").css({
                    'background-color': '#333',
                    'transition': 'background-color 0.5s'
                });
                $(".navbar-default a").css({
                    'color': '#fff'
                });
                $(".navbar-brand").css({
                    'background-image': 'url(img/doge_logo_white.png)'
                });
            }
            else {
                $(".navbar-default").css("background", "#fff");
                $(".navbar-default a").css({
                    'color': '#777'
                });
                $(".navbar-default li.active a").css({
                    'color': '#fff'
                });
                $(".navbar-brand").css({
                    'background-image': 'url(img/doge_logo.png)'
                });
            }
        });

        //mail modal
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        });

        //lightbox
        $("[data-fancybox]").fancybox({
            // Options will go here
        });

    })

</script>


</body>
</html>