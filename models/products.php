<?php
function count_products($conn){
    // Get the total number of results
    $result = pg_query($conn, "SELECT count(*) FROM products ");
    return (int)pg_fetch_result($result, 0, 0);
}