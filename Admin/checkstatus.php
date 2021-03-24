<?php
 $conn=mysqli_connect('localhost','root','','oas');
  $id = $_GET['id'];
  $status=$_GET['status'];
  if($status==0){
      
     
        $sql = "UPDATE users SET status=1 WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
          header('location:user.php');
        } else {
          echo "Error updating record: " . $conn->error;
     header('location:user.php');
            
        }
         
       }
       if($status==1){
           $sql = "UPDATE users SET status=0 WHERE id='$id'";
        //    echo $sql;   
        //    echo $status;   
        //    die();  
        
        mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
             
            header('location:user.php');
          } else {
            echo "Error updating record: " . $conn->error;
           
       header('location:user.php');
              
          }
        
       }
         ?>  