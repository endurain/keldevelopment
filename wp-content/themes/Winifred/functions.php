<?php
/**
 * Winifred functions and definitions
 *
 *
 *
 * @package WordPress
 * @subpackage Winifred
 * @since 1.0.0
 */


function sections_endpoint ( $request_data ) {
  $args = array(
    'post_type' => 'post',
    'posts_per_page' =>-1,
    'numberposts' =>-1
  );
  $posts = get_posts($args);
  foreach ($posts as $key => $post) {
    $posts [$key]->acf = get_fields($posts->ID);
  }
  return $posts;
}

add_action('rest_api_init', function () {
  register_rest_route( 'sections/v1', '/post/', array(
    'methods' => 'GET',
    'callback' => 'sections_endpoint'
  ));
});
