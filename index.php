<?php 
    ob_start();
    session_start();
    session_destroy();
      $username='';
      $password='';
      if(isset( $_POST["username"])){ $username =$_POST["username"]; }
      if(isset( $_POST["password"])){ $password =$_POST["password"]; }

?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Login || Project Management</title>
    
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="global/vendor/waves/waves.css">
        <link rel="stylesheet" href="assets/examples/css/pages/login-v2.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body class="animation page-login-v2 layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Page -->
    <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content">
        <div class="page-brand-info">
          <div class="brand text-center">
            <i class="fa fa-tasks"> </i>
            <img class="brand-img" src="assets/images/CP_Crop_1.png" alt="...">
            <h2 class="brand-text font-size-40" style="font-weight: bold;color: #fff;text-shadow: #757575 0.1em 0.1em 0.2em;">Project Management</h2>
          </div>
        </div>

        <div class="page-login-main">
          <div class="brand hidden-md-up">
            <img class="brand-img" src="assets/images/logo-colored@2x.png" alt="...">
            <h3 class="brand-text font-size-35">Project<br> Management</h3>
          </div>
          <h3 class="font-size-24">LOGIN </h3>
          <p>Project Management Panel</p>
          <form method="post" action="./index.php" autocomplete="off">
          <div class="form-group row form-material has-success">
                    <label class="col-xl-12 col-md-3 form-control-label">Username
                    </label>
                    <div class="col-xl-12 col-md-9">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="icon md-email" aria-hidden="true"></i>
                          </span>
                        </div>
                        <div class="form-control-wrap">
                          <input type="text" class="form-control" name="username" placeholder="Username" required="" data-fv-field="username" value="<?php echo $username;?>">
                          <small id="usernamefaile" class="text-center hide"  style="color: red; font-weight: 500;"></small>
                        </div>
                      </div>
                  </div>
                </div>
            <div class="form-group row form-material has-success">
                    <label class="col-xl-12 col-md-3 form-control-label">Password
                    </label>
                    <div class="col-xl-12 col-md-9">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="icon md-lock" aria-hidden="true"></i>
                          </span>
                        </div>
                        <div class="form-control-wrap">
                          <input type="password" class="form-control is-valid" name="password" placeholder="Password" required="" data-fv-field="password" value="<?php echo $password;?>">
                          <small id="passwordfaile" class="text-center" style="color: red; font-weight: 500;"></small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php if(isset( $_GET["event"])){ ?> <div class="text-center" style="color: red;"><b>คุณถูกออกจากระบบเนื่องจากไม่มีการใช้งานนานเกินไป</b></div><?php }?>
            <button type="submit" class="btn btn-success btn-block" name="submit" value="เข้าสู่ระบบ">submit</button>
          </form>
          <footer class="page-copyright">
            <?php include('footer.html');?>
          </footer>
        </div>

      </div>
    </div>
    <!-- End Page -->
    <?php 
           include('Connnect.php');
           if(isset($_POST['submit'])){
            //Retrieve the field values from our login form.
            $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
            $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
             unset($_POST);
            //Retrieve the user account information for the given username.
            $sql = "SELECT *  FROM memberlogin WHERE LoginUsername = :LoginUsername";
            $stmt = $conn->prepare($sql);
            
            //Bind value.
            $stmt->bindValue(':LoginUsername', $username);
            
            //Execute.
            $stmt->execute();
            
            //Fetch row.
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            //If $row is FALSE.
            if($user === false){
               ?>
                 <script type="text/javascript">
                           $("#usernamefaile").append('*** Username ของท่านไม่ถูกต้องกรุณาระบุใหม่');
                          </script>
               <?php
            } else{
                //User account found. Check to see if the given password matches the
                //password hash that we stored in our users table.
             
                //If $validPassword is TRUE, the login has been successful.
                if($passwordAttempt == $user['LoginPassword']){
                    //Provide the user with a login session.
                    header("Location:configpage.php?Employee='".$user['LoginIden']."'&LoginID='".$user['LoginID']."'"); 
                    //Redirect to our protected page, which we called home.php
                   
                    exit;
                    
                } else{
                  ?>
                  <script type="text/javascript">
                       $("#passwordfaile").append('*** Password ของท่านไม่ถูกต้องกรุณาระบุใหม่');
                  </script>
                <?php
                }
            }
            $conn=null;
              
exit;
        }
         
        ?>
    <!--script check-->
    <script>
           $(document).on('click', '.hideok', function(){  
                  window.location.href="" 
								});
    </script>
    <!-- Core  -->
    <script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="global/vendor/jquery/jquery.js"></script>
    <script src="global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="global/vendor/bootstrap/bootstrap.js"></script>
    <script src="global/vendor/animsition/animsition.js"></script>
    <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="global/vendor/switchery/switchery.js"></script>
    <script src="global/vendor/intro-js/intro.js"></script>
    <script src="global/vendor/screenfull/screenfull.js"></script>
    <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="global/js/Component.js"></script>
    <script src="global/js/Plugin.js"></script>
    <script src="global/js/Base.js"></script>
    <script src="global/js/Config.js"></script>
    
    <script src="assets/js/Section/Menubar.js"></script>
    <script src="assets/js/Section/GridMenu.js"></script>
    <script src="assets/js/Section/Sidebar.js"></script>
    <script src="assets/js/Section/PageAside.js"></script>
    <script src="assets/js/Plugin/menu.js"></script>
    
    <script src="global/js/config/colors.js"></script>
    <script src="assets/js/config/tour.js"></script>
    <script>Config.set('assets', 'assets');</script>
    
    <!-- Page -->
    <script src="assets/js/Site.js"></script>
    <script src="global/js/Plugin/asscrollable.js"></script>
    <script src="global/js/Plugin/slidepanel.js"></script>
    <script src="global/js/Plugin/switchery.js"></script>
        <script src="global/js/Plugin/jquery-placeholder.js"></script>
        <script src="global/js/Plugin/material.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    
  </body>
</html>
