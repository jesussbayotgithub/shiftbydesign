<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}
else {
    if ( ! is_page_template() ) {
        get_header();
        get_template_part( 'template-parts/front-page/cover' );
        get_template_part( 'template-parts/front-page/services' );
        ?>

        <?php if ( get_theme_mod( 'show_main_content', 1 ) ) : ?>
        <section class="wp-bp-main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10" data-aos="fade-up" data-aos-easing="linear">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <h2>To diffentiate themeselves and stay competitive, business today are adopting the design thinking process as a capacity to put people at the heart of what they do.</h2>
                            <div class="block" ><?php the_content(); ?></div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <section class="whatdowedo">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12" data-aos="fade-down" data-aos-easing="linear">
                        <h2>What we do</h2>
                    </div>
                    <div class="col-md-12 col-lg-10">
                        <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                <div class="wwdo-tile">
                                    <img src="<?=THEME_IMAGE_URL?>/icon_custx.svg">
                                    <h3>Customer Experience and Service Design</h3>
                                    <p>
                                        Designing world class customer
                                        experiences and service delivery
                                        to create desirble human
                                        centered journeys and unlock
                                        what customer’s value most.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                <div class="wwdo-tile">
                                    <img src="<?=THEME_IMAGE_URL?>/icon_dtw.svg">
                                    <h3>Design Thinking Workshops</h3>
                                    <p>
                                        A practical hands on introduction
                                        to Design Thinking customized
                                        to inform and build your teams.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                <div class="wwdo-tile">
                                    <img src="<?=THEME_IMAGE_URL?>/icon_dspf.svg">
                                    <h3>Design Sprint Facilitation</h3>
                                    <p>
                                        Ideating and prototyping
                                        business challenges to create
                                        new opportunities through
                                        high energy design workshops.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                <div class="wwdo-tile">
                                    <img src="<?=THEME_IMAGE_URL?>/icon_dspf.svg">
                                    <h3>Brand Strategy and Design</h3>
                                    <p>
                                        Creating strong brands with
                                        meaning to connect customers
                                        to compelling brand stories.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                <div class="wwdo-tile">
                                    <img src="<?=THEME_IMAGE_URL?>/icon_brandStrat.svg">
                                    <h3>Customer Research</h3>
                                    <p>
                                        Putting your customers at the
                                        heart of the design project to
                                        gain deep insights and discover
                                        unmet needs.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                <div class="wwdo-tile">
                                    <img src="<?=THEME_IMAGE_URL?>/icon_busdc.svg">
                                    <h3>Business Design & Coaching</h3>
                                    <p>
                                        Helping companies be more
                                        effective based on real world
                                        experiences and proven design
                                        thinking methods.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                <div class="wwdo-tile">
                                    <img src="<?=THEME_IMAGE_URL?>/icon_uxd.svg">
                                    <h3>UX Design</h3>
                                    <p>
                                        Digital and physical usability
                                        and function to design
                                        meaningful interactions with
                                        products and services.
                                    </p>
                                </div>
                            </div>


                        </div>
                  </div>
                </div>
            </div>
        </section>

        <section class="brands">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8" data-aos="fade-down" data-aos-easing="linear">
                        <h2>
                            With 25+ years working in the creative industry, we’ve had the opportunity
                            to work on and with some great brands, including the following:
                        </h2>
                    </div>

                    <div class="col-md-10" data-aos="fade-down" data-aos-easing="linear">

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Air-NZ-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/British-Airways-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Bridgestone-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Firestone-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Frucor-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Goodlife-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Kelloggs-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Laminex-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Lion-Nathan-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Melanoma-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Qantas logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Mercedes-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Tip-Top-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/V-logo.jpg">
                            </div>
                        </div>

                        <div class="brand-wrapper">
                            <div class="brand-block">
                                <img src="<?=THEME_IMAGE_URL?>/logo/Virgin-Australia.jpg">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="whoweare">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-10" data-aos="fade-down">
                        <h2>Who we are</h2>
                    </div>
                    <div class="col-md-11 col-lg-10" data-aos="fade-down">
                        <div class="row">
                            <div class="col-md-6 profile" data-aos="fade-up-right" data-aos-easing="linear">
                                <img src="http://via.placeholder.com/550x650">
                            </div>
                            <div class="col-md-6 profile" data-aos="fade-up-left" data-aos-easing="linear">
                                <img src="http://via.placeholder.com/550x650">
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>

        <?php
        get_footer();
    }
    else {
        include( get_page_template() );
    }
}
?>
