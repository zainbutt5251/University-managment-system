<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "oas");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// add course 
if(isset($_POST['add_course']))
{
    // $id=$_POST['id'];
    $uni_name = $_POST['uni_name'];
    $course_name = $_POST['course_name'];

    $query="select id from universities where uni_name='$uni_name'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) 
            {
           $id=$row['id'];

            }
                                            
        }
    $fees_1 = $_POST['fees_1'];
    $fees_2 = $_POST['fees_2'];
    $fees_3 = $_POST['fees_3'];
    $fees_4 = $_POST['fees_4'];
    $fees_5 = $_POST['fees_5'];
    $fees_6 = $_POST['fees_6'];
    $fees_7 = $_POST['fees_7'];
    $fees_8 = $_POST['fees_8'];
    $c_a_m = $_POST['c_a_m'];
    $year_last = $_POST['year_last'];
    $admission_dead_line = $_POST['admission_dead_line'];
    // echo  $year_last;
    // die();
$sql = "INSERT INTO u_course_fees (id,uni_name, course_name, fees_1,fees_2,fees_3,fees_4,fees_5,fees_6,fees_7,fees_8,c_a_m,year_last,admission_dead_line) VALUES
            ('$id','$uni_name',' $course_name', '$fees_1', '$fees_2','$fees_3','$fees_4','$fees_5','$fees_6','$fees_7','$fees_8','$c_a_m','$year_last','$admission_dead_line')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("location:Add_uni_course.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
 
//edit Course
if(isset($_POST['Edit_course'])){
    // echo print_r($_REQUEST);
    // die();
    $id = $_POST['c_id'];
    $uni_name = $_POST['uni_name'];
    $course_name = $_POST['course_name'];

    $fees_1 = $_POST['fees_1'];
    $fees_2 = $_POST['fees_2'];
    $fees_3 = $_POST['fees_3'];
    $fees_4 = $_POST['fees_4'];
    $fees_5 = $_POST['fees_5'];
    $fees_6 = $_POST['fees_6'];
    $fees_7 = $_POST['fees_7'];
    $fees_8 = $_POST['fees_8'];
    $c_a_m = $_POST['c_a_m'];
    $year_last = $_POST['year_last'];
    $admission_dead_line = $_POST['admission_dead_line'];
   
    $sql = "UPDATE u_course_fees SET uni_name='$uni_name',course_name='$course_name',fees_1='$fees_1',
    fees_2='$fees_2',fees_3='$fees_3',fees_4='$fees_4',fees_5='$fees_5',fees_6='$fees_6',
    fees_7='$fees_7',fees_8='$fees_8',c_a_m='$c_a_m', year_last='$year_last' ,
    admission_dead_line='$admission_dead_line' WHERE c_id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header("location:Add_uni_course.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      
      
 }

//  Add Universities 
 if(isset($_POST['add_uni']))
{
    $uni_name = $_POST['uni_name'];
    $uni_adress = $_POST['uni_adress'];
   
$sql = "INSERT INTO universities (uni_name,uni_adress) VALUES
            ('$uni_name','$uni_adress')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("location:Add_uni.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
// Edit  university 
 if(isset($_POST['Edit_uni'])){
    $id = $_POST['id'];
    $uni_name = $_POST['uni_name'];
    $uni_adress = $_POST['uni_adress'];
    $sql = "UPDATE universities SET uni_name='$uni_name' , uni_adress='$uni_adress' where id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header("location:Add_uni.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    
 }
// Close connection
mysqli_close($conn);
