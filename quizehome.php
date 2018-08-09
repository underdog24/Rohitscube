<?php
session_start();
if(isset($_GET['question'])){
    $question=  preg_replace('/[^0-9]/',"", $_GET['question']);
    
    $next=$question + 1;
    $prev=$question - 1;
    
    if(isset($_SESSION['question']) && $_SESSION['question']== $question){
        echo 'sorry, cheating is not allowed keep it moving <a href="quizhome.php?question='.$next.'">Continuse</a> ';
        exit();
    }
    if($prev!=0){
         if(isset($_SESSION['question']) && $_SESSION['question']== $question){
         echo 'sorry, cheating is not allowed keep it moving <a href="quizhome.php?question='.$prev.'">Continuse</a> ';
        exit();
    }
}
}
?>
<html>
    <head>
        
 
        
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
           function countDown(secs,elem)
           {
               var element= document.getElementById(elem);
               element.innerHTML="You have <font color=red>"+secs+"</font>&nbsp;seconds remaning";
               if(secs<1){
                   var xhr=new XMLHttpRequest();
                   var url="userAnswer.php";
                   var vars="radio=0"+"$qid="+<?php echo $question; ?>;
                      xhr.open("POST",url,true);
                      xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                      xhr.onreadystatechange= function(){
                          if(xhr.readyState==4 && xhr.status==200){
                        
                         alert("your time  is up");
                         clearTimeout(timer);
                        }
           }
           
           xhr.send(vars);
              document.getElementById('counter_status').innerHTML="";
              document.getElementById('btnSpan').innerHTML='<h2>Time up</h2>';
              document.getElementById('btnSpan').innerHTML +='<a href="quizehome.php?question=<?php echo $next; ?>">click here now</a>';
           }
           secs--;
           var timer=setTimeout('countDown('+secs+',"'+elem+'")',1000);
           }
        </script>
        <script type="text/javascript">
                function getQuestion(){
                    var hr=new XMLHttpRequest();
                    hr.onreadystatechange=function (){
                        if(hr.readyState==4  && hr.status==200){
                            var response= hr.responseText.split("|");
                            if(response[0]== "finished"){
                                document.getElementById('status').innerHTML=response[1];
                            }
                             var nums= hr.responseText.split(",");
                             document.getElementById('question').innerHTML=nums[0];
                             document.getElementById('answers').innerHTML=nums[1];
                             document.getElementById('answers').innerHTML +=nums[2];
                        }
                    }
                    hr.open("GET","questions.php?question="+ <?php  echo $question; ?>,true);
                    hr.send();
                }
         </script>
         <script type="text/javascript">
                function x(){
                    var rads=document.getElementsByName("answer");
                    for(var i=0;i<rads.length; i++){
                        if(rads[i].checked){
                            var val=rads[i].value;
                            return val;
                        }
                    }
                }
                
                
                
                function post_answer(){
                    var p=new XMLHttpRequest();
                    var id= document.getElementById('qid').value;
                    var url="userAnswer.php";
                    var  vars="qid="+id+"&radio="+parseInt(x());
                    
                    console.log(vars);
                    p.open("POST",url,true);
                    p.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                    
                    p.send(vars);
                    
                    p.onreadystatechange= function (){
                        if(p.readyState==4 && p.status==200){
                            document.getElementById("status").innerHTML="";
                            
                            var url='quizehome.php?question=<?php echo $next ?>';
                            window.location=url;
                        }
                    }
                    
                    //document.getElementById("status").innerHTML="processing";
                  }
        </script>
        <script>
        window.oncontextmenu= function (){
            return false;
        }
        </script>
        <!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      <script src="js/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
    
    </head>
    <body bgcolor="#eeeeee" onload="getQuestion()">
        <nav style="background-color:#212121;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Quiz</a>
      
    </div>
  </nav>
        <div id="status">
            <div id="counter_status" style="margin-left:35%;font-family:Comic Sans MS;font-size:190%;margin-top:5%;"></div>
            <center><div id="question" style="font-family:Comic Sans MS;"></div></center>
            <div id="answers" style="margin-left:45%;font-family:Comic Sans MS;margin-top:7%;"></div>
        </div> 
        
        <!-- change 200 to 20 -->
        <script type="text/javascript">countDown(50,"counter_status");</script>
    </body>
</html>
