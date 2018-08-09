<?php
session_start();
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$_SESSION['con']=$con;
$con=$_SESSION['con'];      

$ser=$_POST['search'];

$sql=mysql_query("SELECT user_firstname from user");

while ($res=mysql_fetch_array($sql)){
if(!$sql)
{
     die("Error in fetching Data".mysql_error());
}

else if($ser==$res['user_firstname'] )
{
    $_SESSION['name']=$ser;
     header("Location:profile.php?name=<?php echo $ser; ?>");
}

 else {
     print "<script type=\"text/javascript\">"; 
     print "alert('NO RESULT FOUND')"; 
     print "</script>";
     
}
}
mysql_close($con);
?>
