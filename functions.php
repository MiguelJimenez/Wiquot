<?php 
// Tamaño del excerpt
function new_excerpt_length($length)
{
	return 12;
}
add_filter( 'excerpt_length', 'new_excerpt_length');


// Añadimos imágenes destacadas
add_theme_support('post-thumbnails' );

// Añadimos menús
register_nav_menus(array(
		'menu-lateral'	=> 'Menú lateral fijo',
		'menu-tabs'		=> 'Tabs horizontales'
	));

// Añadimos widgets
// register_sidebars( 2, array('name' => 'Zona %d')); // sidebar-1, sidebar-2

   // ESTO ES OTRA FORMA DE REGISTRAR WIDGETS
	$args = array(
		'name'          => __( 'Barra lateral derecha', 'theme_text_domain' ),
		'id'            => 'sidebar-curso-wp',
		'description'   => 'Barra lateral para que pongas lo que te da la gana',
		'class'         => 'clase-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $args );

	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$sidebar_footer = array(
			'name'          => __( 'Footer', 'theme_text_domain' ),
			'id'            => 'footer-curso-wp',
			'description'   => 'Footer del sitio',
			'class'         => 'clase-footer',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>'
		);
	
		register_sidebar( $sidebar_footer );
	



