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
   <form action="">
   
   <div class="row">
   
        <div class="col-md-4">
        <label>MATRIC</label>
            <input type="number" name="metric" class="form-control">
        </div>
        <div class="col-md-4">
        <label >INTERMEDIATE</label>
            <input type="number" name="metric" class="form-control">
        </div>
        <div class="col-md-4">
        <label for="">Entry Test</label>
        <div class="row">
        <div class="col-md-6">
        <input type="number" name="metric" class="form-control">
        </div>
        <div class="col-md-6">
        <input type="button" name="search" class="btn btn-success" value="Search">
        </div>
        </div>
           
           
        </div>
   
   </div>
   </form>
   
   </div>
        <!--================Admissiion requirement check Section =================-->
		<section class="courses_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Universities Admision Requirement</h2>
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
                                               

                                                $sql = "SELECT universities.*, u_course_fees.* FROM universities
												INNER JOIN u_course_fees ON universities.id=u_course_fees.id";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {

                                              ?>
										<tr class="gradeU">
											<td><?php echo $row["uni_name"];?></td>
											<td><?php echo $row["course_name"];?></td>
											<td><?php echo $row["c_a_m"]."%";?></td>
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
      