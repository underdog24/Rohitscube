<?php
session_start();
?>
<body bgcolor="red">
<?php
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}
else
{
    echo"Connection Successful!!<br>";
    echo "abc";
}
mysql_select_db("r.e.d_db",$con);

$_SESSION['con']=$con;
$con=$_SESSION['con'];

$n = $_POST['email'];
$p = $_POST['password'];


$sel= "Select * from user where user_email='$n' && user_password='$p'";
$res=mysql_query($sel);
$row=  mysql_fetch_array($res);
$e=$row['user_email'];
$ps=$row['user_password'];
$type=$row['user_type'];
if($type=='Teacher'){
    $_SESSION['email']=$n;
    header('location:home_page_teacher.php');
}
elseif($type=='Student'){
    $_SESSION['email']=$n;
    header('location:home_page_student.php');
}
elseif($type=='Parent'){
    $_SESSION['email']=$n;
    header('location:parent_page.php');
}
mysql_close($con);
?>
    <a href="Home.php">INCORRECT EMAIL OR PASSWORD GO BACK TO LOGIN</a>
</body>