<?php
/**
 * Template for Nivo Slider ACF Gallery Design 1
 *
 * @package SlidersPack - All In One Image Sliders
 * @since 1.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if( $fancy_box ) { ?>
	<a class="wp-spaios-img-link" href="<?php echo esc_url( $image ); ?>" data-fancybox="acf-gallery" data-options="<?php echo htmlspecialchars(json_encode( $fancy_conf )); ?>">
		<img class="wp-spaios-slider-image" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>" title="<?php echo esc_attr( $captions ); ?>" />
	</a>
<?php } else { ?>
	<img class="wp-spaios-slider-image" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>" title="<?php echo esc_attr( $captions ); ?>" />
<?php } ?>