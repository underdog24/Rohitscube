<?php
session_start();
if(isset($_POST['desc'])){
    if(isset($_POST['iscorrect']) || $_POST['iscorrect']== ""){
        echo "please check Data is missing";
       // exit();
    }
   
   // exit();
}
require_once './connectin_db.php';

$question=$_POST['desc'];
$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
$answer3=$_POST['answer3'];
$answer4=$_POST['answer4'];
$_SESSION['type']=$_GET['type'];
//$type=  preg_replace('/[^a-z]/',"",$type);
$isCorrect=preg_replace('/[^0-9a-z]/',"",$_POST['iscorrect']);
$answer1=strip_tags($answer1);
$answer1=mysql_real_escape_string($answer1);
$answer2=strip_tags($answer2);
$answer2=mysql_real_escape_string($answer2);
$answer3=strip_tags($answer3);
$answer3=mysql_real_escape_string($answer3);
$answer4=strip_tags($answer4);
$answer4=mysql_real_escape_string($answer4);
$question=strip_tags($question);
$question=mysql_real_escape_string($question);

//if($type=='tf'){
//if((!$question) || (!$answer1) || (!$answer2) || (!$isCorrect)){
  //  echo 'sorry all field must be filed';
//}
//exit();
//}

//if($type=='mc'){
//if((!$question) || (!$answer1) || (!$answer2) || (!$answer3) || (!$answer4)|| (!$isCorrect)){
   // echo 'sorry all field must be filed';
//}
//exit();
//}
$sql=  mysql_query("Insert into questions (question,type) VALUES ('$question', '$_SESSION[type]')")or die(mysql_error());
$lastId=  mysql_insert_id();
mysql_query("UPDATE questions SET question_id='$lastId' WHERE id='$lastId' LIMIT 1") or die(mysql_error());

if($_SESSION['type']=='tf'){
    if($isCorrect== "answer1"){
        $sql2=  mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer1','1')") or die(mysql_error());
      mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer2','0')") or die(mysql_error());  
    $msg='thankyou, your answers has been  added';
    header('location:addQuestion.php?msg='.$msg.'');
    exit();
      
    }
    
    
     if($isCorrect== "answer2"){
        $sql2=  mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer2','1')") or die(mysql_error());
      mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer1','0')") or die(mysql_error());  
    $msg='thankyou, your answers has been  added';
    header('location:addQuestion.php?msg='.$msg.'');
    exit();
}
}

if($_SESSION['type']=="mc"){
    if($isCorrect=="answer1"){
    $sql2=  mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer1','1')") or die(mysql_error());
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer2','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer3','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer4','0')") or die(mysql_error());  
    $msg='thankyou, your answers has been  added';
    header('location:addQuestion.php?msg='.$msg.'');
    exit();
    }
    
    
   if($isCorrect=="answer2"){
    $sql2=  mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer2','1')") or die(mysql_error());
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer1','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer3','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer4','0')") or die(mysql_error());  
    $msg='thankyou, your answers has been  added';
    header('location:addQuestion.php?msg='.$msg.'');
    exit();
   }
   
   
   if($isCorrect=="answer3"){
    $sql2=  mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer3','1')") or die(mysql_error());
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer1','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer2','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer4','0')") or die(mysql_error());  
    $msg='thankyou, your answers has been  added';
    header('location:addQuestion.php?msg='.$msg.'');
    exit();
   }
   
   
   if($isCorrect=="answer4"){
    $sql2=  mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer4','1')") or die(mysql_error());
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer1','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer2','0')") or die(mysql_error());  
    mysql_query("INSERT INTO answers(question_id,answer,correct) VALUES('$lastId','$answer3','0')") or die(mysql_error());  
    $msg='thankyou, your answers has been  added';
    header('location:addQuestion.php?msg='.$msg.''); 
    exit();
   }
   
}
?>

