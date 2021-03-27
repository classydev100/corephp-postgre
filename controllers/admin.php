<?php
    include_once('models/visitors.php');
    include_once('models/products.php');

    $conn = db_con();
    $total_visitors = count_visitors($conn);
    $total_products = count_products($conn);
    include('views/dashboard/admin.php');