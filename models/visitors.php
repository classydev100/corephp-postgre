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