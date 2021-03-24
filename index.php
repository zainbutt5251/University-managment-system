
<?php include "partials/_headlinks.php";?>

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
        
        <!--================Finance Area =================-->
        <section class="finance_area">
        	<div class="container">
        		<div class="finance_inner row">
        			<div class="col-lg-3 col-sm-6">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="fa fa-rocket"></i>
        						</div>
        						<div class="media-body">
        							<h5>Science & <br />Engineering</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="fa fa-globe"></i>
        						</div>
        						<div class="media-body">
        							<h5>Science & <br />Engineering</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="fa fa-smile-o"></i>
        						</div>
        						<div class="media-body">
        							<h5>Science & <br />Engineering</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="fa fa-tag"></i>
        						</div>
        						<div class="media-body">
        							<h5>Science & <br />Engineering</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Finance Area =================-->
        
      
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