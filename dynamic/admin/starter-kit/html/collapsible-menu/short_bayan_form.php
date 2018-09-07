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
                    <h5 class="breadcrumbs-title">Add Short Bayan</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Add Short Bayan</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">View Short Bayan</i>
                    <span class="hide-on-small-onl">View Short Bayan</span>
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
            if(isset($_POST['submit_bayan'])){
                $ved_bayan = $_FILES['ved_bayan']['name'];
                $title_bayan = $_POST['title_bayan'];
                $description = $_POST['description'];
                
                
                $targetdir = "../../../../../education/education/images/short_bayans/".basename($_FILES['ved_bayan']['name']);
                
                $imageFileType = strtolower(pathinfo($targetdir,PATHINFO_EXTENSION));
        
                if ($_FILES['ved_bayan']['size'] > 10000000) {
                    echo "Sorry, your Bayan size is too large.";
                }else if (file_exists($targetdir)) {
                    echo "Sorry, Bayan of Same Name already exists.";

                }else if($imageFileType != "mp4") {
                        echo "Sorry, only MP3 files are allowed.";

                }else{
                
                
                    $query = "INSERT into short_bayan (name,discription,bayan) values ('".$title_bayan."','".$description."','".$ved_bayan."')";

                    if(mysqli_query($conn , $query)){
                        if(move_uploaded_file($_FILES['ved_bayan']['tmp_name'], $targetdir)){
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
                    <h4 class="header2">Add Short Bayan</h4>
                    <div class="row">
                        <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="title_bayan" name="title_bayan" type="text">
                                    <label for="title_bayan">Title</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="description" name="description" class="materialize-textarea" length="120"></textarea>
                                    <label for="Description">Description</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <label for="image">Upload Bayan</label>
                                    <input class="file-path validate" type="text" />
                                    <div class="btn">
                                        <span>Upload</span>
                                        <input type="file" name="ved_bayan" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit_bayan">Submit
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