        <footer class="footer mt-auto p-5">
            <div class="row">
                <div class="d-flex col-sm-12 ">
                    <div class="footer-navbar">
                        <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'secondary',
                    'container'         => 'false',
                    'menu_class'        => 'navbar-nav flex-md-column flex-lg-row'
                    ) );
                ?>
                    </div>
                    <div class="ml-auto px-3 text-right">
                        <span class="mx-3"><i class="fa fa-google"></i></span>
                        <span class="mx-3"><i class="fa fa-instagram"></i></span>
                        <span class="mx-3"><i class="fa fa-twitter"></i></span>
                    </div>
                </div>
            </div>

            <div class="pt-4 mb-md-5 mt-4 pt-md-5 border-top border-bottom pb-4">
                <div class="row footer-links">
                    <div class="col-6 col-md footer-links">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted orange" href="#">Random feature</a></li>
                            <li><a class="text-muted orange" href="#">Team feature</a></li>
                            <li><a class="text-muted orange" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted orange" href="#">Another one</a></li>
                            <li><a class="text-muted orange" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Additional Links</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Categories</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Resource</a></li>
                            <li><a class="text-muted" href="#">Resource name</a></li>
                            <li><a class="text-muted" href="#">Another resource</a></li>
                            <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Ekko</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <p class="text-sm-center text-muted">@ Phoenix Charity</p>

        </footer>
      <?php wp_footer() ?>

    </body>
</html>