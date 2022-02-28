<?php 
session_start();
if($_SESSION['status']!='ok'){
    header("Location:Users/Login.php");
}
$view = $_REQUEST['view'];
switch($view)
{
    case'logout':
        include('Users/LogOut.php');
        break;
    default:
        include('Views/header.php');
        break;
}

?>
