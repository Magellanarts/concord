<?php get_header(); ?>
<section class="hero text-centered">
    <div class="site-container">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/i/concord-plastics-logo.svg" alt="Concord Plastics, Inc.">

        <nav role="navigation" class="navigation navigation--primary">
            <li><a href="#services">Services</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </nav>
    </div>
</section>

<section class="gravity text-centered">
    <div class="site-container">
        <p class="gravity__intro"><strong><?php the_field('intro_headline'); ?></strong></p>

        <?php the_field('intro_text'); ?>
    </div>
</section>

<section class="cta">
    <div class="site-container grid grid4">
        <div class="grid-item grid-1 ">
            <div class="thumbnails">
                <?php
                if( have_rows('gravity_images') ):
                    while ( have_rows('gravity_images') ) : the_row(); ?>
                <a href="#"><img src="<?php the_sub_field('image'); ?>"></a>
                <?php
                    endwhile;
                endif;
                ?>

            </div>

        </div>

        <div class="grid-item grid-3 get-started">
            <div class="grid2 no-spacing grid">
                <div class=" grid-item text-centered get-started__cta">
                    <div class="get-started__heading">
                        <?php the_field('gravity_headline'); ?>
                    </div>

                    <a href="#" class="button">Get Started Now!</a>
                </div>
                <div class="grid-item get-started__list">
                    <ul class="check-list small">
                        <?php
                        if( have_rows('gravity_bullet_points') ):
                            while ( have_rows('gravity_bullet_points') ) : the_row(); ?>
                        <li><?php the_sub_field('bullet'); ?></li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>


        </div>

        <div class="cta-text text-centered">
            <p><?php the_field('call_to_action_headline'); ?></p>

            <i class="icon icon_down-arrow"></i>
        </div>
    </div>
</section>

<section id="services" class="services section">

    <div class="recycling">
        <h2>Materials Recycled</h2>

        <p>Rebates for Recycled Materials are based on quality and quantity.</p>

        <?php
        if( have_rows('recycling_materials') ):
            while ( have_rows('recycling_materials') ) : the_row(); ?>
            <h4><?php the_sub_field('material'); ?></h4>

            <?php the_sub_field('description'); ?>
        <?php
            endwhile;
        endif;
        ?>
    </div>

    <div class="site-container">
        <div class="text-centered">
            <div class="section-heading">Services</div>
        </div>

        <div class="grid grid4">
            <div class="grid-item grid-3">

                <?php
                if( have_rows('services') ):
                    while ( have_rows('services') ) : the_row(); ?>
                <h2><?php the_sub_field('service_type'); ?></h2>

                <ul class="check-list">
                    <?php
                    if( have_rows('service_bullet_points') ):
                        while ( have_rows('service_bullet_points') ) : the_row(); ?>
                    <li><?php the_sub_field('service_bullet_point'); ?></li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>

    </div>
</section>


<section id="process" class="process section">
    <div class="site-container">
        <div class="text-centered">
            <div class="section-heading">Process</div>
        </div>


        <ul class="process-list">

            <?php
            if( have_rows('process') ):
                while ( have_rows('process') ) : the_row(); ?>
            <li class="grid grid4">
                <div class="grid-item grid-1">
                    <img alt="<?php the_sub_field('process'); ?>" src="<?php the_sub_field('process_image'); ?>">
                </div>
                <div class="grid-item grid-3">
                    <h2><?php the_sub_field('process'); ?></h2>
                    <?php the_sub_field('process_description'); ?>
                </div>
            </li>
            <?php
                endwhile;
            endif;
            ?>
        </ul>

    </div>
</section>

<section id="testimonials" class=" section text-centered">
    <div class="site-container">
        <div class="text-centered">
            <div class="section-heading">Testimonials</div>
        </div>

        <div class="testimonials">
            <?php
            if( have_rows('testimonials') ):
                while ( have_rows('testimonials') ) : the_row(); ?>
            <div class="testimonial">
                <div class="testimonial__text"><?php the_sub_field('testimonial'); ?></div>

                <div class="testimonial__attribution">
                    <span><?php the_sub_field('attribution'); ?></span>
                    <!--span class="testimonial__attribution__name">Scott Greskovic</span> <span>Archbald, PA</span -->
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>


<section id="contact" class=" section">
    <div class="site-container">
        <div class="text-centered">
            <div class="section-heading">Contact</div>
        </div>

        <h2 class="alt text-centered">Please contact us for more information about our company.</h2>

        <div class="grid grid2">
            <div class="grid-item">
                <div class="contact-info">
                    <h3 class="contact-info__heading">Main Office</h3>
                    <address>
                        <div>225 Jaycee Drive</div>
                        <div>West Hazleton, PA 18202</div>
                    </address>
                </div>

                <div class="contact-info">
                    <h3 class="contact-info__heading">Warehouse</h3>
                    <address>
                        <div>500 Jaycee Drive</div>
                        <div>West Hazleton, PA 18202</div>
                    </address>
                </div>

                <div class="contact-info-numbers">
                    <div><span class="contact-info__label">tel:</span> <a href="tel:(570)453-0803">(570)453-0803</a></div>
                    <div><span class="contact-info__label">fax:</span> <a href="tel:(570)453-0806">(570)453-0806</a></div>
                </div>
            </div>

            <div class="grid-item">
                <h4 class="contact-info__sub-heading">General Information / Customer Service</h4>

                <div class="contact-info">
                    <h3 class="contact-info__heading">Marissa Kresge</h3>
                    <a href="mailto:marissa@concordplasticsinc.com">marissa@concordplasticsinc.com</a>
                </div>

                <div class="contact-info">
                    <h3 class="contact-info__heading">Karl A Sauer</h3>
                    <a href="mailto:kasauer@concordplasticsinc.com">kasauer@concordplasticsinc.com</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map-wrapper">
    <div class="map-overlay"></div>
    <div id="map-canvas"></div>
</div>

        <?php get_footer(); ?>