<?php
    function add_product($conn, $product){
        unset($product['operation']);
//        $product['datetime'] = date('d/m/Y h:i:s');
        $product['date_time'] = date('Y-m-d h:i:s');
    //        $res = pg_insert($conn, 'products', $product, PGSQL_DML_EXEC );
        $sql = 'INSERT into products (full_name, cpf, email, purchase_type_cate, request_number, lucky_number, telephone, purchase_month_year, date_time) 
                    VALUES ("'.$product['full_name'].'","'.$product['cpf'].'","'.$product['email'].'","'.$product['purchase_type_cate'].'","'.$product['request_number'].'","'.$product['lucky_number'].'","'.$product['telephone'].'","'.$product['purchase_month_year'].'","'.$product['date_time'].'")';
        $res = mysqli_query($conn, $sql);
        if($res){
            $success = true;
        } else{
            echo mysqli_error($conn);
            $success = false;
        }
        return $success;
}