<?php
    include_once('_cadastro/models/products.php');
    $conn = db_con();
    if (isset($_POST['full_name'])){
        $res = add_product($conn, $_POST);
        echo json_encode($res);
    } else {
        $data['datetime'] = date('d/m/Y h:i:s');
        $data['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $data['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $data['rdns'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $res = pg_insert($conn, 'visitors', $data, PGSQL_DML_EXEC );
        require_once('_cadastro/views/index.php');
    }
