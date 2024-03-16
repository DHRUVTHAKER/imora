<?php
/**
 * Button View Class
 *
 * @package jeg-elementor-kit
 * @author Jegtheme
 * @since 1.2.0
 */

namespace Jeg\Elementor_Kit\Elements\Views;

/**
 * Class Button_View
 *
 * @package Jeg\Elementor_Kit\Elements\Views
 */
class Button_View extends View_Abstract {
	/**
	 * Build block content
	 */
	public function build_content() {
		$label         = esc_attr( $this->attribute['sg_content_label'] );
		$id            = esc_attr( $this->attribute['sg_content_id'] );
		$class         = esc_attr( $this->attribute['sg_content_class'] );
		$link          = $this->attribute['sg_content_link'];
		$icon_position = $this->attribute['sg_content_icon_position'];
		$icon_attr     = array();

		if ( $this->attribute['st_icon_normal_color_responsive'] || $this->attribute['st_icon_hover_color_responsive'] ) {
			$icon_attr['class'][] = 'icon-colored';
		}

		$icon = 'yes' === $this->attribute['sg_content_icon_enable'] ? $this->render_icon_element( $this->attribute['sg_content_icon'], $icon_attr ) : '';

		if ( 'before' === $icon_position ) {
			$label = $icon . $label;
		} else {
			$label = $label . $icon;
		}

		$label = $this->render_url_element( $link, null, 'jkit-button-wrapper', $label );

		return $this->render_wrapper( 'button', $label, array( $class, 'icon-position-' . $icon_position ), array(), $id );
	}
}
