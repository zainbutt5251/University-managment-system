 <?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<?php include "partials/_headlinks.php";?>

    <body>
<?php include "partials/_nav.php";?>
        
    
   <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "oas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   ?>
   <div class="container">
   <h1 class="text-center">Calculate Your Merit</h1>
   <hr>
   
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <div class="row">
        <div class="col-md-4">
        <label>MATRIC</label>
            <input type="number" name="r_marks_matric" id="r_marks_matric" class="form-control">
        </div>
        <div class="col-md-4">
        <label >INTERMEDIATE</label>
            <input type="number" name="r_marks_intermediate" id="r_marks_intermediate" class="form-control">
        </div>
        <div class="col-md-4">
        <label for="">Entry Test</label>
        <div class="row">
        <div class="col-md-6">
        <input type="number" name="r_marks_entry" id="r_marks_entry" class="form-control">
        </div>
        <div class="col-md-6">
       
         <button type="submit" class="btn btn-primary" id="search_list">Submit</button>
       
        </div>
        </div>
           </form>
           
        </div>
   
   </div>
   

   </div>
 
        <!--================Admissiion requirement check Section =================-->
		<section class="courses_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>You are eligible for these universities</h2>
        			<hr>
        		</div>
        		<div class="row courses_inner">
				<div class="col-lg-1" style="min-width: 15%;"></div>
				<div class="col-lg-9">
		<table id="table_id" class=" table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>University  Name</th>
											<th>Course Name</th>
											<th>Merit</th>
											<th>Year</th>
											<th>Admission Dead line</th>
											<th>Detail</th>
											
										</tr>
									</thead>
									<tbody>
									
									<?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        // collect value of input field
                                        $r_marks_matric = $_POST["r_marks_matric"];
                                        $r_marks_intermediate = $_POST["r_marks_intermediate"];
                                        $r_marks_entry = $_POST["r_marks_entry"];
                                        $r_marks_matric = $r_marks_matric *35 /1100; 
                                        $r_marks_intermediate = $r_marks_intermediate *35 /1100;
                                        $r_marks_entry = $r_marks_entry *30 /100; 
                                        $agregate = $r_marks_matric + $r_marks_intermediate + $r_marks_entry;
                                          
                                                   

                                                // $sql = "SELECT universities.*, u_course_fees.* FROM universities
												// INNER JOIN u_course_fees ON universities.uni_name=u_course_fees.c_a_m";
                                                 $sql="select * from u_course_fees where c_a_m <'$agregate'";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                   
                                              ?>
										<tr class="gradeU">
											<td><?php echo $row["uni_name"];?></td>
											<td><?php echo $row["course_name"];?></td>
											<td><?php echo $row["c_a_m"];"%";?></td>
                                            <td><?php echo $row["year_last"]?></td>
                                            <td><?php echo $row["admission_dead_line"]?></td>
                                          
											<td class="center">
											<button class='btn btn-info'>
                                            <a href='uni_detail.php?id=<?php echo $row["id"]?>' style='color:white;text-decoration:none;'>
											<i class='fa fa-info' style='font-size:20px;'></i> Info</a>
											</button>
                                            </td>
										</tr>
                                        <?php
                                             ;
                                                }
                                                } else {
                                                echo "0 results";
                                                }
                                            }
                                                ?>
                                    
									</tbody>
									<tfoot>
										<tr>
										<th>University  Name</th>
											<th>Course Name</th>
											<th>Merit</th>
											<th>Year</th>
											<th>Admission Dead line</th>
											<th>Detail</th>

										</tr>
									</tfoot>
								</table>


        
		
		<!--================End Admissiion requirement check Section =================-->
        
    
		</div>
        	</div>
        </section>
        

        <!--================ start footer Area  =================-->	
      <?php include "partials/_footer.php"; ?>
      