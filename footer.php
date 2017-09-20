<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 hidden-xs" id="footerMenu">
                <ul>
                    <li><a href="#">Actualités</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Entreprises</a></li>
                    <li><a href="#">Galerie</a></li>
                    <li><a href="#">Mentions légales</a></li>
                </ul>
                <p class="copyright">Doge Club (c) 2017</p>
            </div>
            <div class="col-lg-4 col-xs-12" id="form">
                <h4 id="contact">Contactez nous !</h4>
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <input id="Name" name="Name" placeholder="Votre nom...." class="form-control input-md"
                                   type="text">
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <input id="Email" name="Email" placeholder="Votre mail..." class="form-control input-md"
                                   type="text">
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <textarea class="form-control" id="Message" name="Message"
                            >Votre message...</textarea>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <button id="formSubmit" name="submit" class="btn btn-primary">Envoyer</button>
                        </div>


                    </fieldset>
                </form>
            </div>
            <div class="col-xs-12 visible-xs hidden-sm">
                <p class="legalMentions"><a href="#">Mentions légales</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.vide.js"></script>


<script>
    $(document).ready(function () {

        var php_page = "<?php echo $currentPage; ?>";

        //Video Background
        if (php_page == "index") {
            var videoBlock = $('#videoBlock');
            videoBlock.vide('video/ocean'); // Non declarative initialization

            var instance = videoBlock.data('vide'); // Get the instance
            var video = instance.getVideoObject(); // Get the video object
            instance.destroy(); // Destroy instance

            videoBlock.vide({
                'mp4': 'video/ocean',
                'webm': 'video/ocean',
                'ogv': 'video/ocean',
                'poster': 'video/ocean',
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


        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        });

        //Lightbox
        var $lightbox = $('#lightbox');

        $('[data-target="#lightbox"]').on('click', function (event) {
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

    })

</script>


</body>
</html>