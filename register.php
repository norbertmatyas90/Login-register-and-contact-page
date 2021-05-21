<?php

require_once './dbConn.php';

$firstname = $_POST['r_firstname'];
$lastname = $_POST['r_lastname'];
$username = $_POST['r_username'];
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$psw = hash('sha512', $_POST['r_password']);
$psw_again = hash('sha512', $_POST['r_password_rep']);
$date = date('Y-m-d h:m:s');



if(isset($_POST['r_firstname']))
{
    if($psw === $psw_again)
    {
        $reg = mysqli_query($conn, "INSERT INTO users(firstname, lastname, username, email, password, created_at)
                                VALUES('$firstname', '$lastname', '$username', '$email', '$psw ','$date')");
    }else{
        print('a jelszó nem egyezik');
    }
    
}else{
    print('nem sikerült a regisztráció');
}
var_dump($reg);