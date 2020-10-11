    <footer id="fh5co-footer" role="contentinfo" style="background-image: url(<?php echo URLROOT; ?>/images/img_bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 fh5co-widget">
                    <h3>About PEERXP</h3>
                    <p>We help companies focus on innovation and product development while we take care of efficiently managing a complete software development cycle.</p>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p><small class="block">&copy; 2020 PEERXP.</small> </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo URLROOT; ?>/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo URLROOT; ?>/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo URLROOT; ?>/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="<?php echo URLROOT; ?>/js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="<?php echo URLROOT; ?>/js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="<?php echo URLROOT; ?>/js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="<?php echo URLROOT; ?>/js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo URLROOT; ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="<?php echo URLROOT; ?>/js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
    <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
    </script>
    </body>
</html>