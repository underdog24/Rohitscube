<?php
session_start();

if(isset($_POST['group_id']) && isset($_POST['group_code']))
{
    $_SESSION['group_id']=$_POST['group_id'];
    $_SESSION['group_code']=$_POST['group_code'];

    print_r($_SESSION['group_id']." ".$_SESSION['group_code']);
}
else if(isset($_POST['group_id']))
{
    $_SESSION['group_id']=$_POST['group_id'];

    print_r($_SESSION['group_id']);
}
else if(isset($_POST['group_code']))
{
    $_SESSION['group_code']=$_POST['group_code'];

    print_r($_SESSION['group_code']);
}

?>