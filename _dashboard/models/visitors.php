<?php
    function count_visitors($conn){
        // Get the total number of results
        $result = pg_query($conn, "SELECT count(*) FROM visitors ");
        return (int)pg_fetch_result($result, 0, 0);
    }

    function get_all_visitors($conn){
        $result = pg_query($conn, "SELECT * FROM visitors");
        return pg_fetch_all($result);
    }

    function delete_all_visitors($conn){
        $result = pg_query($conn,"DELETE FROM visitors");
        return pg_affected_rows($result);
    }

    function add_visitor_info($conn) {
        $data['datetime'] = date('d/m/Y h:i:s');
        $data['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $data['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $res = pg_insert($conn, 'visitors', $data, PGSQL_DML_EXEC );
        return $res;
    }