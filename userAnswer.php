<?php
session_start();

if(isset($_REQUEST['radio']) && $_REQUEST['radio'] !=""){
     //$answer=  preg_replace('/[^0-9]/', "",$_REQUEST['radio']);
    $answer = $_REQUEST['radio'];
  
    if (!isset($_SESSION['answer_array'])){
        
        $_SESSION['answer_array']=  array($answer);
        
    }  else {
       
        if(count($_SESSION['answer_array'])<1)
            $_SESSION['answer_array']=  array($answer);
    
        array_push($_SESSION['answer_array'], $answer);    
    }
    
    print_r(array_values($_SESSION['answer_array']));
}

if(isset($_REQUEST['qid']) && $_REQUEST['qid'] !=""){
    
    //$qid=  preg_replace('/[^0-9]/', "",$_REQUEST['radio']);
    $qid = $_REQUEST['qid'];
    
    if (!isset($_SESSION['qid_array']) || count($_SESSION['qid_array'])<1){
        $_SESSION['qid_array']=  array($qid);
    }  else {
        array_push($_SESSION['qid_array'], $qid);    
    }
    echo "</br>";
    print_r(array_values($_SESSION['qid_array']));
    echo "</br>";
}


require_once './connectin_db.php';
$responce="";
if(isset($_SESSION['answer_array']) && count($_SESSION['answer_array']) < 1){
    $responce="you have not answer any question yet";
    echo $responce;
    exit();
}else{
    $countCheck=  mysql_query("SELECT id FROM questions")or die(mysql_error());
    $count=  mysql_num_rows($countCheck);
    $numCorrect=0;
    foreach($_SESSION['answer_array']as $current)
        if($current == 1){
            $numCorrect++;
        }
}
$percen=$numCorrect/$count*100;
$percen=  intval($percen);
if(isset($_REQUEST['complete']) && $_REQUEST['complete'] == "true"){
    if(!isset($_REQUEST['username']) || $_REQUEST['username'] == ""){
        echo "we have an error";
        exit();
    }

$username=$_REQUEST['username'];
$username=  mysql_real_escape_string($username);
$username=  strip_tags($username);
$mail=$_SESSION['email'];
$date=date("y-m-d");

if(!in_array("1", $_SESSION['answer_array'])){
    $sql=  mysql_query("INSERT INTO quize_taker(username,percentage,date_time,user_mail) VALUE ('$username','0','$date','$mail')");
    if($sql== FALSE)
    {
        die(mysql_errno());
    }
    ?><h1><?php echo "your score is $percen";?></h1>
    <button onclick="window.location.href='destroy_quiz_session.php'">BACK TO HOME PAGE</button><?php
//    unset($_SESSION['answer_array']);
//    unset($_SESSION['qid_array']);
//    session_destroy();
    exit();
}
   $sql=  mysql_query("INSERT INTO quize_taker(username,percentage,date_time,user_mail) VALUE ('$username','$percen','$date','$mail')");
    if($sql== FALSE)
    {
        die(mysql_errno());
    }  
   ?><h1><?php echo "your score is $percen";?></h1>
    <button onclick="window.location.href='destroy_quiz_session.php'">BACK TO HOME PAGE</button><?php
//    unset($_SESSION['answer_array']);
//    unset($_SESSION['qid_array']);
//    session_destroy();
    exit();
}

    
 
    
    
    



