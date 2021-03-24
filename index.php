<?php
    $conn = pg_connect("dbname=cielo user=postgres password=123");
    include_once('helper/helper.php');
    session_start();
    require_once('controllers/login.php');
    pg_close($conn);