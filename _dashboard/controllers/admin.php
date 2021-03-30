<?php
    include_once('_dashboard/models/visitors.php');
    include_once('_dashboard/models/products.php');

    $conn = db_con();
    $total_visitors = count_visitors($conn);
    $total_products = count_products($conn);
    include('_dashboard/views/admin.php');