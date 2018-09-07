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
                    <h5 class="breadcrumbs-title">Add Course</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Add Course</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">View Course</i>
                    <span class="hide-on-small-onl">View Course</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#!" class="grey-text text-darken-2">Access<span class="badge">1</span></a>
                        </li>
                        <li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
                        </li>
                        <li><a href="#!" class="grey-text text-darken-2">Notifications</a>
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
            include'config.php';
            if(isset($_POST['submit_course'])){
                $img_course = $_FILES['img_course']['name'];
                $name = $_POST['courses_name'];
                $description = $_POST['description'];
                $link_course = $_POST['link_course'];
                
                $targetdir = "../../../../../education/education/images/courses/".basename($_FILES['img_course']['name']);
                $imageFileType = strtolower(pathinfo($targetdir,PATHINFO_EXTENSION));
        
                if ($_FILES['img_course']['size'] > 500000) {
                    echo "Sorry, your image size is too large.";
                }else if (file_exists($targetdir)) {
                    echo "Sorry, Image of Same Name already exists.";

                }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                        echo "Sorry, only JPG, JPEG, PNG files are allowed.";

                }else{
                
                
                    $query = "INSERT into courses (name,discription,image,link) values ('".$name."','".$description."','".$img_course."','".$link_course."')";

                    if(mysqli_query($conn , $query)){
                        if(move_uploaded_file($_FILES['img_course']['tmp_name'], $targetdir)){
                         echo "Uploaded";
                        }else
                            echo "Not Uploaded";
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
                    <h4 class="header2">Add Course</h4>
                    <div class="row">
                        <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="courses_namecourses_name" name="courses_name" type="text">
                                    <label for="courses_name">Course Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="description" name="description" class="materialize-textarea" length="120"></textarea>
                                    <label for="Description">Description</label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12"><br>
                                    <input id="link_course" name="link_course" type="text">
                                    <label for="link_course">Link of a Course</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <label for="image">Upload Image</label>
                                    <input class="file-path validate" type="text" />
                                    <div class="btn">
                                        <span>Image</span>
                                        <input type="file" name="img_course" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit_course">Submit
                              <i class="material-icons right">send</i>
                            </button>
                                </div>
                            </div>

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