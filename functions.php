<?php
if ( ! defined( 'ABSPATH' ) ) // Or some other WordPress constant
     exit;

/**
 * ----------------------------------------------------------
 * yeti lab includes
 * ----------------------------------------------------------
 */
require_once locate_template('/lib/utils.php');             // Funções Utilitárias
require_once locate_template('/lib/nav.php');               // Classe wp_bootstrap_navwalker
require_once locate_template('/lib/init.php');              // Configuração inicial do tema e constantes
require_once locate_template('/lib/columns.php');           // Modificações personalizadas em colunas
require_once locate_template('/lib/config.php');            // Configurações
require_once locate_template('/lib/titles.php');            // Títulos das páginas
require_once locate_template('/lib/pagination.php');        // Paginação
require_once locate_template('/lib/scripts.php');           // Scripts e folhas de estilo
require_once locate_template('/lib/blocks.php');            // Blocos de conteúdo
require_once locate_template('/lib/ajax.php');              // Funções em Ajax
require_once locate_template('/lib/custom.php');            // Funções customizadas
//require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
//require_once locate_template('/lib/sidebar.php');         // Sidebar class
//require_once locate_template('/lib/activation.php');      // Theme activation
//require_once locate_template('/lib/cleanup.php');         // Cleanup
//require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
//require_once locate_template('/lib/comments.php');        // Custom comments modifications
//require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
//require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
?>