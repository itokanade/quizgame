<?php
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

<input type="hidden" name="qid"value="<?php $i ?>">

    
</body>
</html>