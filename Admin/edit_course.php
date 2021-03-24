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

								<?php
                                $conn=mysqli_connect("localhost","root","","oas");
                                $id=$_GET['c_id'];
                                $q="select * from u_course_fees where c_id=$id";
                                $result = $conn->query($q);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                     
                                  
                                ?>

								

									<form method="post" action="function.php" class="form-horizontal row-fluid">
										

										

                                    <div class="control-group">
											<label class="control-label" for="basicinput">University Name</label>
											<div class="controls">
										     	<input type="hidden" name="c_id" value="<?php echo $row['c_id']?>"/>
                                            	<input data-title="A tooltip for the input" name="uni_name" type="text" value="<?php echo $row['uni_name']; ?>" data-original-title="" class="span8 tip" required>
											
                                            </div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Course Name</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="course_name" type="text" value="<?php echo $row['course_name']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">1 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="fees_1" value="<?php echo $row['fees_1']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">2 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_2" type="text" value="<?php echo $row['fees_2']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">3 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_3" type="text" value="<?php echo $row['fees_3']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">4 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_4" type="text" value="<?php echo $row['fees_4']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">5 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_5" type="text" value="<?php echo $row['fees_5']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">6 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_6" type="text" value="<?php echo $row['fees_6']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">7 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_7" type="text" value="<?php echo $row['fees_7']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">8 Semester Fee</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="fees_8" type="text" value="<?php echo $row['fees_8']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Course Merit</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="c_a_m" type="text" value="<?php echo $row['c_a_m']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Year</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="year_last" type="date" value="<?php echo $row['year_last']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Admission Dead line</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="admission_dead_line" type="date" value="<?php echo $row['admission_dead_line']; ?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                      
                                      
									
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="Edit_course" value="Edit_course" class="btn">Edit Course</button>
											</div>
										</div>
									</form>
							</div>
						</div>
<?php
   }
}
?>
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<?php
   include "partials/_mainfooter.php";
     
     ?>