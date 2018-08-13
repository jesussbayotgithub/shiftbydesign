<?php
$default_cover_title = get_bloginfo( 'name' );
$default_cover_lead = get_bloginfo( 'description' );
?>
<section class="jumbotron text-center wp-bs-4-jumbotron border-bottom text-white" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
    <div class="wp-bp-jumbo-overlay">
        <div class="container-fluid">
            <div class="col hp-title">
                <h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'front_cover_lead', $default_cover_lead ) ); ?></h1>
                <?php //echo wp_kses_post( get_theme_mod( 'front_cover_title', $default_cover_title ) ); ?>
            </div>
         </div>
    </div>
    <div class="cover-overlay"></div>
    <video class="section-video" preload="auto" autoplay loop muted="muted">
        <?php
        $vmp4 = get_field('video_mp4');
        $vwebm = get_field('video_webm');
        $vogg = get_field('video_ogg');
        ?>
        <?php if(!empty($vmp4)){?><source src="<?=$vogg;?>" type="video/mp4"><?php } ?>
        <?php if(!empty($vwebm)){?><source src="<?=$vwebm;?>" type="video/webm"><?php } ?>
        <?php if(!empty($vogg)){?><source src="<?=$vmp4?>" type="video/ogg"><?php } ?>
    </video>
</section>
