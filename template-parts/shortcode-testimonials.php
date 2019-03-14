<?php
/**
 * Template part for displaying events list in events shortcode
 *
 * @package Royal_Event
 */

?>

<?php $testimonials = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page'=> 6 ) ); ?>
<?php if ( $testimonials->have_posts() ) { ?>

<div class="testimonials-slider__container">

    <div class="testimonials-slider__left" onclick="jQuery('.testimonials-slider__container .slick-prev').trigger('click');"><i class="fas fa-angle-left"></i></div>

    <div class="testimonials-slider">

        <?php while ( $testimonials->have_posts() ) { $testimonials->the_post(); ?>
            <div class="testimonials-slider__slide">
                <div class="testimonials-slider__photo-container">
                    <?php echo the_post_thumbnail('testimonial'); ?>
                </div>
                <div class="testimonials-slider__text-container">
                    <div class="testimonials-slider__text">
                        <?php echo strip_tags( get_the_content() ); ?>
                    </div>
                    <div class="testimonials-slider__name">
                        <?php echo get_the_title(); ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>

    <div class="testimonials-slider__right" onclick="jQuery('.testimonials-slider__container .slick-next').trigger('click');"><i class="fas fa-angle-right"></i></div>

</div>

<script>
    window.onload = function() {
        jQuery('.testimonials-slider').slick({
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          adaptiveHeight: true
        });
    };
</script>

<?php } wp_reset_postdata(); ?>
