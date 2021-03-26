<?php
function db_con(){
    return $conn = pg_connect("dbname=cielo user=postgres password=123");
}
function locked(){
    if(empty($_SESSION)) {
        header("Location: index.php");
        exit();
    }
}