<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jewelry
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'vh_jewelry' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'vh_jewelry' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'vh_jewelry' ), 'vh_jewelry', '<a href="https://github.com/Andriyivna">Viktoria Herman</a>' );
				?>
		</div><!-- .site-info -->
        <hr class="theme-divider">
        <hr class="theme-divider">
        <div class="footer-content">
            <?php the_custom_logo(); ?>

            <nav  class="social-navigation">
                <!--            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'vh_jewelry' ); ?><!--</button>-->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'social-menu',
                        'container_class'=> 'stack-on-mobile'
                    )
                );
                ?>
        </div>

        </nav><!-- #site-navigation -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
