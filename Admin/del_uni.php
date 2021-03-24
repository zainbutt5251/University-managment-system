<?php
 $conn=mysqli_connect('localhost','root','','oas');
       $uni_id = $_GET['id'];
      
   $q = "DELETE FROM `universities` WHERE id=$uni_id";

   mysqli_query($conn,$q);
   echo "<script>alert('variety deleted succefully')</script>";
    header('location:Add_uni.php');
 
         ?>  