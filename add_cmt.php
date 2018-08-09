<?php
session_start();

$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}
else
{
    echo"";
}
mysql_select_db("r.e.d_db",$con);
$cmt=$_POST['comment'];

$user_id = '';
$group_id  = '';

$sql=mysql_query("SELECT id , user_photo,user_firstname,user_lastname from user where user_email='".$_SESSION['email']."'");
$row=  mysql_fetch_array($sql);
if($row){
    $user_id = $row['id'];
    $user_pic=$row['user_photo'];
    $firstname=$row['user_firstname'];
    $lastname=$row['user_lastname'];
}


$sql=mysql_query("SELECT group_id from teacher_create_group where group_email='".$_SESSION['email']."'");
if(!$sql){
    die("Invalid Request : ".mysql_error());
}

$row1=  mysql_fetch_array($sql);

if($row1){
    $group_id = $row1['group_id'];
}

$date=date("Y-m-m H:i:s");
    $sql="INSERT INTO  post values('null','$cmt','$user_id','$_SESSION[group_id]','$date','')";
    

    $q=mysql_query($sql);
?>
