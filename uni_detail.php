
<?php include "partials/_headlinks.php";?>
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
<body>
<?php include "partials/_nav.php";?>
       <!--================Home Banner Area =================-->
       <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center" style="padding-top:10%;">
						<h3>We Ensure better education <br />for a better world</h3>
						<p>We  Provide A Merit  Calculator In This Way You Can Easily Choose Wich University Is Better For You According To Your Previous Marks.</p>
						<a class="main_btn" href="login.php">Get Started</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
    <!--================Admissiion requirement check Section =================-->
    <section class="courses_area p_120">
        <div class="container">
                            <div class="main_title">
                <?php
                $id=$_GET['id'];
                $sql = "SELECT  * FROM u_course_fees
                where id=$id " ;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                ?>
                <h2><?php echo $row['uni_name']?> Courses  Detail</h2>
 <?php
 }
}
 ?>         
 <hr>     
            </div>
            <div class="row courses_inner">
            <div class="col-lg-1" ></div>
            <div class="col-lg-10" style="overflow-x:scroll">
    <table id="table_id" style="overflow-x:scroll" class=" table table-bordered table-striped	 display">
                                <thead>
                                <tr>
											<th>University name</th>
											<th>Course name</th>
											<th>Fees semester_1</th>
											<th>Fees semester_2</th>
											<th>Fees semester_3</th>
											<th>Fees semester_4</th>
											<th>Fees semester_5</th>
											<th>Fees semester_6</th>
											<th>Fees semester_7</th>
											<th>Fees semester_8</th>
											<th>Course Admission Merit</th>
											<th>Merit Year</th>
											<th>Admission Dealine</th>
											
										</tr>
                                </thead>
                                <tbody>
                                
                                <?php
                                           
                                            $id=$_GET['id'];
                                            $sql = "SELECT  * FROM u_course_fees
                                           where id=$id " ;
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                    
                                          ?>
                                    <tr class="gradeU">
                                    <td><?php echo $row['uni_name'] ;?></td>
                                            <td><?php echo $row['course_name'] ;?></td>
                                            <td><?php echo $row['fees_1']; ?></td>                                            
                                            <td><?php echo $row['fees_2']; ?></td>
                                            <td><?php echo $row['fees_3']; ?></td>
                                            <td><?php echo $row['fees_4']; ?></td>
                                            <td><?php echo $row['fees_5']; ?></td>
                                            <td><?php echo $row['fees_6']; ?></td>
                                            <td><?php echo $row['fees_7']; ?></td>
                                            <td><?php echo $row['fees_8']; ?></td>
                                            <td><?php echo $row['c_a_m']."%"; ?></td>
                                            <td><?php echo $row['year_last']; ?></td>
                                            <td><?php echo $row['admission_dead_line']; ?></td>
                                      
                                       
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
											<th>University name</th>
											<th>Course name</th>
											<th>Fees semester_1</th>
											<th>Fees semester_2</th>
											<th>Fees semester_3</th>
											<th>Fees semester_4</th>
											<th>Fees semester_5</th>
											<th>Fees semester_6</th>
											<th>Fees semester_7</th>
											<th>Fees semester_8</th>
											<th>Course Admission Merit</th>
											<th>Merit Year</th>
											<th>Admission Dealine</th>
										
										</tr>
                                </tfoot>
                            </table>


    
    
    <!--================End Admissiion requirement check Section =================-->
    

    </div>
        </div>
    </section>
    <!--================ start footer Area  =================-->	
  <?php include "partials/_footer.php"; ?>