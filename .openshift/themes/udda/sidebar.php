<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>


	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
    <hr />
    <a href="http://www.selectedoffice.se"><img style="width:70%; height:70%; margin-left:25px; margin-top:10px;" src="<?php echo get_template_directory_uri(); ?>/images/spons/spons1.png" /></a>
    <a href="http://www.s-o.se"><img style="width:70%; height:70%; margin-left:25px; margin-top:30px; margin-bottom:30px;" src="<?php echo get_template_directory_uri(); ?>/images/spons/spons2.png" /></a>
</div><!-- #secondary -->
