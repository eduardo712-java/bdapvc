<?php
/**
 * ----------------------------------------------------------
 * Título das páginas.
 * ----------------------------------------------------------
 */


/**
 * ----------------------------------------------------------
 * Gera o título da página inicial dinamicamente.
 * ----------------------------------------------------------
 */
function yeti_bootstrap_title_for_home($title) {
  if (empty($title) && ( is_home() || is_front_page() )) {
    return bloginfo() . ' &#45; ' . get_bloginfo('description');
  } else {
    return $title . ' &#45; ' . get_bloginfo();
  }
}

add_filter('wp_title', 'yeti_bootstrap_title_for_home');
?>
