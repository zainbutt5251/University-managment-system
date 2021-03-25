<?php
include "partials/_mainnav.php";

?>
<body>
<style>
    .dataTables_wrapper {
	overflow-x: scroll!important;
}
</style>
<?php include "partials/_navbar.php";?>


	<div class="wrapper">
		<div class="container">
			<div class="row">
				 <?php include "partials/_mainsidebar.php";?>

				<div class="span9">
					<div class="content">

					
						<div class="module">
							<div class="module-head">
								<h3><a href="Add_uni_Course_form.php" class="btn btn-info">Add Course</a> </h3>
							</div>
							<div class="module-body table">
								<table style="overflow-x:scroll"  class="table-responsive datatable-1 table table-bordered table-striped	 " width="100%">
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
											<th>Action</th>
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

                                                $sql = "SELECT * FROM u_course_fees";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                            
											?>
                                        <tr>
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

                                            <td><a href="edit_course.php?c_id=<?php echo $row['c_id']; ?>" class="btn btn-info">Edit</a><a href="del_course.php?c_id=<?php echo $row['c_id']; ?>" class="btn btn-danger">Del</a> </td>
                                        </tr>
                                        <?php 
                                            }}
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
											<th>Admission Deadline</th>
                                            <th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	<script src="./scripts/jquery-1.9.1.min.js"></script>

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