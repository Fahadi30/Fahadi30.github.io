<?php include'header.php' ?>

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
                    <h5 class="breadcrumbs-title">E Baitussalam Portal</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">E Baitussalam Portal</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">settings</i>
                    <span class="hide-on-small-onl">Settings</span>
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
        <!--card stats start-->
        <div id="card-stats">
           
            <div class="row">
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-content red accent-2 white-text">
                            <p class="card-stats-title">
                                <i class="material-icons"></i>Registered Accounts</p>
                            <h4 class="card-stats-number">
                                    <?php include'config.php';
                                        $query ="select * from figures";
                                        $result =mysqli_query($conn , $query);
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                echo $row['reg_acc'];
                                            }
                                        }
                                    ?>
                           </h4>
                            <p class="card-stats-compare">
                                <i class="material-icons">keyboard_arrow_up</i> 70%
                                <span class="red-text text-lighten-5">last month</span>
                            </p>
                        </div>
                        <div class="card-action red darken-1">
                            <div id="sales-compositebar" class="center-align"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-content teal accent-4 white-text">
                            <p class="card-stats-title">
                                <i class="material-icons"></i>Students Enrolled in Courses</p>
                            <h4 class="card-stats-number">
                                       <?php 
                                        $query ="select * from figures";
                                        $result =mysqli_query($conn , $query);
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                echo $row['reg_std_course'];
                                            }
                                        }
                                    ?>
                                    </h4>
                            <p class="card-stats-compare">
                                <i class="material-icons">keyboard_arrow_up</i> 80%
                                <span class="teal-text text-lighten-5">from yesterday</span>
                            </p>
                        </div>
                        <div class="card-action teal darken-1">
                            <div id="profit-tristate" class="center-align"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-content deep-orange accent-2 white-text">
                            <p class="card-stats-title">
                                <i class="material-icons"></i>Courses Complete
</p>
                            <h4 class="card-stats-number">
                                       <?php
                                        $query ="select * from figures";
                                        $result =mysqli_query($conn , $query);
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                echo $row['courses_comp'];
                                            }
                                        }
                                    ?></h4>
                            <p class="card-stats-compare">
                                <i class="material-icons">keyboard_arrow_down</i> 3%
                                <span class="deep-orange-text text-lighten-5">from last month</span>
                            </p>
                        </div>
                        <div class="card-action  deep-orange darken-1">
                            <div id="invoice-line" class="center-align"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="card-widgets">
            <div class="row">

                <div class="col s12 m6 l6">
                    <div class="map-card">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="100%" height="476" id="gmap_canvas" src="https://maps.google.com/maps?q=Baitussalam%20Welfare%20Trust&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">homepage erstellen lassen</a></div>
                                    <style>
                                        .mapouter {
                                            text-align: right;
                                            height: 250px;
                                            width: 100%;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 250px;
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                            <div class="card-content">
                                <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                          <i class="material-icons">pin_drop</i>
                        </a>
                                <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">E Baitussalam</a>
                                </h4>
                                <p class="blog-post-content">Some more information about this company.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">E Baitussalam
                          <i class="material-icons right">close</i>
                        </span>
                                <p>E-Baitussalam is a free online Islamic learning platform that aims to spread the message of Islam to people across the world. It was launched, as a way to reach out to Muslim women around the world and further spread the message of Islam across borders.</p>
                                <p>
                                    <i class="material-icons cyan-text text-darken-2">perm_identity</i> Manager Name</p>
                                <p>
                                    <i class="material-icons cyan-text text-darken-2">business</i> Groud Floor 26-C, Sunset Commercial Street No.2 Khayaban-e-Jami, Phase lV, DHA, Karachi.</p>
                                <p>
                                    <i class="material-icons cyan-text text-darken-2">perm_phone_msg</i> +92 111 298 111</p>
                                <p>
                                    <i class="material-icons cyan-text text-darken-2">email</i> elearning@baitussalam.org</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div id="profile-card" class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="../../images/gallary/3.png" alt="user bg">
                        </div>
                        <div class="card-content">
                            <img src="../../images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                            <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                      </a>
                            <span class="card-title activator grey-text text-darken-4">E-Baitussalam Modulator</span>
                            <p>
                                <i class="material-icons">perm_identity</i> Moudulator</p>
                            <p>
                                <i class="material-icons">perm_phone_msg</i> +92 111 298 111</p>
                            <p>
                                <i class="material-icons">email</i> elearning@baitussalam.org</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">E-Baitussalam Modulator
                        <i class="material-icons right">close</i>
                      </span>
                            <p>Here is some more information about this card.</p>
                            <p>
                                <i class="material-icons">perm_identity</i> Moudulator</p>
                            <p>
                                <i class="material-icons">perm_phone_msg</i> +92 111 298 111</p>
                            <p>
                                <i class="material-icons">email</i> elearning@baitussalam.org</p>
                            <p>
                                <i class="material-icons">cake</i> 18th June 1990
                            </p>
                            <p>
                            </p>
                            <p>
                                <i class="material-icons">airplanemode_active</i> PAK
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--card widgets end-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START RIGHT SIDEBAR NAV-->
<?php include 'right_side_nav.php'?>
<!-- END RIGHT SIDEBAR NAV-->

<?php include'footer.php'?>