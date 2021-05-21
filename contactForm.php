<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once './dbConn.php';

if(isset($_SESSION['felhasznalo']))
{
    $result = mysqli_query($conn, "SELECT firstname, lastname, email FROM users
                    WHERE id = ".$_SESSION['felhasznalo']['id']);

        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_assoc($result);
        }else{
            print('nincs ilyen felhasználó');
        }

    mysqli_free_result($result);
}else{
    print('a lekérdezés sikertelen');
}

mysqli_close($conn);