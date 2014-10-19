<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
            <?php if ( has_nav_menu( 'secondary' ) ) : ?>
            <nav role="navigation" class="navigation navigation-udda-footer site-navigation secondary-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
            </nav>
            <?php endif; ?>
            
		</div><!-- #main -->    

		<footer id="colophon" class="site-footer" role="contentinfo">
            <div id="udda-info">
                Ung Depression och Dess Anhöriga<br />
                Organisationsnummer: 802.474-1335<br />
                info@udda.org
            </div>
			<a href="http://www.facebook.com/udda.org"><img class="social" src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.png"/></a>
            <a href="http://twitter.com/uddaorg"><img class="social" src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.png"/></a>
            <a href="http://instagram.com/uddaorg"><img class="social" src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.png"/></a>

		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>