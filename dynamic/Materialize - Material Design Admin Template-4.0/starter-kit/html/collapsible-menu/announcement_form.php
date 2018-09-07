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
                    <h5 class="breadcrumbs-title">Add Announcement</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Add Announcement</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">View Announcement</i>
                    <span class="hide-on-small-onl">View Announcement</span>
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
    
    <div class="container">
<?php 
    include'config.php';
    if(isset($_POST['submit_ann'])){
        
        $img_emp= $_FILES['img_emp']['name'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $link_ann = $_POST['link_ann'];
        
         $tragetdir = "../../../../../education/education/images/announcements/".basename($_FILES['img_emp']['name']);
        
        
        $imageFileType = strtolower(pathinfo($tragetdir,PATHINFO_EXTENSION));
        
        if ($_FILES['img_emp']['size'] > 500000) {
            echo "Sorry, your image size is too large.";
        }else if (file_exists($tragetdir)) {
            echo "Sorry, Image of Same Name already exists.";
            
        }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                echo "Sorry, only JPG, JPEG, PNG files are allowed.";
                
        }else{
            
            $query = "insert into announcements(name,inserted_date,discription,link,image) values('".$title."','".date('y-m-d')."','".$description."','".$link_ann."','".$img_emp."')";
        
       
        
         if(mysqli_query($conn , $query)){
            if(move_uploaded_file($_FILES['img_emp']['tmp_name'] , $tragetdir)){
                echo "uploaded";
            }else{
                echo "fail uploading";
                }

            }else{
                echo mysqli_error($conn);
            }
            
        }
        
    }    
        ?>
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Add Announcement</h4>
                    <div class="row">
                        <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="title" name="title" type="text">
                                    <label for="title">Title</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="description" name="description" class="materialize-textarea" length="120"></textarea>
                                    <label for="Description">Description</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6"><br>
                                    <input id="link_ann" name="link_ann" type="text">
                                    <label for="link_ann">Link of a Announcement</label>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <label for="image">Upload Image</label>
                                    <input class="file-path validate" type="text" />
                                    <div class="btn">
                                        <span>Image</span>
                                        <input type="file" name="img_emp" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit_ann">Submit
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