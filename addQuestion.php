
<?php
$msg="";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}
session_start();
?>





<html>
    <head>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
         <script>
//function addComment()
//{
    //var comment=document.getElementById("comment").value;
  //var xhttp = new XMLHttpRequest();
  //xhttp.onreadystatechange = function() {
    //if (xhttp.readyState == 4 && xhttp.status == 200) {
     //document.getElementById("demo").innerHTML = xhttp.responseText;
    //}
  //};
  //xhttp.open("GET", "add_cmt_table.php?postid=<?php //echo $post_id ?>&comment="+comment, true);
  //xhttp.send();
//}

 $(window).resize(function()
        {
            if($(window).width() < 900)
                {
                    $("#card1").hide();
                    $("#tab").hide();
                    
                }
                else if($(window).width() > 300)
                    {
            $("#card1").show();
            $("#tab").show();

                    }
                                    
        });



  $(document).ready(function(){
    
    //alert("Session id : <?php //echo $_SESSION['group_id']; ?>");
      //$('#group_page').hide();
      
      //$('#group_invite_card').hide();

//    $('ul.tabs').tabs();
//    
//    $('select').material_select();
//    
//    $('.modal-trigger').leanModal();
//    
//    $(".button-collapse").sideNav();
//    
//    $('.collapsible').collapsible({
//      accordion : false
//    });
    
  });

  function showgroupInviteCard(group_code, group_id){
      //alert(group_code + "\nid : "+group_id);
      $.post("./createSession.php",{"group_id":group_id, "group_code":group_code},function(data,status){
          console.log("Data : "+data+"\nStatus : "+status);
      });
      //$('#group_invite_card').show(100);
      
      window.location.reload();
      
      
      //$('#group_page').show();
  }

  </script>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            .content{
                margin-top: 48px;
                margin-left: auto;
                margin-right: auto;
                width: 780px;
                border: #333 1px  solid;
                border-radius: 12px;
                padding: 12px;
                display: none;
            }
        </style>
        
        
        <script>
            
            function showDiv() {
   document.getElementById('tf').style.display = "block";
   document.getElementById('mc').style.display = "none";
            }
                    function showDiv2() {
   document.getElementById('mc').style.display = "block";
   document.getElementById('tf').style.display = "none";
            }

            </script>
    </head>
    <body>
        
        <a href="home_page_teacher.php">GO TO MAIN PAGE</a>
        
         <div class="input-field col s12">
             <select id="group_select" onchange="getOptionId(this);" required>
      <option value="" disabled selected>Choose your option</option>
      
    
 
     <?php
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$sql=mysql_query("SELECT * from teacher_create_group where group_email='$_SESSION[email]'");

while($row= mysql_fetch_assoc($sql))
{
    ?>
      <option id="<?php echo $row['group_code']; ?>" value="<?php echo $row['group_name']; ?>"><?php echo $row['group_name']; ?></option>
   <?php
}

?>
    </select>
    <label>Materialize Select</label>
  </div>     
        <div style="margin-left: auto; margin-right: auto; text-align: center; width: 700px;">
            <P style="color: #06F;"><?php echo $msg; ?></p>
            <h2>What type of question would u like to create?</h2>
            <button onclick="showDiv()">True/False</button>&nbsp;&nbsp;&nbsp;<button onclick="showDiv2()">MCQ</button>&nbsp;&nbsp;&nbsp;
            <span id="resetBtn"><button onclick="resetQuize()">Reset quize to zero</button></span>
        </div>
        
        <div class="content" id="tf">
            <h3>True/False</h3>
            <form onsubmit="formOnSubmit(this);" name="addQuestion" method="post">
                <strong>plase enter your new question</strong>
                <br />
                <textarea id="tfDesc" name="desc" style="width:400px;height: 95px; "></textarea>
                <br />
                <br />
                <input type="text"  id="answer1" name="answer1" value="True" readonly>&nbsp;&nbsp;
                  <lable style="cursor: pointer; color: #06F;">
                      <input type="radio" name="iscorrect" value="answer1">Corrrect answer?</lable>
                    <br />
                    
                    <input type="text"  id="answer2" name="answer2" value="False" readonly>&nbsp;&nbsp;
                  <lable style="cursor: pointer; color: #06F;">
                      <input type="radio" name="iscorrect" value="answer2">Corrrect answer?</lable>
                    <br />
                    <br />
                   
                    <input type="submit" value="add question">
                
            </form>
            
        </div>
        
        
        
        
        
         <div class="content" id="mc">
            <h3>MCQ</h3>
            <form action="addData.php?type=mc" name="addMcQuestion" method="post">
                <strong>plase enter your new question</strong>
                <br />
                <textarea id="mcDesc" name="desc" style="width:400px;height: 95px; "></textarea>
                <br />
                <br />
                <strong>plase enter option 1</strong>
                <input type="text"  id="mcanswer1" name="answer1">&nbsp;&nbsp;
                  <lable style="cursor: pointer; color: #06F;">
                      <input type="radio" name="iscorrect" value="answer1">Corrrect answer?</lable>
                    <br />
                    <br />
                     <strong>plase enter option 2</strong>
                    <input type="text"  id="mcanswer2" name="answer2">&nbsp;&nbsp;
                  <lable style="cursor: pointer; color: #06F;">
                      <input type="radio" name="iscorrect" value="answer2">Corrrect answer?</lable>
                    <br />
                    <br />
                    <strong>plase enter option 3</strong>
                    <input type="text"  id="mcanswer3" name="answer3">&nbsp;&nbsp;
                  <lable style="cursor: pointer; color: #06F;">
                      <input type="radio" name="iscorrect" value="answer3">Corrrect answer?</lable>
                    
                    <br />
                    <br />
                    <strong>plase enter option 4</strong>
                    <input type="text"  id="mcanswer4" name="answer4">&nbsp;&nbsp;
                  <lable style="cursor: pointer; color: #06F;">
                      <input type="radio" name="iscorrect" value="answer4">Corrrect answer?</lable>
               
                    <input type="submit" value="add question">
                
            </form>
            
        </div>
        
       
        <script>
        // action="addData.php?type=tf"
                 
        
            function getOptionId(obj){
                var group_code = obj[obj.selectedIndex].id;
                
                return group_code;
            }
        
        </script>  
        
    </body>
</html>




