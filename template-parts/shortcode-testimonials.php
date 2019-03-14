<?php
/**
 * Template part for displaying events list in events shortcode
 *
 * @package Royal_Event
 */

?>

<?php $events = new WP_Query( array( 'post_type' => 'event', 'posts_per_page'=> 6 ) ); ?>
<?php if ( $events->have_posts() ) { ?>

<div class="re-events-container">

    <div class="re-events__list-column re-events__list-column_1st-column">
        <ul class="re-events__list">
            <?php $i = 1; while ( $events->have_posts() && $i < 4 ) { $events->the_post(); ?>
                <li>
                    <div class="re-events__text">
                        <p class="re-events__title"><?php echo get_the_title(); ?></p>
                        <p class="re-events__description"><?php echo mb_substr( strip_tags( get_the_content() ), 0, 80); ?></p>
                    </div>
                    <div class="re-events__number">0<?php echo $i; ?></div>
                </li>
            <?php $i++; } ?>
        </ul>
    </div>

    <div class="re-events__image-column">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ev.png" width="430" height="430" alt="Events Thumb">
    </div>

    <div class="re-events__list-column re-events__list-column_2nd-column">
        <ul class="re-events__list">
            <?php while ( $events->have_posts() && $i > 3 ) { $events->the_post(); ?>
                <li>
                    <div class="re-events__text">
                        <p class="re-events__title"><?php echo get_the_title(); ?></p>
                        <p class="re-events__description"><?php echo mb_substr( strip_tags( get_the_content() ), 0, 80); ?></p>
                    </div>
                    <div class="re-events__number">0<?php echo $i; ?></div>
                </li>
            <?php $i++; } ?>
        </ul>
    </div>

</div>

<?php } wp_reset_postdata(); ?>
