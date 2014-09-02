<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->
<div class="fat-footer">
    <div class="footer-left">
        <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
            <div id="footer-left" class="footer-left widget-area" role="complementary">
                <?php dynamic_sidebar( 'footer-left' ); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </div>
    <div class="footer-center">
        <?php if ( is_active_sidebar( 'footer-center' ) ) : ?>
            <div id="footer-left" class="footer-center widget-area" role="complementary">
                <?php dynamic_sidebar( 'footer-center' ); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </div>
    <div class="footer-right">
        <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
            <div id="footer-left" class="footer-right widget-area" role="complementary">
                <?php dynamic_sidebar( 'footer-right' ); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </div>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<?php do_action( '_tk_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_tk' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_tk' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', '_tk' ), '_tk', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
				</div><!-- close .site-info -->

			</div><!-- .site-footer-inner col-sm-12 -->
		</div><!-- .row (site-footer) -->
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>