<?php
add_action('template_redirect', 'redirect');
function redirect() {
  if (is_home() && !is_paged()) :
    wp_redirect(get_permalink());
    exit;
  endif;
}


// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );


// Format the single post pagination
function FG_post_pagination($args = array()) {
  // $prev_link = get_previous_post_link('%link', $args['prev_text']);
  
  $prev_link = (get_previous_post_link()) ? get_previous_post_link('%link', $args['prev_text']) : '';
  $next_link = (get_next_post_link()) ? get_next_post_link('%link', $args['next_text']) : '';

  // Only add markup if there's somewhere to navigate to.
  if ( $prev_link || $next_link ) {
    echo _navigation_markup($prev_link . $next_link, ' ', ' ');
  }
}
add_filter('previous_post_link', 'post_link_attributes_prev');
add_filter('next_post_link', 'post_link_attributes_next');
function post_link_attributes_prev($output) { return str_replace('<a href=', '<a class="prev" href=', $output); }
function post_link_attributes_next($output) { return str_replace('<a href=', '<a class="next" href=', $output); }
?>