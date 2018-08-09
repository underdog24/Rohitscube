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
mysql_select_db("r.e.d_db",$con);


if($_GET['type'] == "Teacher"){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['type']=$_GET['type'];
    
    header('location:teacher_profile.php');
}
else if($_GET['type'] == "Parent"){
    session_start();
     $_SESSION['email'] = $_POST['email'];
    $sql="INSERT INTO user VALUES('','$_POST[firstname]','$_POST[lastname]','$_POST[user_username]','$_SESSION[email]','$_POST[password]','','$_GET[type]')";
    if(!(mysql_query($sql))){
        die("error : ".  mysql_error());
    }else{
        $user_id = mysql_insert_id();
        $sql="INSERT INTO user_meta VALUES('',$user_id,'parent_code',$_POST[code])";
        mysql_query($sql) or die("error : ".mysql_error());
        header("location:parent_page.php");
    }
}else if($_GET['type'] == "Student"){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    
    
    $sql="INSERT INTO user VALUES('','$_POST[firstname]','$_POST[lastname]','$_POST[uname]','$_SESSION[email]','$_SESSION[password]','','$_GET[type]')";
    if(!(mysql_query($sql))){
        die("error : ".  mysql_error());
    }else{
        $user_id = mysql_insert_id();
        //header('location:home_page_parent.php');
        //$user_id = mysql_query("select id from user where user_email='".$_POST['email']."'");
        //$user_id = substr((string)$user_id, strpos((string)$user_id, "#") + 1);
        //print_r($user_id);
        
        
        
         $randomnumbers=  rand(10000,100000);
        $sql="INSERT INTO user_meta VALUES('',".(int) $user_id.",'parent_code','$randomnumbers')";
        mysql_query($sql) or die("error : ".mysql_error()." : ".  mysql_errno());
        
        $sql="INSERT INTO user_meta VALUES('',".(int) $user_id.",'group_code','$_POST[groupcode]')";
        mysql_query($sql) or die("error : ".mysql_error()." : ".  mysql_errno());   
        
       
        header('location:home_page_student.php');
    }
}

//$log = $_POST['name'];

mysql_close($con);
?>
<center>
    <a href="Home.php"><h1>CONTINUE</h1></a>
</center>
</body>

