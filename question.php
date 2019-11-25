<?php
sleep(3);
require_once("common.php");
$i = rand(0,count($question)-1);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>QuizGame Question</title>
</head>
<body>
    <h1>Question</h1>
    <?= $question[$i][0]?>
<form action ="result.php">
    <input type="hidden" name="qid"value="<?php $i ?>">
    <input type="text"id ="text-answer" name="answer">
    <button id="btn-answer">kaitou</button>
</form>
<script>
   document.querySelector("#btn-answer").addEventListener("click",[e] =>{
       let var document.querySelector("#text-answer").value;
       if(answer == ""){
       alert("nyuuryokusitekudasai");
       answer.focus();
       answer.style.backgroundColor = "Pink";
       e.prevnentDefault();
       }else{

         document.querySelector("#text-answer").innerHTML ="...send "
       }
   });
</script>
    
</body>
</html>