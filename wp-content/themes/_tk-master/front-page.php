<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

<!-- Slider -->
<div class="row">
    <div class="front-page-slider col-sm-12 col-md-12">
        <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
    </div><!-- .front-page-slider columns -->
</div><!-- .row -->

<!-- Main content area -->
<div class="row">
    <div class="front-page-box-img col-sm-12 col-md-5">
        <!-- The WordPress Loop -->
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

    </div><!-- front-page-box-img columns -->

    <div class="front-page-box-text col-sm-12 col-md-7">
        <?php get_template_part( 'content', get_post_format() ); ?>

    </div><!-- .front-page-box-text columns -->
</div><!-- .row -->

    <?php endwhile; ?>

		<?php _tk_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>