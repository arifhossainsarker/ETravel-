                        
                    <?php include 'inc/header.php'; ?>
                      

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->
                        
                        <div class="content-header content-header-media">
                            <div class="header-section">
                                <div class="row">
                                    <!-- Main Title (hidden on small devices for the statistics to fit) -->
                                    <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                        <h1>Add Your Destination</h1>
                                    </div>
                                    <!-- END Main Title -->
                                </div>
                            </div>
                            
                            <img src="img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
                        </div>
                        <!-- END Dashboard Header -->

                        <!-- Mini Top Stats Row -->
                        <div class="row">
                           <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                    $place = mysqli_real_escape_string($db->link, $_POST['place']);

                                    $permited = array('jpg', 'jpeg', 'png', 'gif');
                                    $file_name = $_FILES['place_img']['name'];
                                    $file_size = $_FILES['place_img']['size'];
                                    $file_temp = $_FILES['place_img']['tmp_name'];

                                    $div = explode('.', $file_name);
                                    $file_ext = strtolower(end($div));
                                    $uniq_image = substr(md5(time()), 0,10).'.'.$file_ext;

                                    $upload_image = "upload/".$uniq_image;

                                    if ($place == "" ) {
                                        echo"<span style='color:red;'>Field must not be empty</span>";
                                    } elseif (empty($file_name)) {
                                    echo "<div class='alert alert-danger'>Select any Image.</div>";
                                    }elseif ($file_size > 1048567) {
                                        echo "<div class='alert alert-danger'>Image size should be less 1MB.</div>";
                                    }elseif (in_array($file_ext, $permited) === false) {
                                        echo "<div class='alert alert-danger'>you can upload only:-".implode(',', $permited)."</div>";
                                    }else {
                                        
                                    
                                    move_uploaded_file($file_temp, $upload_image);
                                    $query = "INSERT INTO tbl_destination(place, place_img) VALUES('$place', '$upload_image')";
                                    $insert_rows = $db->insert($query);
                                    if ($insert_rows) {
                                        echo "<span style='color:green;'>Post Add Successfully</span>";
                                    }else {
                                        echo "<span style='color:red;'>Post Add Not Successfully</span>";
                                    }
                                }
                            }
                     ?>
                           <form  action="" method="post" class="form-horizontal form-bordered ui-formwizard" enctype="multipart/form-data">
                                
                                <!-- END Step Info -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="place">Place Name</label>
                                    <div class="col-md-5">
                                        <input id="place" name="place" class="form-control " placeholder="place Name.." type="text">
                                    </div>
                                </div>
                              
                               <div class="form-group">
                                    <label class="col-md-4 control-label" for="place_img">Place Image</label>
                                    <div class="col-md-5">
                                        <input id="place_img" name="place_img" class="form-control " placeholder="place Name.." type="file">
                                    </div>
                                </div>
                            
                            <!-- END First Step -->

                                <!-- Form Buttons -->
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-sm btn-primary" id="next4" value="Next">Submit</button>
                                    </div>
                                </div>
                                <!-- END Form Buttons -->
                            </form>
                           
                        </div>
                        <!-- END Mini Top Stats Row -->
                       
                    </div>
                    <!-- END Page Content -->

                   <?php include 'inc/footer.php'; ?>