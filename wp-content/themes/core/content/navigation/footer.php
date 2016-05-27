<?php // Menu: Footer
use Tribe\Project\Nav\Walker\Core_Walker_Nav_Menu;

if( has_nav_menu( 'footer' ) ) { ?>

	<nav>

		<h5 class="visual-hide">Secondary Navigation</h5>

		<ol>
			<?php
			$defaults = array(
				'theme_location'  => 'footer',
				'container'       => false,
				'container_class' => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'depth'           => 1,
				'items_wrap'      => '%3$s',
				'walker'          => new Core_Walker_Nav_Menu,
				'fallback_cb'     => false
			);
			wp_nav_menu( $defaults ); ?>
		</ol>

	</nav>

<?php } ?>