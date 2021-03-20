<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="./bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="./css/theme.css" rel="stylesheet">
	<link type="text/css" href="./images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
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
								<h3>DataTables</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>First name</th>
											<th>Last name</th>
											<th>Email</th>
											<th>password</th>
											<th>staus</th>
											<th>action</th>
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

                                                $sql = "SELECT * FROM users";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                              ?>
										<tr class="gradeU">
											<td><?php echo $row["firstname"]?></td>
											<td><?php echo $row["lastname"]?></td>
											<td><?php echo $row["email"]?></td>
                                            <td><?php echo $row["password"]?></td>
                                            <?php
                                            if($row["status"]==1){
                                            ?>
                                            <td> <a  class="btn btn-danger"href='checkstatus.php?id=<?php echo $row["id"]?>&status=<?php echo $row['status'];?>' style='color:white;text-decoration:none;'>
											<i class='fa fa-user' style='font-size:20px;'></i> Press Deactive </a></td>
											<?php
                                            }else{
                                               ?>
                                               <td> <a  class="btn btn-info"href='checkstatus.php?id=<?php echo $row["id"]?>&status=<?php echo $row['status'];?>' style='color:white;text-decoration:none;'>
											<i class='fa fa-user' style='font-size:20px;'></i> Press Active</a></td>
                                            <?php
                                            }
                                            ?>
											<td class="center">
											<button class='btn btn-danger'>
                                            <a href='DelUser.php?id=<?php echo $row["id"]?>' style='color:white;text-decoration:none;'>
											<i class='fa fa-trash' style='font-size:20px;'></i> Reject</a>
											</button>
                                            </td>
										</tr>
                                        <?php
                                             ;
                                                }
                                                } else {
                                                echo "0 results";
                                                }
                                                $conn->close();
                                                ?>
                                    
									</tbody>
									<tfoot>
										<tr>
<th>First name</th>
											<th>Last name</th>
											<th>Email</th>
											<th>password</th>
											<th>staus</th>
											<th>action</th>
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

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

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
</body>