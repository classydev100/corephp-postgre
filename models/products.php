<?php
    function count_products($conn){
        // Get the total number of results
        $result = pg_query($conn, "SELECT count(*) FROM products ");
        return (int)pg_fetch_result($result, 0, 0);
    }

    function get_all_products($conn){
        $result = pg_query($conn, "SELECT * FROM products");
        return pg_fetch_all($result);
    }

    function delete_product($conn, $id){
        $result = pg_query($conn,'DELETE FROM products WHERE id='.$id);
        return pg_affected_rows($result);
    }

    function add_product($conn, $product){
        unset($product['operation']);
        $product['datetime'] = date('d/m/Y h:i:s');
        $res = pg_insert($conn, 'products', $product, PGSQL_DML_EXEC );
        if($res){
            $success = true;
        } else{
            $success = false;
        }
        return $success;
    }