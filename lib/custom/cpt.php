<?php
//======================================================================
// Funções customizadas do CPT
//======================================================================

//-----------------------------------------------------
// Gera o título e descrição com base em um campo ACF
//-----------------------------------------------------
add_action('acf/save_post', 'yb_fill_cpts_modelo', 10);
function yb_fill_cpts_modelo($post_id)
{

    // Sai caso não seja o CPT 'modelo'
    if (get_post_type($post_id) !== 'pedido') {
        return;
    }

    // Array com valores dos campos postados
    //$fields = $_POST['acf'];

    // Recupera o valor do campo 'Escolhido' usado para inserir no Title e Content do post
    $field = $_POST['acf']['field_6732a4be87443'];
    $nome_cliente = get_the_title($field);

    // Após salvar o novo CPT, atualiza o Title e Description com o valor do campo escolhido
    $my_post = array(
        'ID' => $post_id,
        'post_title' => $nome_cliente,
        'post_content' => $nome_cliente,
        'post_name' => '', // Slug
        //'post_author' => $user_id
    );

    $pedido_valor_total = 0;

    // Loop through rows.
    while (have_rows('pedido_itens', $post_id)) : the_row();

        // Load sub field value.
        $pedido_item_qtd = get_sub_field('pedido_item_qtd');
        $pedido_item_unidade = get_sub_field('pedido_item_unidade');
        $pedido_item_referencia = get_sub_field('pedido_item_referencia');
        $pedido_item_produto = get_sub_field('pedido_item_produto');
        $pedido_item_produto_nome = get_the_title($pedido_item_produto);
        $pedido_item_valor = get_sub_field('pedido_item_valor');
        $pedido_item_valor_total = floatval($pedido_item_qtd) * floatval($pedido_item_valor);
        $pedido_valor_total = $pedido_valor_total + $pedido_item_valor_total;
        $pedido_item_valor = number_format($pedido_item_valor, 2, ",", ".");
        $pedido_item_valor_total = number_format($pedido_item_valor_total, 2, ",", ".");

    // End loop.
    endwhile;

    wp_update_post($my_post);

    if (!is_admin()) {
        // Status do pedido
        update_field('pedido_status', 1, $post_id);
    }

    update_field('pedido_valor_total', $pedido_valor_total, $post_id);


    // Cria um hash para ser usado no link do cliente 
    $link_hash = hash('sha256', $post_id . $nome_cliente);

    // Registra a Hash ao pedido
    //update_post_meta( $post_id, 'pedido_link_hash', $link_hash );
    update_field('pedido_link_hash', $link_hash, $post_id);


    // Envia um e-mail avisando sobre um novo pedido
    // Só envia o e-mail caso esteja fora do painel de gerenciamento
    if (!is_admin()) {

        // Dados dos administradores
        $name = "BDA Sistema de pedidos";
        $email = "pedidos@bdapvc.com.br";
        $to = 'comercial@bezerradealencar.com.br';
        $subject = "Novo pedido realizado";
        $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>' . "\r\n");

        // Dados do cliente
        $pedido_cliente_id = get_field("pedido_cliente", $post_id); // Recupera o ID do cliente
        $to_cliente = get_field("cliente_email", $pedido_cliente_id); // Recupera o e-mail do cliente
        $cliente_nome = get_field("cliente_fantasia", $pedido_cliente_id); // Recupera o nome fantasia do cliente

        $post = get_post($post_id);
        $url = get_permalink($post_id);
        //$slug = $post->post_name;

        // Corpo da mensagem dos Administradores
        $body = "<strong>##### NOVO PEDIDO SOLICITADO #####</strong><br>";
        $body .= "<strong>Cliente: </strong>" . $post->post_title . "<br>";
        $body .= "<a href='" . get_admin_url() . "post.php?post=" . $post_id . "&action=edit' target='_blank'>Detalhes do pedido</a><br>";
        $body .= "<a href='" . $url . "' target='_blank'>Versão para impressão</a><br>";
        $body .= "<br>---------";
        $body .= "<br><strong>Título</strong>: " . $field;

        // Corpo da mensagem para os clientes
        // $body_cliente = "<h3>##### PEDIDO REALIZADO COM SUCESSO! #####</h3>";
        // $body_cliente .= "<p>Recebemos o seu pedido em nossa plataforma. Veja os detalhes abaixo:</p>";
        // $body_cliente .= "<ul>";
        // $body_cliente .= "<li><strong>Código: </strong>" . $post_id . "</li>";
        // $body_cliente .= "<li><strong>Data: </strong>" . get_the_date('d/m/Y', $post_id) . "</li>";
        // $body_cliente .= "<li><strong>Cliente: </strong>" . $post->post_title . "</li>";
        // $body_cliente .= "<li><a href='https://bdapvc.com.br/pedido-detalhe/?hash=" . $link_hash . "' target='_blank'><strong>Veja todos os detalhes na versão para impressão.</strong></a></li>";
        // $body_cliente .= "</ul>";

        $body_cliente = <<<HTML
        <table style="width:540px; border-spacing: 0px;">
            <tr>
                <td colspan="2" style="padding:0px;line-height:0px;">
                    <img src="https://bdapvc.com.br/wp-content/themes/yeti-bootstrap/assets/img/email/email-top.png" width="540"
                        height="49">
                </td>
            </tr>
            <tr>
                <td style="background-color:#D9D9D9;padding:25px 0px 25px 20px;">
                    <p style="color:#FF6831;font-weight:bolder;font-family: Verdana, Geneva, Tahoma, sans-serif;">Olá $cliente_nome, tudo certo?</p>
                    <p style="color:#1EAEA0;font-weight:bolder;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size:16px;">Recebemos seu pedido!</p>
                    <p style="color:#FF6831;font-weight:bolder;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 14px;">Agora é só aguardar a confirmação de envio. O número do seu pedido é: <strong>$post_id</strong>.</p>
                    <p style="color:#FF6831;font-weight:bolder;font-family: Verdana, Geneva, Tahoma, sans-serif;"><a href="https://bdapvc.com.br/pedido-detalhe/?hash=$link_hash"><strong>Ver pedido completo.</strong></a></p>
                </td>
                <td style="background-color:#D9D9D9;padding:25px 30px;">
                    <img src="https://bdapvc.com.br/wp-content/themes/yeti-bootstrap/assets/img/email/email-10anos.png"
                        width="144" height="108">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding:0px;">
                    <a href="https://wa.me/559193384268" target="_blank">
                        <img src="https://bdapvc.com.br/wp-content/themes/yeti-bootstrap/assets/img/email/email-footer.png" width="540" height="41">
                    </a>
                </td>
            </tr>

        </table>
        HTML;

        // Envia o e-mail para os administradores
        wp_mail($to, $subject, $body, $headers);

        // Envia o e-mail para o cliente
        wp_mail($to_cliente, $subject, $body_cliente, $headers);
    }
}



//-----------------------------------------------------
// Valida campos do formulário ACF
//-----------------------------------------------------

// Aplica a validação em todos os campos do formulário.
add_filter('acf/validate_value', 'yb_validate_cpts_value', 10, 4);

// Aplica a validação em todos os campos do tipo textarea.
// add_filter('acf/validate_value/type=textarea', 'yb_validate_cpts_value', 10, 4);

// Aplica a validação em todos os campos com nome "hero_text".
// add_filter('acf/validate_value/name=hero_text', 'yb_validate_cpts_value', 10, 4);

// Aplica a validação no campo com a chave "field_123abcf".
// add_filter('acf/validate_value/key=field_123abcf', 'yb_validate_cpts_value', 10, 4);

function yb_validate_cpts_value($valid, $value, $field, $input_name)
{

    // Caso o valor já seja inválido, retorna antecipadamente.
    if ($valid !== true) {
        return $valid;
    }

    // Previne o valor de ser salvo caso contenha uma string proibida.
    if (is_string($value) && strpos($value, 'Opa') !== false) {
        return __('Por favor, remova a menção de "Opa".');
    }
    return $valid;
}


//-----------------------------------------------------
// MOSTRA NA LISTA DE CLIENTES DO PEDIDO APENAS OS CADASTRADOS PELO USUÁRIO ATIVO
//-----------------------------------------------------
add_filter('acf/fields/post_object/query/name=pedido_cliente', 'my_acf_fields_post_object_query', 10, 3);
function my_acf_fields_post_object_query($args, $field, $post_id)
{

    // Restrict results to children of the current post only.
    $args['author'] = get_current_user_id();
    return $args;
}
