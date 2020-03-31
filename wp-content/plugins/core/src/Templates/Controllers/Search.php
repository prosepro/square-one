<?php

namespace Tribe\Project\Templates\Controllers;

use Tribe\Project\Templates\Component_Factory;
use Tribe\Project\Templates\Controllers\Content\Header\Subheader;
use Twig\Environment;

class Search extends Index {
	protected $path = 'search.twig';

	public function __construct(
		Environment $twig,
		Component_Factory $factory,
		Header $header,
		Subheader $subheader,
		Content\Search\Item $item,
		Footer $footer
	) {
		parent::__construct( $twig, $factory, $header, $subheader, $item, $footer );
	}

}