<?php
date_default_timezone_set('Asia/Manila');
$submission_time = new DateTime("2023-03-13 18:57:00");
$dateTime = new DateTime();
//$remaining_time = $submission_time - $dateTime;

$remaining_time = $submission_time->diff($dateTime);
//print_r($remaining_time->i);
$str_rem = "2023:03:13:" . $remaining_time->h . ":" . sprintf("%02d", $remaining_time->i)  . ":" . sprintf("%02d", $remaining_time->s);
//$str_rem = "";

// if($remaining_time->h>0){
//     $str_rem .= $remaining_time->h . " Hour(s) ";
// }

// if($remaining_time->i>0){
//     $str_rem .= $remaining_time->i . " Minute(s) ";
// }

// $str_rem .= $remaining_time->s . " Second(s)";
echo $str_rem;
//print_r($str_rem);
//echo "Time Remaining: " . $remaining_time->format('Y-m-d H:i:s');


?>