<?php
/**
 * Template part for displaying team tiles in events shortcode
 *
 * @package Royal_Event
 */

?>

<?php $team = new WP_Query( array( 'post_type' => 'team', 'posts_per_page'=> 4 ) ); ?>
<?php if ( $team->have_posts() ) { ?>

<div class="team-tiles__container">

        <?php while ( $team->have_posts() ) { $team->the_post(); ?>
            <div class="team-tiles__tile">
                <div class="team-tiles__photo-container">
                    <?php echo the_post_thumbnail('team'); ?>
                </div>
                <div class="team-tiles__text-container">
                    <div class="team-tiles__name">
                        <?php echo get_the_title(); ?>
                    </div>
                    <div class="team-tiles__text">
                        <?php echo strip_tags( get_the_content() ); ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>

</div>

<?php } wp_reset_postdata(); ?>
