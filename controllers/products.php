<?php
    include_once('models/products.php');
    $conn = db_con();
    if(isset($_POST['id'])){
        $res = delete_product($conn, $_POST['id']);
        echo json_encode($res);
    } elseif (isset($_POST['full_name'])){
        $res = add_product($conn, $_POST);
        echo json_encode($res);
    } else {
        $total_products = count_products($conn);
        $products = get_all_products($conn);
        require_once('views/dashboard/products.php');
    }
