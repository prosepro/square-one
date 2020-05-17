<?php


namespace Tribe\Project\Theme\Config;


class Image_Sizes {
	public const CORE_FULL      = 'core-full';
	public const CORE_MOBILE    = 'core-mobile';
	public const SOCIAL_SHARE   = 'social-share';
	public const COMPONENT_CARD = 'component-card';
	public const FOUR_THREE     = 'four-three';
	public const FOUR_THREE_SMALL     = 'four-three-small';
	public const FOUR_THREE_LARGE     = 'four-three-large';

	private $sizes = [
		self::CORE_FULL      => [
			'width'  => 1600,
			'height' => 0,
			'crop'   => true,
		],
		self::CORE_MOBILE    => [
			'width'  => 1152,
			'height' => 0,
			'crop'   => true,
		],
		self::SOCIAL_SHARE   => [
			'width'  => 1200,
			'height' => 630,
			'crop'   => true,
		],
		self::COMPONENT_CARD => [
			'width'  => 600,
			'height' => 400,
			'crop'   => true,
		],
		self::FOUR_THREE_SMALL => [
			'width'  => 375,
			'height' => 281,
			'crop'   => true,
		],
		self::FOUR_THREE => [
			'width'  => 768,
			'height' => 576,
			'crop'   => true,
		],
		self::FOUR_THREE_LARGE => [
			'width'  => 1536,
			'height' => 1152,
			'crop'   => true,
		],
	];

	/**
	 * @return void
	 * @action after_setup_theme
	 */
	public function register_sizes() {
		foreach ( $this->sizes as $key => $attributes ) {
			add_image_size( $key, $attributes['width'], $attributes['height'], $attributes['crop'] );
		}
	}
}
