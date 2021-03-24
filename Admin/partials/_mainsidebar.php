   <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="welcome.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="Add_uni_course.php"><i class="menu-icon icon-inbox"></i>Add univerity Description  </a>
                                </li>
                                <li>
                                
                                
                                
                                <a href="User.php"><i class="menu-icon icon-bullhorn "></i> Manage User
                                <b class="label green pull-right">
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
                                    function totalvarieties(){
                                      global $conn;
                                       $query="SELECT count(status) AS total from  users where status=0";
                                       // echo $query;
                                       $run_query=mysqli_query($conn,$query);
                                        // die(print_r('<pre>'.$run_query.'</pre>'));
                                      $count_item = mysqli_fetch_assoc($run_query);
                                      $numrows=$count_item['total'];
                                      echo $numrows.":pending";
                                   
                                    }
                                    totalvarieties();
                                    ?>
                                    
                                
                                    
                                    
                                    
                                    </b> </a></li>
                                <li><a href="Add_uni.php"><i class="menu-icon icon-tasks"></i>Add University with Aggregate</a></li>
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->