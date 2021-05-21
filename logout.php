<?php

if(session_status() == PHP_SESSION_NONE)
{
    unset($_SESSION['felhasznalo']);
    header('Location: http://localhost/space/login.php');
}