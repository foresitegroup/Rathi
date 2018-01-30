<?php
$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if (is_single()) :
  $PageTitle = get_the_title();

  $BlogInc = '
    <meta property="og:title" content="'.get_the_title().'" />
    <meta property="og:image" content="'.wp_get_attachment_url(get_post_thumbnail_id()).'" />
    <meta property="og:url" content="'.get_permalink().'" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="'.get_the_title().'">
    <meta name="twitter:description" content="'.get_the_excerpt().'">
    <meta name="twitter:image" content="'.wp_get_attachment_url(get_post_thumbnail_id()).'">
  ';
endif;

include "../header.php";
?>