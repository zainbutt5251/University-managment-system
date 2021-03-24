<?php
include "partials/_mainnav.php";

?>
<body>

<?php include "partials/_navbar.php";?>

<div class="wrapper">
		<div class="container">
			<div class="row">
			
            <?php include "partials/_mainsidebar.php";?>
				


				<div class="span9">
                    
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3 class="text-center">Add Course</h3>
							</div>
							<div class="module-body">

								

								

									<form method="post" action="function.php" class="form-horizontal row-fluid">
                                    <div class="control-group">
											<label class="control-label" for="basicinput">University Name</label>
											<div class="controls">

											<select name="uni_name" style="min-width: 66%;" >
											<option  class="form-control w-100" selected disabled>------------------------------Select university----------------------------</option>
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

                                                $sql = "SELECT * FROM universities";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                              ?>
												<option value="<?php echo $row['uni_name'];?>" class="form-control w-100"><?php echo $row['uni_name'];?></option>
											
											  <?php
												}
												}
											  ?>
												</select>
												
											
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Course Name</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="course_name" type="text" placeholder="Enter Course name" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">1 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="fees_1" placeholder="Fees 1" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">2 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_2" type="text" placeholder="Fees 2" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">3 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_3" type="text" placeholder="Fees 3" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">4 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_4" type="text" placeholder="Fees 4" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">5 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_5" type="text" placeholder="Fees 5" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">6 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_6" type="text" placeholder="Fees 6" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">7 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_7" type="text" placeholder="Fees 7" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">8 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_8" type="text" placeholder="Fees 8" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Course Merit</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="c_a_m" type="text" placeholder="Course Merit" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Year</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="year_last" type="date" placeholder="Fees 2" data-original-title="" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Admission Dead line</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="admission_dead_line" type="date" placeholder="Fees 2" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                          
                                      
                                      
									
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="add_course" value="add_course" class="btn">Add Course</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	<?php
   include "partials/_mainfooter.php";
     
     ?>