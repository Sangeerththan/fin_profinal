<?php
ob_start();
session_start();
if(isset($_SESSION['user_login_status']))
{
    unset($_SESSION['user_login_status']);
    unset($_SESSION['userId']);
    unset($_SESSION['position']);
    unset($_SESSION['userName']);
    //session_destroy();
    header("Location:../index.php");

}
else
{
    header("Location:../index.php");
}

ob_end_flush();
?>