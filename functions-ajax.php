<?php

/** Load WordPress Bootstrap */
require_once dirname(__FILE__) . '/../../../wp-load.php';

$data = ThemeBootstrapUtil::sanitize($_GET);

$name_function_javascript = function($data) {

    $response['success'] = false;

    if ($data) {
        $response['success'] = true;
    }

    header('application/type:json');
    echo json_encode($response);
    exit;
};



/* * * instrução para exceutar as funcoes como clousure* */
if (isset($data['acao']) && isset($$data['acao'])) {

    $function = $data['acao'];
    $$function($data);
}
exit;


