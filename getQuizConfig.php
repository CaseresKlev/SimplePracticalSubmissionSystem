<?php
    include("quizConfig.php");

    $deadLine = new DateTime($submission_time);


    $myObject = array($deadLine, $dateTime);
    // $myObject->submission_time = $deadLine;
    // $myObject->serverTime = $dateTime;

    $jsonResponse = json_encode($myObject);

    echo $jsonResponse;

?>







