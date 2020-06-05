<?php 
      
      if($_SESSION["Employee"] == null AND $_SESSION["statusmember"] == null){
   
         $Employee= $_SESSION["Employee"];
         $statusmember= $_SESSION["statusmember"];
         include('Connnect.php');
         $date= Date("d-m-Y");

         //check timeout
          $_SESSION['activestart'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
          $_SESSION['activeexpire'] = $_SESSION['activestart'] + (60);

?>
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
        data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle">
        <span class="navbar-brand-text hidden-xs-down"> Project Management</span>
      </div>
    </div>
  
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
              </i>
            </a>
          </li>
          <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
  
        <!-- Navbar Toolbar Right -->
        <?php 
                    $sql = "SELECT * FROM memberlogin AS chk1
                    INNER JOIN employee AS chk2 ON ( chk1.LoginIden = chk2.EmployeeID) where LoginIden = '".$Employee."'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    while ($row = $stmt->fetch()) { 
                      $fullname= $row["EmployeeFullName"];
                      $EmployeePosition = $row["EmployeePosition"];
                      $EmployeePic = $row["EmployeePic"];
                    }
                ?>
        <div class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <span class="nav-link navbar-avatar waves-effect waves-light waves-round" >
                <span class="avatar avatar-online">
                  <img src="assets/employee/<?php echo $EmployeePic; ?>" style="width: 128px;">
                  <i></i>
                </span>
              </span> 
            <button  class="btn btn-defaluf navbar-right navbar-btn waves-effect waves-classic" style="margin-right:16px;color: black; background-color: #efefef;">
                ชื่อ :  <?php echo $fullname?>                แผนก : <?php echo $EmployeePosition?> 
            </button>  
            <button class="btn btn-primary navbar-right navbar-btn waves-effect waves-classic logoutbtn" style="margin-right:16px">ออกจากระบบ</button>  
        </div>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
  
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>    <div class="site-menubar">
  <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
     <script type="text/javascript">
                      	$(document).on('click', '.logoutbtn', function() {
                          $( "#madallogout" ).modal('show');
                          $(".select2-success").css("position","sticky");  
                          $(".select2-success").css("width","100%"); 
                          $(".select2-primary").css("position","sticky");  
                          $(".select2-primary").css("width","100%");  
                        });
                        $(document).on('click', '.logoutok', function(){  
                          $( "#madallogout" ).modal('hide');
                  window.location.href="./index.php" 
								});
                            </script>
                            <script>
                                setTimeout(function() {
                                  window.location.href="./index.php?event=logout" 
                                },601000);
                            </script>
      <?php  } ?>