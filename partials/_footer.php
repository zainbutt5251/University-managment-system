 <!--================ start footer Area  =================-->	
 <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">universities </h6>
						   <ul class="list">
						   <?php
                                                $sql = "SELECT uni_name  FROM universities limit 0,4";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
											
													
                                ?>
                            	<li><a href="#"><?php echo $row['uni_name']?></a></li>
                            	
								<?php
													
                                                }
                                                } else {
                                                echo "0 results";
                                                }
                                               
                                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                          
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Corses</h6>
                            <ul class="list">
							<?php
                                                $sql = "SELECT course_name  FROM u_course_fees limit 0,4";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
											
													
                                ?>
                            	<li><a href="#"><?php echo $row['course_name']; ?></a></li>
								<?php
													
                                                }
                                                } else {
                                                echo "0 results";
                                                }
                                                $conn->close();
                                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3 class="footer_title">Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" >
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn" style="padding: 9px;"><span class="fa fa-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="User/js/popper.min.js"></script>

	
	
	
		<script type="text/javascript" src="User/js/datatables.min.js"></script>

   <script>
   $(document).ready( function () {
    $('#table_id').DataTable();
} );</script>
<script>
$("#search_list").on("click",function()
{
var data = 
{
    r_marks_matric : $("#r_marks_matric").val(),
    r_marks_intermediate : $("#r_marks_intermediate").val(),
    r_marks_entry : $("#r_marks_entry").val()
};
$.ajax({
				url: "partials/agregate.php",
				type: "POST",
				data: data,
				success: function(res){
					console.log(res.agregate)
          $("#total").val(res.agregate);
				}
			});
});
</script>
    </body>
</html>