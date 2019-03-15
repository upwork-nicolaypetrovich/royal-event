<?php
/**
 * Template part for displaying projects tiles in events shortcode
 *
 * @package Royal_Event
 */

$projects = new WP_Query( array( 'post_type' => 'project', 'posts_per_page'=> 5 ) );

if ( $projects->have_posts() ) {
$tiles = [];

while ( $projects->have_posts() ) {
    $projects->the_post();

    $tiles[] = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>

<div class="projects-tiles__container">
    <div class="projects-tiles__l11">
        <div class="projects-tiles__l21">
            <div class="projects-tiles__l31 projects-tiles__img" style="background: url(<?php echo $tiles[0]; ?>)"></div>
            <div class="projects-tiles__l32 projects-tiles__img" style="background: url(<?php echo $tiles[1]; ?>)"></div>
        </div>
        <div class="projects-tiles__l22">
            <div class="projects-tiles__l33 projects-tiles__img" style="background: url(<?php echo $tiles[2]; ?>)"></div>
            <div class="projects-tiles__l34 projects-tiles__img" style="background: url(<?php echo $tiles[3]; ?>)"></div>
        </div>
    </div>
    <div class="projects-tiles__l12 projects-tiles__img" style="background: url(<?php echo $tiles[4]; ?>)"></div>
</div>

<?php } wp_reset_postdata(); ?>
