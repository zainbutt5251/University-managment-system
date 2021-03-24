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
								<h3 class="text-center">Add University</h3>
							</div>
							<div class="module-body">

								

								

									<form method="post" action="function.php" class="form-horizontal row-fluid">
										

										

                                    <div class="control-group">
											<label class="control-label" for="basicinput">University Name</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="uni_name" type="text" placeholder="University name" data-original-title="" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">University Adress</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="uni_adress" type="text" placeholder="University Adress" data-original-title="" class="span8 tip" required>
											</div>
										</div>
                                       
                                       
                                       
                          
                                      
                                      
									
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="add_uni" value="add_course" class="btn">Add university</button>
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