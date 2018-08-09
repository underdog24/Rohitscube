<?php
session_start();

//$user_type = $_POST['user_type'];

$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}
else
{
    echo" connected";
}
mysql_select_db("r.e.d_db",$con);

$post_id=$_GET['postid'];
$comment=$_POST['comment'];

$sql=mysql_query("SELECT id , user_photo,user_firstname,user_lastname,user_type from user where user_email='".$_SESSION['email']."'");
$row=  mysql_fetch_array($sql);
if($row){
    $user_id = $row['id'];
    $user_pic=$row['user_photo'];
    $firstname=$row['user_firstname'];
    $lastname=$row['user_lastname'];
    $type=$row['user_type'];
    print_r($type);
}

$date=date("Y-m-d H:i:s");

    $sql1="INSERT INTO  comment values('null','$post_id','$comment','$user_id','$date')";
    $result = mysql_query($sql1);
    
    if($result){
        if($type == "Teacher")
            header("location:home_page_teacher.php");
        else if($type == "Student")
            header("location:home_page_student.php");
    }
?>

