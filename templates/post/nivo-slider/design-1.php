<?php
/**
 * Template for Nivo Slider Post Design 1
 *
 * @package SlidersPack - All In One Image Sliders
 * @since 1.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$data_title = '';

if( $show_title || $show_content || $show_category ) {
	if( $show_category ) {
		$data_title .= "<div class='wp-spaios-cat'>".wp_kses_post($cat_name)."</div>";
	}

	if( $show_title ) {
		$data_title .= "<div class='wp-spaios-title'><a href='".esc_url( $post_link )."' target='".esc_attr( $link_target )."'>".wp_kses_post($post_title)."</a></div>";
	}

	if( $show_content ) {
		$data_title .= "<div class='wp-spaios-content'>".wp_kses_post($post_content)."</div>";
	}

	if( $show_readmore ) {
		$data_title .= "<a class='wp-spaios-readmore-btn' href='".esc_url( $post_link )."' target='".esc_attr( $link_target )."'>".wp_kses_post($readmore_text)."</a>";
	}
}

// If fancy box is there
if( $fancy_box && $post_image ) { ?>
	<a class="wp-spaios-img-link" href="<?php echo esc_url( $post_image ); ?>" data-fancybox="wordpress-post" data-options="<?php echo htmlspecialchars(json_encode( $fancy_conf )); ?>">
		<img class="wp-spaios-slider-image" src="<?php echo esc_url( $post_image ); ?>" title="<?php echo esc_attr( $data_title ); ?>" />
	</a>
<?php } elseif( $post_image ) { ?>
	<a class="wp-spaios-img-link" href="<?php echo esc_url( $post_link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
		<img class="wp-spaios-slider-image" src="<?php echo esc_url( $post_image ); ?>" title="<?php echo esc_attr( $data_title ); ?>" />
	</a>
<?php } ?>