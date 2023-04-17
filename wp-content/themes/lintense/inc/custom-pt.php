<?php
class CustomPT {

	public function register(){
		add_action('init', [$this, 'wporg_custom_post_type']);
	}

	public function wporg_custom_post_type(){
		register_post_type('gallery',
			array(
				'labels'      => array(
					'name'          => __('Galleries', 'lintense'),
					'singular_name' => __('Gallery', 'lintense'),
				),
					'public'      => true,
					'has_archive' => false,
					'hierarchical' => true,
					'exclude_from_search' => true,
					'supports'=> ['thumbnail', 'title', 'editor'],
					'show_in_menu' => 'custom_theme',
					'publicly_queryable'  => false
			)
		);

		register_taxonomy('category', 'gallery', array(
	       'label' => 'new gallery',
	       'public' => true,
	    ));

	    register_post_type('team',
	    	array(
	    		'labels'      => array(
	    			'name'          => __('Teams', 'lintense'),
	    			'singular_name' => __('Team', 'lintense'),
	    		),
	    			'public'      => true,
	    			'has_archive' => false,
	    			// 'hierarchical' => true,
	    			'exclude_from_search' => true,
	    			'supports'=> ['thumbnail', 'title', 'editor'],
	    			'show_in_menu' => 'custom_theme',
	    			'publicly_queryable'  => false
	    	)
	    );
	}
}

$cpt = new CustomPT();
$cpt->register();