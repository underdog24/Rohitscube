<?php 
session_start();
require_once 'connectin_db.php';
$arrycount="";
?>

<html>
    <head>
        
 
        
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      <script src="js/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
    </head>
    <body>
        
        



<?php

if(isset($_GET['question'])){
    $question=  preg_replace('/[^0-9]/',"", $_GET['question']);
    
    $outputs="";
    $answers="";
    $q="";
    $sql=  mysql_query("SELECT id FROM questions");   
    $numquestion=  mysql_num_rows($sql);
    
   if(isset($_SESSION['answer_array'])){
       if($_SESSION['answer_array']<1)
        $currentquestion="1";
       else
           $arrCount=count($_SESSION['answer_array']);
       
        print_r($_SESSION['answer_array']);
    
        if($arrCount>$numquestion){
            unset($_SESSION['answer_array']);
            header("location:index.php");
            exit();
        }
        if($arrCount>=$numquestion){
           echo 'finished|<p>there are no more question please enter your username</p> <form action="userAnswer.php" method="post"> <input type="hidden" name="complete" value="true"><input type="text" name="username" width="50px" height="50" placeholder="Enter your name"> <input type="submit" value="finish"></form>';
            exit();
        }
   }
        
        
    $singlesql=  mysql_query("SELECT * FROM questions WHERE id='$question' LIMIT 1");
    
    if($singlesql === FALSE) { 
        die(mysql_error()); // TODO: better error handling
    }

    while ($row = mysql_fetch_array($singlesql)){
        $id=$row['id'];
        
        $thisqustion=$row['question'];
        $type=$row['type'];
        $question_id=$row['question_id'];
        $q='<h2>'.$thisqustion.'</h2>';
        $sql2=  mysql_query("SELECT * FROM answers WHERE question_id='$question' ORDER BY rand()");
        $i = 0;
           while ($row2=  mysql_fetch_array($sql2)){
            $answer=$row2['answer'];
            $correct=$row2['correct'];
            $answers .='<input type="radio" name="answer" id="q'.$i.'" value="'.$correct.'"><label for="q'.$i.'">'.$answer.'</label>  <input type="hidden" id="qid" value="'.$id.'" name="qid"><br/><br/>';
            $i = $i + 1;
            
        }
        
        $outputs="".$q.",".$answers.",<span id='btnSpan'><button type='button' class='btn' id='submit_btn' onclick='post_answer();'>submit</button></span>";
        echo $outputs;
    }
}
?>
</body>
</html>