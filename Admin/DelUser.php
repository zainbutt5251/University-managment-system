<?php
 $conn=mysqli_connect('localhost','root','','oas');
       $userid = $_GET['id'];
   $q = "DELETE FROM `users` WHERE id=$userid";

   mysqli_query($conn,$q);
   echo "<script>alert('variety deleted succefully')</script>";
    header('location:user.php');
 
         ?>  