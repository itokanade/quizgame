<?php
require_once("common.php");

$qid = $_GET('qid');
$answer = $_GET('answer');

if( $question [$qid[1]] == $answer)
{
    echo "true";
}
else{
    echo "wrong";
}
