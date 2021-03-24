<?php
    locked();
    include_once('models/visitors.php');
    include_once('models/products.php');

    $total_visitors = count_visitors($conn);
    $total_products = count_products($conn);
    include('views/admin.php');