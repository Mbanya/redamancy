<footer class="site-footer">

    <div class="container">
        <div class="row">


            <div class="footer-message">
                <div class="heading">
                    <p class="h_subtitle">Redamancy Vineyards Promises</p>
                    @if(Request::is('/'))
                    <h2 class="h_title">Unaccustomed Pleasure</h2>
                    @elseif(Request::is('our-story'))
                        <h2>Resolute Commitment to Nature</h2>
                    @elseif(Request::is('shop*'))
                        <h2>The Propensity to Share</h2>
                    @elseif(Request::is('contact'))
                        <h2>
                            Uninterrupted Musing
                        </h2>
                    @endif
                </div>
            </div>


{{--            <div class="footer-widgets col-md-12">--}}


{{--            </div>--}}


            <div class="footer-extras">

                <!-- Begin Footer Navigation -->
                <div class="gg-footer-menu">
                    <ul id="footer-menu" class="nav navbar-nav">
                        <li id="menu-item-2354" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2354"><a href="#">FAQ</a></li>
                        <li id="menu-item-2355" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2355"><a href="#">Terms</a></li>
                        <li id="menu-item-2356" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2356"><a href="#">Privacy</a></li>
                        <li id="menu-item-2357" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2357"><a href="#">Returns</a></li>
                    </ul></div>            <!-- End Footer Navigation -->

                <!-- Begin Footer Social -->

                <div class="footer-social">
                    <ul>
                        <li><a href="http://www.google.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.google.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.google.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- End Footer Social -->

                <!-- Copyright -->
                <div class="footer-copyright">
                    &copy; <?php echo date('Y') ?> REDAMANCY.  All rights reserved            </div>


            </div><!-- /footer-extras -->


        </div><!-- .row -->
    </div><!-- /.container -->
</footer>
