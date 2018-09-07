<?php include'header.php'?>
        <!-- START LEFT SIDEBAR NAV-->
        <?php include'left_side_nav.php'?>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--breadcrumbs end-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title">Veiw Live Announcements</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Veiw Live Announcements</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">Live Announcements</i>
                    <span class="hide-on-small-onl">Live Announcements</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="view_l_annoucement.php" class="grey-text text-darken-2">View Live Announcements</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
          <!--start container-->
          <div class="container">
            
            <div class="divider"></div>
            <div id="tabs-in-card" class="section">
              <h4 class="header">Veiw Live Announcements</h4>
             
              <!--Card Size-->
              <div class="divider"></div>
              <div id="basic-card" class="section">
              <div class="row">
                <div class="col s12">
                  
                </div>
                <div class="col s12 m12 l12">
                  <div class="row">
                  <div class="col s12 m6 l6">
                   <?php include'config.php';
                        $query ="SELECT * FROM live_announcements";
                        
                        $result = mysqli_query($conn , $query);
                        
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    
                    
                                    
                        echo "<div class='card gradient-45deg-light-blue-cyan gradient-shadow'>";
                            echo "<div class='card-content white-text'>";
                            echo  "<span class='card-title'>".$row['name']."</span>";
                                echo  "<p>".$row['discriptions']."</p>";
                            echo  "</div>";
                            echo  "<div class='card-action'>";
                                echo "<a href='edit_l_announcement.php?id=".$row['L_ann_id']."'>Edit</a>";
                                echo "<a href='delete_l_announcement.php?id=".$row['L_ann_id']."'>Delete</a>";
                            echo  "</div>";
                        echo  "</div>";
                                    
                                    
                                    
                                }
                            }

                        ?>
                    
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    
                     
                    
              
              <!-- Floating Action Button -->
            </div>
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <?php include'right_side_nav.php'?>
        <!-- END RIGHT SIDEBAR NAV-->
<?php include'footer.php';?>