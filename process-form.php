<?php

print_r($_POST);

$majors = $_POST["majors"];
$admitted1 = $_POST["admitted1"];
$dual = $_POST["dual"];
$majors2 = $_POST["majors2"];
$wsa = filter_input(INPUT_POST, "Wsa", FILTER_VALIDATE_FLOAT);
$standing = $_POST["standing"];
$resident = $_POST["resident"];
$firstgen = $_POST["firstgen"];
$running = $_POST["running"];
$transfer = $_POST["transfer"];
$transcredit = $_POST["transcredit"];
$internship = $_POST["internship"];
$work = $_POST["work"];
$gpa = filter_input(INPUT_POST, "gpa", FILTER_VALIDATE_FLOAT);
$coursestaken = filter_input(INPUT_POST, "coursestaken", FILTER_VALIDATE_INT);
$firstapp = $_POST["firstapp"];
$message = $_POST["message"];


var_dump($majors, $admitted1, $dual, $majors2, $wsa, $standing,
$resident, $firstgen, $running, $transfer ,$transcredit ,$internship, 
$work , $gpa, $coursestaken, $firstapp, $message);
?>
