<?php include 'header.php' ?>

<!-- START LEFT SIDEBAR NAV-->
<?php include 'left_side_nav.php'?>
<!-- END LEFT SIDEBAR NAV-->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->

<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title">Edit Course</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Edit Course</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">Courses</i>
                    <span class="hide-on-small-onl">Courses</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="view_courses.php" class="grey-text text-darken-2">View Courses</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
        <?php 
    $id = $_GET['id'];
            include'config.php';
            if(isset($_POST['edit_submit'])){
                $img_course = $_FILES['img_course']['name'];
                $name = $_POST['courses_name'];
                $description = $_POST['description'];
                $link_course = $_POST['link_course'];
                
                $targetdir = "../../../../../education/education/images/courses/".basename($_FILES['img_course']['name']);
                $imageFileType = strtolower(pathinfo($targetdir,PATHINFO_EXTENSION));
        
                if ($_FILES['img_course']['size'] > 500000) {
                    echo "Sorry, your image size is too large.";
                }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                        echo "Sorry, only JPG, JPEG, PNG files are allowed.";

                }else{
                
                
                    $query = "UPDATE `courses` SET `name`='".$name."',`discription`='".$description."',`image`='".$img_course."',`link`='".$link_course."' WHERE course_id ='".$id."'";

                    if(mysqli_query($conn , $query)){
                        if(move_uploaded_file($_FILES['img_course']['tmp_name'], $targetdir)){
                         echo "Record have been Updated";
                        }else
                            echo "Not Updated";
                    }else{
                        echo mysqli_error($conn);
                    }
                }
            }
        ?>
        <!--Form Advance-->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Edit Course</h4>
                    <div class="row">
                        <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                           
                           <?php 
                            
                            $query = "Select * from courses where course_id ='".$id."'";
                            $result = mysqli_query($conn , $query);
                            
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    
                                
                            ?>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="courses_namecourses_name" name="courses_name" type="text" value="<?php echo $row['name'];?>">
                                    <label for="courses_name">Course Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="description" name="description" class="materialize-textarea" length="120" ><?php echo $row['discription'];?></textarea>
                                    <label for="Description">Description</label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12"><br>
                                    <input id="link_course" name="link_course" type="text" value="<?php echo $row['link'];?>">
                                    <label for="link_course">Link of a Course</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <label for="image">Upload Image</label>
                                    <input class="file-path validate" type="text" value="<?php echo $row['image'];?>" />
                                    <div class="btn">
                                        <span>Image</span>
                                        <input type="file" name="img_course" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="edit_submit">Submit
                              <i class="material-icons right">send</i>
                            </button>
                                </div>
                            </div>
                            
                            <?php
                                }
                            }
                            ?>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START RIGHT SIDEBAR NAV-->
<?php include'right_side_nav.php'?>
<!-- END RIGHT SIDEBAR NAV-->




<?php include'footer.php'?>