<?php global $geniuscourses_options; ?>
<div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5 flu">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <?php if($geniuscourses_options['title_one']){ ?><h4 class="text-uppercase text-light mb-4"><?php echo esc_html($geniuscourses_options['title_one']); ?></h4><?php } ?>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-body small mr-3">   123 Street, New York, USA</i></p>
            <p class="mb-2"><i class="fa fa-phone-alt text-body small mr-3">   +012 345 67890 </i></p>
            <p><i class="fa fa-envelope text-body small mr-3"></i>   info@example.com</p>
            <h6 class="text-uppercase text-white py-2">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
            <div class="d-flex flex-column justify-content-start">

                <?php
                    echo strip_tags(wp_nav_menu(
                      array(
                              'theme_location' => 'footer_nav',
                          'container' => false,
                          'echo' => false,
                          'items_wrap' => '%3$s',
                          'depth' => 0
                      )
                    ), '<a>');
                ?>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a>
                <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help & FQAs</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
            <div class="row mx-n1">
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">About</h4>
            <p class="text-body small">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
            <p class="text-body small">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
    <?php if($geniuscourses_options['copyrights']) {
        echo wp_kses_post($geniuscourses_options);
    } else {?>
    <p class="mb-2 text-center text-body small">&copy; <?php esc_html_e('Your Site Name. All Rights Reserved.', 'geniuscourses'); ?></p>
    <p class="m-0 text-center text-body small"><?php esc_html_e('Designed by Team Name', 'geniuscourses'); ?></p>
    <?php }?>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>



<?php wp_footer(); ?>

</body>
</html>
