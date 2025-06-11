<?php
/**
 * ----------------------------------------------------------
 * Modificações personalizadas em colunas.
 * ----------------------------------------------------------
 */


/**
 * ----------------------------------------------------------
 * Adiciona o filtro por Autor para Posts.
 * ----------------------------------------------------------
 */
function filter_column_by_the_author() {
  $params = array(
      'name' => 'author', // this is the "name" attribute for filter <select>
      'show_option_all' => 'Todos os autores' // label for all authors (display posts without filter)
  );

  if (isset($_GET['user']))
    $params['selected'] = $_GET['user']; // choose selected user by $_GET variable

  wp_dropdown_users($params); // print the ready author list
}

//add_action('restrict_manage_posts', 'filter_column_by_the_author');


/**
 * ----------------------------------------------------------
 * Adiciona novas colunas para o CPT 'trabalho'.
 * ----------------------------------------------------------
 */
function add_cpt_columns($columns) {
  $columns = array(
      'cb' => '<input type="checkbox" />', // Padrão para selecionar itens
      'title' => 'Title',
      'author' => 'Author',
      'taxonomy-categoria' => 'Categoria',
      'date' => 'Date',
  );
  return $columns;
}
//add_action("manage_trabalho_custom_column", "fill_cpt_columns"); // alterar 'trabalho' pelo nome do CPT criado.


/**
 * ----------------------------------------------------------
 * Adiciona o conteúdo das novas colunas para o CPT 'trabalho'.
 * ----------------------------------------------------------
 */
function fill_cpt_columns($column) {
  global $post;
  if ($column == 'thumbnail') {
    echo wp_get_attachment_image(get_field('page_image', $post->ID), array(200, 200));
  } elseif ($column == 'featured') {
    if (get_field('featured')) {
      echo 'Yes';
    } else {
      echo 'No';
    }
  }
}

//add_filter("manage_edit-trabalho_columns", "add_cpt_columns"); // alterar 'trabalho' pelo nome do CPT criado.

/**
 * ----------------------------------------------------------
 * Adiciona ordenação nas novas colunas para o CPT 'trabalho'.
 * ----------------------------------------------------------
 */
function sort_cpt_columns($columns) {
  $columns['taxonomy-categoria'] = 'taxonomy-categoria';
  return $columns;
}

//add_filter("manage_edit-trabalho_sortable_columns", "sort_cpt_columns");
?>
