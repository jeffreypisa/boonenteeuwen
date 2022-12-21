<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = Timber::query_post();


$context['post'] = $post;

$randompost = array(
  'post_type'			  => 'cases',
	'post_status' => 'publish',
	'orderby' => 'rand', 
	'order' => 'DESC',
	'posts_per_page'  => 2,
);	

$context['projecten'] = Timber::query_posts($randompost);



if ( post_password_required( $post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array( 'single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig' ), $context );
}