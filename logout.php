<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header('location:../index.php');
    
}
if(empty($_SESSION['login_name']))
{
    header('location:../index.php');
}

?>