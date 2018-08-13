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
                    <div class="col-md-10 col-lg-8" data-aos="fade-up" data-aos-easing="linear">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <h2><?=the_field('sub_header');?></h2>
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
                            <?php if( have_rows('what_we_do_tile') ): ?>
                                <?php while ( have_rows('what_we_do_tile') ) : the_row();?>
                                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12 wwdo-list" data-aos="flip-left">
                                    <div class="wwdo-tile">
                                        <div class="wwedo-icon">
                                            <?php
                                            $img_id = get_sub_field('wwdo_image');
                                            echo wp_get_attachment_image(  $img_id , "Full" );  ?>
                                        </div>
                                        <h3><?=the_sub_field('wwdo_title'); ?></h3>
                                        <p><?=the_sub_field('wwdo_description'); ?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                  </div>
                </div>
            </div>
        </section>

        <section class="brands">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8" data-aos="fade-down" data-aos-easing="linear">
                        <h2><?=the_field('brand_text');?></h2>
                    </div>

                    <div class="col-md-10" data-aos="fade-down" data-aos-easing="linear">
                    <?php if( have_rows('company_list_images') ): ?>
                        <?php while ( have_rows('company_list_images') ) : the_row();?>
                            <div class="brand-wrapper">
                                <div class="brand-block">
                                    <?php
                                    $comp_img_id = get_sub_field('image');
                                    echo wp_get_attachment_image(  $comp_img_id  , "Full" );  ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>

        <section class="whoweare" >
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-10" data-aos="fade-down">
                        <h2>Who we are</h2>
                    </div>
                    <div class="col-md-11 col-lg-10 col-sm-12" data-aos="fade-down">
                        <div class="row">
                        <?php if( have_rows('who_we_are_tile') ): ?>
                            <?php while ( have_rows('who_we_are_tile') ) : the_row();?>
                                <div class="col-md-6 col-lg-6 col-sm-12 profile">
                                    <?php
                                    $comp_img_id = get_sub_field('who_we_are_image');
                                    echo wp_get_attachment_image(  $comp_img_id  , "Full", array( "class" => "img-responsive" ) );  ?>
                                    <div class="wware-info">
                                        <h3><?=get_sub_field('staff_name');?></h3>
                                        <p><?=get_sub_field('staff_position');?></p>
                                        <label><a href="tel:<?=preg_replace('/\s+/', '', get_sub_field('contact_number'));?>"><?=get_sub_field('contact_number');?></a></label>
                                        <label class="mail"><a href="mailto:<?=get_sub_field('staff_email');?>"><?=get_sub_field('staff_email');?></a></label>
                                        <div class="profile-soc-media">
                                            <a href="<?=get_sub_field('linkedin');?>" title="<?=get_sub_field('linkedin');?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                         </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="contactSection">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-sm-12 contact-Info"  data-aos="fade-up" data-aos-easing="linear">
                        <h2 class="contact-hdr">Contact us</h2>
                        <?php echo do_shortcode('[contact-form-7 id="67" title="Contact Form"]');?>
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
