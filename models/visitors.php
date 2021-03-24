<?php
    function count_visitors($conn){
        // Get the total number of results
        $result = pg_query($conn, "SELECT count(*) FROM visitors ");
        return (int)pg_fetch_result($result, 0, 0);
    }