<?php
 $matric = $_POST["matric"];
 $fsc = $_POST["fsc"];
 $test = $_POST["test"];
// print_r($matric);
// die();
$sec_matric = $matric *30 /1050; //for 30%

// print_r($sec_matric);

$sec_fsc = $fsc *30 /1100; //for 30%

// print_r($sec_fsc);

$sec_test = $test *40 /100; //for 40%

// print_r($sec_test);

$agregate = $sec_matric + $sec_fsc + $sec_test;

// $myJSON = json_encode($myObj);
?>