<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */

add_action('init', 'cursos_register');
function cursos_register() {
	 $labels = array(
			'name' => 'Instituições',
			'singular_name' => 'Instituição',
			'all_items' => 'Todas',
			'add_new' => 'Adicionar',
			'add_new_item' => 'Adicionar',
			'edit_item' => 'Editar',
			'new_item' => 'Novo',
			'view_item' => 'Ver',
			'search_items' => 'Procurar',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('categoria'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'instituicao')
	  );
	register_post_type('instituicao',$args);
}

register_taxonomy("categoria", array("instituicao"),
	array(
		"hierarchical" => true,
		"label" => "categoria",
		"singular_label" => "categoria",
		'rewrite' => array( 'slug' => 'categoria-instiuição' )
	)
);
