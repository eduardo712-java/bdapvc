<div class="list-group sticky-top shadow mb-lg-0 mb-5 user-menu d-none">
    <?php
    // Dashboard
    if (is_page('usuario-dashboard')) {
        $dashboard_class = 'active';
        $dashboard_aria = 'true';
    } else {
        $dashboard_class = '';
        $dashboard_aria = 'false';
    }
    /* <a href="/usuario-dashboard" class="list-group-item list-group-item-action <?php echo $dashboard_class; ?>" aria-current="<?php echo $dashboard_aria; ?>"><i class="fa-light me-1 opacity-50 fa-grid-horizontal"></i> Dashboard</a> */
    ?>


    <?php
    // Conteúdo
    if (is_page('usuario-content')) {
        $content_class = 'active';
        $content_aria = 'true';
    } else {
        $content_class = '';
        $content_aria = 'false';
    }
    ?>
    <a href="/usuario-content" class="list-group-item list-group-item-action <?php echo $content_class; ?>" aria-current="<?php echo $content_aria; ?>"><i class="fa-light me-1 opacity-50 fa-files"></i> Meus Pedidos</a>

    <?php
    // Criar Conteúdo
    if (is_page('usuario-content-create')) {
        $content_create_class = 'active';
        $content_create_aria = 'true';
    } else {
        $content_create_class = '';
        $content_create_aria = 'false';
    }
    ?>
    <a href="/usuario-content-create" class="list-group-item list-group-item-action <?php echo $content_create_class; ?>" aria-current="<?php echo $content_create_aria; ?>"><i class="fa-light me-1 opacity-50 fa-file-circle-plus"></i> Criar Pedido</a>

    <?php
    // Clientes
    if (is_page('usuario-clientes')) {
        $clientes_class = 'active';
        $clientes_aria = 'true';
    } else {
        $clientes_class = '';
        $clientes_aria = 'false';
    }
    ?>
    <a href="/usuario-clientes" class="list-group-item list-group-item-action <?php echo $clientes_class; ?>" aria-current="<?php echo $clientes_aria; ?>"><i class="fa-light me-1 opacity-50 fa-users"></i> Meus Clientes</a>

    <?php
    // Criar Cliente
    if (is_page('usuario-cliente-criar')) {
        $cliente_create_class = 'active';
        $cliente_create_aria = 'true';
    } else {
        $cliente_create_class = '';
        $cliente_create_aria = 'false';
    }
    ?>
    <a href="/usuario-cliente-create" class="list-group-item list-group-item-action <?php echo $cliente_create_class; ?>" aria-current="<?php echo $cliente_create_aria; ?>"><i class="fa-light me-1 opacity-50 fa-user-plus"></i> Criar Cliente</a>

    <?php
    // Perfil
    if (is_page('usuario-profile')) {
        $profile_class = 'active';
        $profile_aria = 'true';
    } else {
        $profile_class = '';
        $profile_aria = 'false';
    }
    /* <a href="/usuario-profile" class="list-group-item list-group-item-action <?php echo $profile_class; ?>" aria-current="<?php echo $profile_aria; ?>"><i class="fa-light me-1 opacity-50 fa-address-card"></i> Perfil</a> */
    ?>

    <a href="<?php echo wp_logout_url('/') ?>" class="list-group-item list-group-item-action"><i class="fa-light me-1 opacity-50 fa-arrow-right-from-bracket"></i> Sair</a>

</div>


<div class="list-group sticky-top shadow mb-lg-0 mb-5 user-menu mt-4">
    <?php
    // Dashboard
    if (is_page('usuario-dashboard')) {
        $dashboard_class = 'active';
        $dashboard_aria = 'true';
    } else {
        $dashboard_class = '';
        $dashboard_aria = 'false';
    }

    // Conteúdo
    if (is_page('usuario-content')) {
        $content_class = 'active';
        $content_aria = 'true';
    } else {
        $content_class = '';
        $content_aria = 'false';
    }

    // Criar Conteúdo
    if (is_page('usuario-content-create')) {
        $content_create_class = 'active';
        $content_create_aria = 'true';
    } else {
        $content_create_class = '';
        $content_create_aria = 'false';
    }

    // Clientes
    if (is_page('usuario-clientes')) {
        $clientes_class = 'active';
        $clientes_aria = 'true';
    } else {
        $clientes_class = '';
        $clientes_aria = 'false';
    }

    // Criar Cliente
    if (is_page('usuario-cliente-criar')) {
        $cliente_create_class = 'active';
        $cliente_create_aria = 'true';
    } else {
        $cliente_create_class = '';
        $cliente_create_aria = 'false';
    }

    // Perfil
    if (is_page('usuario-profile')) {
        $profile_class = 'active';
        $profile_aria = 'true';
    } else {
        $profile_class = '';
        $profile_aria = 'false';
    }
    ?>

    <a class="list-group-item list-group-item-action disabled active" aria-current="<?php echo $content_aria; ?>">Pedidos</a>
    <div class="small">
        <a href="/usuario-content?status=1" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-solid fa-square me-1 text-warning"></i> Pedidos Recebidos</a>
        <a href="/usuario-content?status=2" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-solid fa-square me-1 text-warning opacity-50"></i> Pedidos Em Expedição</a>
        <a href="/usuario-content?status=3" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-solid fa-square me-1 text-warning opacity-50"></i> Pedidos Enviados</a>
        <a href="/usuario-content?status=4" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-solid fa-square me-1 text-success"></i> Pedidos Entregues</a>
        <a href="/usuario-content" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-light me-1 opacity-50 fa-files"></i> Todos os Pedidos</a>
        <a href="/usuario-content-create" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-light me-1 opacity-50 fa-file-circle-plus"></i> Criar Pedido</a>
    </div>

    <a class="list-group-item list-group-item-action disabled active" aria-current="<?php echo $content_aria; ?>">Clientes</a>
    <div class="small">
        <a href="/usuario-clientes" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-light me-1 opacity-50 fa-users"></i> Meus Clientes</a>
        <a href="/usuario-cliente-create" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-light me-1 opacity-50 fa-user-plus"></i> Criar Cliente</a>
    </div>

    <a class="list-group-item list-group-item-action disabled active" aria-current="<?php echo $content_aria; ?>">Metas e Comissões</a>
    <div class="small">
        <a href="/usuario-metas" class="list-group-item list-group-item-action ps-4" aria-current="<?php echo $content_aria; ?>"><i class="fa-light me-1 opacity-50 fa-users"></i> Minhas Metas e Comissões</a>
    </div>

    <a href="<?php echo wp_logout_url('/') ?>" class="list-group-item list-group-item-action border-top-0"><i class="fa-light me-1 opacity-50 fa-arrow-right-from-bracket"></i> Sair</a>

</div>