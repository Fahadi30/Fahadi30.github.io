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
                    <h5 class="breadcrumbs-title">Add Figures</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Add Figures</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">View Figures</i>
                    <span class="hide-on-small-onl">View Figures</span>
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
       <?php include'config.php';
        if(isset($_POST['submit_fig'])){
            $reg_acc = $_POST['reg_acc'];
            $reg_std = $_POST['reg_std'];
            $course_comp = $_POST['course_comp'];
            
            $query = "UPDATE figures SET reg_acc='".$reg_acc."' , reg_std_course = '".$reg_std."' ,courses_comp='".$course_comp."' ";
            if(mysqli_query($conn, $query)){
                echo "Record Updated";
            }else{
                echo "Record Not Updated";
            }
            
        }
        ?>
        
        <!--Form Advance-->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Add Figures</h4>
                    <div class="row">
                        <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="reg_acc" name="reg_acc" type="number">
                                    <label for="reg_acc">Registered Accounts</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="reg_std" name="reg_std" type="number">
                                    <label for="reg_std">Registered Stutents Courses</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="course_comp" name="course_comp" type="number">
                                    <label for="course_comp">Courses Completed</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit_fig">Update Figures
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