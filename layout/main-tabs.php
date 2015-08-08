	<?php    /**
		* Displays a navigation menu
		* @param array $args Arguments
		*/
		$args = array(
			'theme_location' => 'menu-tabs',
			// 'menu' => '',
			'container' => 'div',
			// 'container_class' => 'main__nav',
			// 'container_id' => '',
			'menu_class' => 'main__nav',
			// 'menu_id' => '',
			// 'echo' => true,
			// 'fallback_cb' => 'wp_page_menu',
			// 'before' => '',
			// 'after' => '',
			// 'link_before' => '',
			// 'link_after' => '',
			// 'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			// 'depth' => 0,
			// 'walker' => ''
		);
	
		wp_nav_menu( $args ); ?>

	<!-- <div class="main__tabs">
		<a href="">Opción01</a>
		<a href="">Opción02</a>
		<a href="">Opción03</a>
		<a href="">Opción04</a>
	</div> -->