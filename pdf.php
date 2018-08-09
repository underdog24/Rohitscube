<?php
session_start();
print_r($_SESSION['email']);
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$sdb=mysql_select_db("r.e.d_db",$conn) or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  move_uploaded_file($temp,"files/".$name);
  $cmt='';
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
$insert=mysql_query("INSERT INTO  post values('null','$cmt','$user_id','$_SESSION[group_id]','$date','$name')");
if($insert){
    header("location:home_page_teacher.php");
}
else{
die(mysql_error());
}
}
?>