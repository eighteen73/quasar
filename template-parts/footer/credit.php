<?php
/**
 * The footer credit
 *
 * Title: Footer: Credit
 * Slug: footer/credit
 *
 * @package Quasar
 */

?>
<a class="site-footer__credit" href="https://eighteen73.co.uk?utm_source=example.com&utm_medium=referral&utm_campaign=websitecredit" target="_blank">
	<span><?php esc_html_e( 'Site by web and creative agency', 'quasar' ); ?></span>

	<?php
	Quasar\display_svg(
		'eighteen73',
		[
			'class' => 'site-footer__credit-logo',
			'title' => 'eighteen73',
		]
	);
	?>
</a>
