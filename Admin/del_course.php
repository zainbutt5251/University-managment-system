<?php
 $conn=mysqli_connect('localhost','root','','oas');
       $course_id = $_GET['c_id'];
      
   $q = "DELETE FROM `u_course_fees` WHERE c_id=$course_id";

   mysqli_query($conn,$q);
   echo "<script>alert('variety deleted succefully')</script>";
    header('location:Add_uni_course.php');
 
         ?>  