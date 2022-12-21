<?php 

  function create_posttype() {
    
  	register_post_type( 'cases',
  	// CPT Options
  		array(
  			'labels' => array(
  				'name'                  => __( 'Projecten' ),
  				'singular_name'         => __( 'Project' ),
      		'all_items'             => __( 'Alle projecten' ),
      		'add_new_item'          => __( 'Nieuw project toevoegen' ),
      		'new_item'              => __( 'Nieuw project' ),
          'add_new'               => __( 'Nieuw project' ),
      		'edit_item'             => __( 'Bewerk project' ),
      		'update_item'           => __( 'Update project' ),
      		'view_item'             => __( 'Bekijk project' ),
      		'search_items'          => __( 'Zoek project' ),
  			),
  			'menu_icon'               => 'dashicons-portfolio',
  			'public'                  => true,
  			'has_archive'             => true,
  			'rewrite'                 => array('slug' => 'projecten'),
  			'supports'                => array( 'title', 'editor', 'thumbnail' ),
  		)
  	);
  		
  }
  // Hooking up our function to theme setup
  add_action( 'init', 'create_posttype' ); 

?>