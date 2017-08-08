<?php

namespace Tribe\Project\Panels\Types;

use ModularContent\Fields;

class Accordion extends Panel_Type_Config {

	const NAME = 'accordion';

	const FIELD_IMAGE                = 'image';
	const FIELD_CONTENT              = 'content';
	const FIELD_ACCORDIONS           = 'accordions';
	const FIELD_ACCORDION_TITLE      = 'title';
	const FIELD_ACCORDION_CONTENT    = 'accordion_content';
	const FIELD_LAYOUT               = 'layout';
	const FIELD_LAYOUT_OPTION_RIGHT  = 'accordion-right';
	const FIELD_LAYOUT_OPTION_LEFT   = 'accordion-left';
	const FIELD_LAYOUT_OPTION_CENTER = 'center';

	protected function panel() {

		$panel = $this->handler->factory( self::NAME );
		$panel->set_template_dir( $this->ViewFinder );
		$panel->set_label( __( 'Accordion', 'tribe' ) );
		$panel->set_description( __( 'Display a series of accordions.', 'tribe' ) );
		$panel->set_thumbnail( $this->handler->thumbnail_url( 'module-accordion.jpg' ) );

		// Panel Layout.
		$panel->add_settings_field( new Fields\ImageSelect( [
			'name'    => self::FIELD_LAYOUT,
			'label'   => __( 'Layout', 'tribe' ),
			'options' => [
				self::FIELD_LAYOUT_OPTION_RIGHT  => $this->handler->layout_icon_url( 'module-accordion-right.png' ),
				self::FIELD_LAYOUT_OPTION_LEFT   => $this->handler->layout_icon_url( 'module-accordion-left.png' ),
				self::FIELD_LAYOUT_OPTION_CENTER => $this->handler->layout_icon_url( 'module-accordion-center.png' ),
			],
			'default' => self::FIELD_LAYOUT_OPTION_RIGHT,
		] ) );

		$panel->add_field( new Fields\TextArea( [
			'name'     => self::FIELD_CONTENT,
			'label'    => __( 'Content', 'tribe' ),
			'richtext' => true,
		] ) );

		$repeater = new Fields\Repeater( [
			'name'    => self::FIELD_ACCORDIONS,
			'label'   => __( 'Accordion Rows', 'tribe' ),
			'min'     => 1,
			'max'     => 10,
			'strings' => [
				'button.new'      => __( 'Add Accordion Row', 'tribe' ),
				'button.delete'   => __( 'Delete Accordion Row', 'tribe' ),
				'label.row_index' => _x( 'Accordion Row %{index} |||| Row %{index}', 'tribe' ),
			],
		] );

		$repeater->add_field( new Fields\Text( [
			'name'  => self::FIELD_ACCORDION_TITLE,
			'label' => __( 'Accordion Title', 'tribe' ),
		] ) );

		$repeater->add_field( new Fields\TextArea( [
			'name'     => self::FIELD_ACCORDION_CONTENT,
			'label'    => __( 'Accordion Content', 'tribe' ),
			'richtext' => true,
		] ) );

		$panel->add_field( $repeater );

		return $panel;
	}
}