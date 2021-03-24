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
                                $id=$_GET['id'];
                                
                                $q="select * from universities where id=$id";
                                $result = $conn->query($q);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                     
                                  
                                ?>

								

									<form method="post" action="function.php" class="form-horizontal row-fluid">
										

										

                                    <div class="control-group">
											<label class="control-label" for="basicinput">University Name</label>
											<div class="controls">
										     	<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                                            	<input data-title="A tooltip for the input" name="uni_name" type="text" value="<?php echo $row['uni_name']; ?>" data-original-title="" class="span8 tip" required>
											
                                            </div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">University Adress</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="uni_adress" type="text" value="<?php echo $row['uni_adress']?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
									
										<div class="control-group">
											<label class="control-label" for="basicinput"> Marks for Matric</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="r_marks_matric" type="text" value="<?php echo $row['r_marks_matric']?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Marks for Intermediate</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="r_marks_intermediate" type="text" value="<?php echo $row['r_marks_intermediate']?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Marks for Entry Test</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="r_marks_entry" type="text" value="<?php echo $row['r_marks_entry']?>" data-original-title="" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="Edit_uni" value="Edit_uni" class="btn">Edit University</button>
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
	<script src="./scripts/jquery-1.9.1.min.js"></script>
	<script src="./scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
	<script src="./scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
	<?php
   include "partials/_mainfooter.php";
     
     ?>