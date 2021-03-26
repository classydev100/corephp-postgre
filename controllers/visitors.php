<?php
    include_once('models/visitors.php');
    $conn = db_con();
    if(empty($_POST)){
        $total_visitors = count_visitors($conn);
        $visitors = get_all_visitors($conn);
        require_once ('views/visitors.php');
    } else {
        $res = delete_all_visitors($conn);
        echo json_encode($res);
    }
