<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */

add_action('init', 'cursos_register');
function cursos_register() {
	 $labels = array(
<<<<<<< HEAD
			'name' => 'Instituições',
			'singular_name' => 'Instituição',
=======
			'name' => 'Cursos',
			'singular_name' => 'Cursos',
>>>>>>> cc70505338358502181738e458a67ae37cff1e42
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
<<<<<<< HEAD
			'hierarchical' => false,
=======
			'hierarchical' => true,
>>>>>>> cc70505338358502181738e458a67ae37cff1e42
			'has_archive' => true,
			'taxonomy' => array('categoria'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
<<<<<<< HEAD
			'rewrite' => array('slug' => 'instituicao')
	  );
	register_post_type('instituicao',$args);
}

register_taxonomy("categoria", array("instituicao"),
=======
			'rewrite' => array('slug' => 'curso')
	  );
	register_post_type('cursos',$args);
}

register_taxonomy("categoria", array("cursos"),
>>>>>>> cc70505338358502181738e458a67ae37cff1e42
	array(
		"hierarchical" => true,
		"label" => "categoria",
		"singular_label" => "categoria",
<<<<<<< HEAD
		'rewrite' => array( 'slug' => 'categoria-instiuição' )
	)
);
=======
		'rewrite' => array( 'slug' => 'categoria-cursos' )
	)
);

add_action('init', 'depoimentos_register');
function depoimentos_register() {
	 $labels = array(
			'name' => 'Depoimentos',
			'singular_name' => 'Depoimento',
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
			'taxonomy' => array('categoria-depoimento'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'depoimento')
	  );
	register_post_type('depoimento',$args);
}
>>>>>>> cc70505338358502181738e458a67ae37cff1e42
