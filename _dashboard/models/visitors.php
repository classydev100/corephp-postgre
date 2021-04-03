<?php
    function count_visitors($conn){
        // Get the total number of results
//        $result = pg_query($conn, "SELECT count(*) FROM visitors ");
//        return (int)pg_fetch_result($result, 0, 0);
        $sql = 'SELECT * FROM visitors';
        $result = mysqli_query($conn, $sql);
        return mysqli_num_rows($result);
    }

    function get_all_visitors($conn){
//        $result = pg_query($conn, "SELECT * FROM visitors ORDER BY datetime DESC");
//        return pg_fetch_all($result);
        $sql = "SELECT * FROM visitors ORDER BY date_time DESC";
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_all($result);
    }

    function delete_all_visitors($conn){
//        $result = pg_query($conn,"DELETE FROM visitors");
//        return pg_affected_rows($result);
        $sql = 'DELETE FROM visitors';
        $result = mysqli_query($conn,$sql);
        return mysqli_affected_rows($conn);
    }