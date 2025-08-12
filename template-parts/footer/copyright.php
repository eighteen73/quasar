<?php
/**
 * The Copyright
 *
 * Title: Footer: copyright
 * Slug: footer/copyright
 *
 * @package Quasar
 */

?>

<div class="site-footer__copyright">
	<?php
	printf(
		esc_html__( '&#169; %1$s %2$s', 'quasar' ),
		esc_html( date_i18n( 'Y' ) ),
		esc_html( get_bloginfo( 'name' ) ),
	);
	?>
</div>
