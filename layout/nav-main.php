	<?php    /**
		* Displays a navigation menu
		* @param array $args Arguments
		*/
		$args = array(
			'theme_location' => 'menu-lateral',
			// 'menu' => '',
			'container' => 'nav',
			'container_class' => 'nav',
			// 'container_id' => '',
			'menu_class' => 'nav__list',
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

<!-- <nav class="nav">
	<ul class="nav__list">
		<li class="nav__item"><a href="">Menú01</a></li>
		<li class="nav__item"><a href="">Menú02</a></li>
		<li class="nav__item"><a href="">Menú03</a></li>
	</ul>
</nav>

 -->