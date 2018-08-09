<body bgcolor="">
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

if(isset($_FILES['Photos'])){
    $errors=array();
    $file_name=$_FILES['Photos']['name'];
    $file_size=$_FILES['Photos']['size'];
    $file_tmp=$_FILES['Photos']['tmp_name'];
    $file_type=$_FILES['Photos']['type'];
    $file_ext= strtolower(end(explode('.', $_FILES['Photos']['name'])));
    $file_erroe_code=$_FILES['Photos']['error'];
    
    $extensions=array("jpeg","jpg","png");
    
    print_r($file_size);
    echo "<br/>";
    
    if(in_array($file_ext, $extensions)== false){
        $errors[]="extension not allowed, choose a JPEG or PNG file";
    }
    if($file_size > 5242880){
        $errors[] = "file size exceeds 5mb";
    }
        echo empty($errors)."<br/>";
    if(empty($errors)== true){
        move_uploaded_file($file_tmp,"uploads/". $file_name);
        echo 'success</br>'.$file_erroe_code;
    }  else {
          echo "erroe code :".$file_erroe_code."<br/>errors :";
          print_r($errors);
    }
}
$nn="uploads/". $file_name;
$sql="INSERT INTO user VALUES('','$_POST[firstname]','$_POST[lastname]','','$_SESSION[email]','$_SESSION[password]','$nn','$_SESSION[type]')";
if(!(mysql_query($sql))){
    die("error : ".  mysql_error());
}else{
    $user_id = mysql_insert_id();
     
    $sql="INSERT INTO user_meta VALUES('',".(int) $user_id.",'grade','$_POST[grade]')";
    mysql_query($sql) or die("error : ".mysql_error());

      $sql1="INSERT INTO user_meta VALUES('',".(int) $user_id.",'subject_area','$_POST[subjectarea]')";
    mysql_query($sql1) or die("error : ".mysql_error());
    
    header('location:home_page_teacher.php');
    }
//mysql_close($con);
?>
<center>
    <a href="Home.php"><h1>CONTINUE</h1></a>
</center>
</body>

