<?php
session_start();
print_r($_SESSION['email']);
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}
else
{
    echo"<h1>Registration Successful!!</h1><br>";
}
mysql_select_db("r.e.d_db",$con);


$randomnumbers=  rand(10000,100000);
$user_id = mysql_query("select * from user where user_email='".$_SESSION['email']."'");
$row=  mysql_fetch_array($user_id);
$id=$row['id'];
//print_r($id);
        
        $sql="INSERT INTO user_meta VALUES('',".(int) $id.",'parent_code_generate','$randomnumbers')";
        mysql_query($sql) or die("error : ".mysql_error()." : ".  mysql_errno());
        header('location:home_page_student.php');
?>

