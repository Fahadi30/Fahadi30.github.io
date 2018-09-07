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
                    <h5 class="breadcrumbs-title">Add Live Announcement</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Add Live Announcement</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    
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
    if(isset($_POST['submit_l_a'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $link_l_ann = $_POST['link_l_ann'];
        
         $query = "Insert into live_announcements(name,i_date,discriptions,link) values('".$title."','".date("y-m-d")."','".$description."','".$link_l_ann."')";
        
        if(mysqli_query($conn , $query)){
            echo "Record Inserted";
            }else{
                echo "Record Not Inserted";
            }
        
        
    }    
        ?>
        <!--Form Advance-->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Add Live Announcement</h4>
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
                                    <input id="link_l_ann" name="link_l_ann" type="text">
                                    <label for="link_l_ann">Link of a Course</label>
                                </div>
                                <div id="select34" class="section">
                                    <div class="input-field col s6">

                                        <select name="user_name_dropd" id="user_name_dropd">
                                            <option disabled selected>Choose your User Name</option>
                                            <?php
                                                
                                                $qurey ="SELECT * from users";
                                                $result = mysqli_query($conn,$qurey);
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                        
                                                        echo "<option>".$row['id']."- ".$row['user_name']."</option>";
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                            ?>
                                    
                                    </select>
                                        <label>Select User Name</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit_l_a">Submit
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