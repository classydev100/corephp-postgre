<?php
    include_once('models/products.php');
    $conn = db_con();
    if(empty($_POST)){
        $total_products = count_products($conn);
        $products = get_all_products($conn);
        require_once ('views/products.php');
    } else {
        $res = delete_product($conn, $_POST['id']);
        echo json_encode($res);
    }
