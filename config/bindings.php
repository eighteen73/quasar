<?php
/**
 * Bindings are all of the classes from includes/classes that
 * need to be registered in the theme. This is typically anything
 * not in the includes/classes/Tools folder.
 *
 * @package Quasar
 */

return [
	Quasar\Setup::class,
	Quasar\Enqueue::class,
	Quasar\Editor\Blocks::class,
	Quasar\Editor\Patterns::class,
	Quasar\Editor\TemplateParts::class,
	Quasar\ThirdParty\GravityForms::class,
	Quasar\ThirdParty\WooCommerce\Setup::class,
	Quasar\ThirdParty\WooCommerce\Account::class,
	Quasar\ThirdParty\WooCommerce\SingleProduct::class,
];
