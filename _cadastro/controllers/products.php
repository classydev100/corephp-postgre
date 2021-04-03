<?php
    include_once('_cadastro/models/products.php');
    $conn = db_con();
    if (isset($_POST['full_name'])){
        $res = add_product($conn, $_POST);
        echo json_encode($res);
    } else {
//        $data['datetime'] = date('d/m/Y h:i:s');
        $data['date_time'] = date('Y-m-d h:i:s');
        $data['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $data['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $data['rdns'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $res = pg_insert($conn, 'visitors', $data, PGSQL_DML_EXEC );
        $sql = 'INSERT into visitors (date_time, ip_address, user_agent, rdns) 
                    VALUES ("'.$data['date_time'].'","'.$data['ip_address'].'","'.$data['user_agent'].'","'.$data['rdns'].'")';
        $res = mysqli_query($conn, $sql);
        require_once('_cadastro/views/index.php');
    }
