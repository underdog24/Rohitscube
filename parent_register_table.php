<body bgcolor="orangered">
<?php


$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}
else
{
    echo"<h1>Registration Successful!!</h1><br>";
}
mysql_select_db("6th-sem",$con);

$_SESSION['con']=$con;
$con=$_SESSION['con'];

$log = $_POST['name'];
$sql="INSERT INTO parent_register
 VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[parentcode]','$_POST[uname]','$_POST[email]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
 
      header('location:teacher_profile.php');

  }
mysql_close($con);
?>
<center>
    <a href="Home.php"><h1>CONTINUE</h1></a>
</center>
</body>

