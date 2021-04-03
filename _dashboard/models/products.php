<?php
    function count_products($conn){
        // Get the total number of results
//        $sql = "SELECT count(*) FROM products";
//        $result = pg_query($conn, $sql);
//        return (int)pg_fetch_result($result, 0, 0);
        $sql = 'SELECT * FROM products';
        $result = mysqli_query($conn, $sql);
        return mysqli_num_rows($result);
    }

    function get_all_products($conn){
        $sql = "SELECT * FROM products";
//        $result = pg_query($conn, $sql);
//        return pg_fetch_all($result);
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_all($result);
    }

    function delete_product($conn, $id){
        $sql = 'DELETE FROM products WHERE id='.$id;
//        $result = pg_query($conn,$sql);
//        return pg_affected_rows($result);
        $result = mysqli_query($conn,$sql);
        return mysqli_affected_rows($conn);
    }