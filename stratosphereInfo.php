<?php

if(session_status() == PHP_SESSION_NONE)
{ 
    session_start();
}

require_once './dbConn.php';

$result = mysqli_query($conn, "SELECT * FROM stratosphere");

    if(mysqli_num_rows($result) > 0)
    {
        $rows = mysqli_fetch_all($result);
    }

mysqli_free_result($result);
mysqli_close($conn);
   

