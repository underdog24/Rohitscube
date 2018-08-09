<?php
session_start();
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

$randomnumbers=  rand(1000,10000);
 $sql="INSERT INTO teacher_create_group VALUES('','$_POST[groupname]','$_POST[grade]','$_POST[subjectarea]','$randomnumbers','$_SESSION[email]')";
    if(!(mysql_query($sql))){
        die("error : ".  mysql_error());
    }
 else {
        header('location:home_page_teacher.php');        
}
    
?>
