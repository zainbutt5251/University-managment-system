<?php
 $r_marks_matric = $_POST["r_marks_matric"];
 $r_marks_intermediate = $_POST["r_marks_intermediate"];
 $r_marks_entry = $_POST["r_marks_entry"];
// print_r($matric);
// die();
$r_marks_matric = $r_marks_matric *35 /1100; //for 30%

// print_r($sec_matric);

$r_marks_intermediate = $r_marks_intermediate *35 /1100; //for 30%

// print_r($sec_fsc);

$r_marks_entry = $r_marks_entry *30 /100; //for 40%


$agregate = $r_marks_matric + $r_marks_intermediate + $r_marks_entry;
print_r($agregate);
// return json_encode($agregate);
?>