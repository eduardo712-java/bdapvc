<?php
//======================================================================
// Funções customizadas para CPT's
//======================================================================
require_once locate_template('/lib/custom/cpt.php');            // CPT Modelo



//-----------------------------------------------------
// Funções customizadas.
//-----------------------------------------------------

/**
 * Adiciona os subitens do menu de pedidos
 */
function pedidos_register_ref_page() {
    add_submenu_page(
        'edit.php?post_type=pedido',
        __( 'Pedidos Recebidos', 'textdomain' ),
        __( 'Pedidos Recebidos', 'textdomain' ),
        'manage_options',
        'edit.php?post_type=pedido&acp_filter%5B41a57f1d35c290%5D=1',
        //'edit.php?post_type=pedido&post_status=all&acp_filter%5B41a57f1d35c290%5D=1&acp_filter%5Bb42aa968a7efa0%5D&filter_action=Filtrar&action=-1&paged=1&action2=-1&ac-rules',
    );
    add_submenu_page(
        'edit.php?post_type=pedido',
        __( 'Pedidos em Expedição', 'textdomain' ),
        __( 'Pedidos em Expedição', 'textdomain' ),
        'manage_options',
        'edit.php?post_type=pedido&acp_filter%5B41a57f1d35c290%5D=2',
    );
    add_submenu_page(
        'edit.php?post_type=pedido',
        __( 'Pedidos Enviados', 'textdomain' ),
        __( 'Pedidos Enviados', 'textdomain' ),
        'manage_options',
        'edit.php?post_type=pedido&acp_filter%5B41a57f1d35c290%5D=3',
    );
    add_submenu_page(
        'edit.php?post_type=pedido',
        __( 'Pedidos Entregues', 'textdomain' ),
        __( 'Pedidos Entregues', 'textdomain' ),
        'manage_options',
        'edit.php?post_type=pedido&acp_filter%5B41a57f1d35c290%5D=4',
    );
}
add_action('admin_menu', 'pedidos_register_ref_page');


/**
 * Altera a ordem do item Rotas do menu de pedidos
 */
function move_rota_submenu_to_end() {
    global $submenu;

    $parent_slug = 'edit.php?post_type=pedido';

    // Espera até o submenu estar disponível
    if (!isset($submenu[$parent_slug])) return;

    // Procura o submenu da taxonomia "rota"
    $new_submenu = [];
    $target_item = null;

    foreach ($submenu[$parent_slug] as $item) {
        // Verifica se o link tem a taxonomia 'rota'
        if (strpos($item[2], 'taxonomy=rota') !== false) {
            $target_item = $item;
        } else {
            $new_submenu[] = $item;
        }
    }

    // Se achou o item, joga pro final
    if ($target_item) {
        $new_submenu[] = $target_item;
        $submenu[$parent_slug] = $new_submenu;
    }
}
add_action('admin_menu', 'move_rota_submenu_to_end', 100); // Prioridade alta




/**
 * Display callback for the submenu page.
 */
function pedidos_ref_page_callback() { 
    ?>
    <div class="wrap">
        <h1><?php _e( 'Produto Shortcode Reference', 'textdomain' ); ?></h1>
        <p><?php _e( 'Helpful stuff here', 'textdomain' ); ?></p>
    </div>
    <?php
}
?>