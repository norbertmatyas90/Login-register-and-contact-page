<?php

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

require_once './dbConn.php';

$userName = $_POST['username'];
$password = hash('sha512', $_POST['password']);

if(isset($userName))
{
    $result = mysqli_query($conn, "SELECT id, username FROM users
                            WHERE username = '".$userName."' AND password = '".$password."'");

    if(mysqli_num_rows($result) === 1)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['felhasznalo'] = $row;
        print('sikeres bejelentkezés');
        header('Location: http://localhost/space/index.php');
    }else{
        print('Érvénytelen felhasználónév/jelszó!');
    }

    mysqli_free_result($result);
}else{
    print('a bejelentkezés sikertelen: '. mysqli_errno($result). ', ' .mysqli_error($result));
}
mysqli_close($conn);


