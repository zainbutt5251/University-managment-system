<?php
 $matric = $_POST["matric"];
 $fsc = $_POST["fsc"];
 $test = $_POST["test"];
// print_r($matric);
// die();
$sec_matric = $matric *30 /1100; //for 30%

// print_r($sec_matric);

$sec_fsc = $fsc *30 /1100; //for 30%

// print_r($sec_fsc);

$sec_test = $test *40 /100; //for 40%


$agregate = $sec_matric + $sec_fsc + $sec_test;

print_r($agregate);
// return json_encode($agregate);
?>