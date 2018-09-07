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
                    <h5 class="breadcrumbs-title">Veiw Testimonial</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">Veiw Testimonial</li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">Testimonial</i>
                    <span class="hide-on-small-onl">Testimonial</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="view_testimonials.php" class="grey-text text-darken-2">View Testimonial</a>
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
              <h4 class="header">Veiw Testimonial</h4>
             
              <!--Card Size-->
              <div class="divider"></div>
              <div id="card-size" class="section">
                
                <div class="row section">
                  <div class="col s12">
                    <p class="caption">Edit & Delete</p>
                  </div>
                  <div class="col s12 m6 l6">
                    <div class="card small">
                    
                     <?php include'config.php';
                        $query ="SELECT * FROM testimonial";
                        
                        $result = mysqli_query($conn , $query);
                        
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "<div class='card-image'>";
                                                    echo "<img src='../../../../../education/education/images/testimonial/".$row['image']."' alt='sample'>";
                                                    echo "<span class='card-title'>".$row['name']."</span>";
                                                  echo "</div>";
                                                  echo "<div class='card-content'>";
                                                    echo "<p>".$row['msg']."</p>";
                                                  echo "</div>";
                                                  echo "<div class='card-action'>";
                                                    echo "<a href='edit_testimonial.php?id=".$row['tes_id']."'>Edit</a>";
                                                    echo "<a href='delete_testimonial.php?id=".$row['tes_id']."'>Delete</a>";
                                                echo "  </div>";

                                }
                            }

                        ?>
                      
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