<?php
/**
 * Displays footer site info
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://www.shaoyaoju.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( '琚致远 ❤ %s', 'twentyseventeen' ), 'WordPress' ); ?>
	</a>
</div><!-- .site-info -->
