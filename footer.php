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
                                      id="Text">Votre message...</textarea>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <button id="submit" name="submit" class="btn btn-primary">Envoyer</button>
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

<script>
    $(document).ready(function() {
        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // Durée de l'animation (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>


</body>
</html>