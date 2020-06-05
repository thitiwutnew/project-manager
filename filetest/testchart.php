<?php
  session_start();
	include('../Connnect.php');
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Dashboard | Remark Material Admin Template</title>
    
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../global/vendor/waves/waves.css">
    <link rel="stylesheet" href="../global/vendor/chartist/chartist.css">
    <link rel="stylesheet" href="../global/vendor/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="../assets/examples/css/dashboard/v1.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
    <link rel="stylesheet" href="../global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
    <link rel="stylesheet" href="../assets/examples/css/tables/datatable.css">
    <link rel="stylesheet" href="../global/css/style-des.css">
    <link rel="stylesheet" href="../assets/examples/css/uikit/progress-bars.css">
    <link rel="stylesheet" href="../assets/examples/css/uikit/badges.css">
    <link rel="stylesheet" href="../assets/examples/css/charts/chartjs.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="../global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
       <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
    
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php 
     
    ?>
      <div class="site-menubar-body">
        <div>
          <div>
            <?php 
              include('../menubar.html');
            ?>
            <div class="site-menubar-section">
              <h5>
                Milestone
                <span class="float-right">30%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
              </div>
              <h5>
                Release
                <span class="float-right">60%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
              </div>
            </div>      </div>
        </div>
      </div>
    
      <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Settings">
          <span class="icon md-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
          <span class="icon md-eye-off" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
          <span class="icon md-power" aria-hidden="true"></span>
        </a>
      </div>
    </div>    
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">โครงการทั้งหมด</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active">โครงการทั้งหมด</li>
            </ol>
            <div class="page-header-actions">
              <form>
                <div class="input-search input-search-dark">
                  <i class="input-search-icon md-search" aria-hidden="true"></i>
                  <input type="text" class="form-control" name="" placeholder="Search...">
                </div>
              </form>
            </div>
          </div>
          <div class="page-content container-fluid">
      <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [
                [6],
                [5],
                [4],
                [14],
                [7],
                [3]
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
       scales: {
            yAxes: [{
                ticks: {
                    max: 50,
                    min: 100
                }
            }]
        }
    }
});
</script>
	</div>
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="../global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../global/vendor/chartist/chartist.min.js"></script>
        <script src="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="../global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="../global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="../global/vendor/peity/jquery.peity.min.js"></script>
        <script src="../global/vendor/datatables.net/jquery.dataTables.js"></script>
        <script src="../global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="../global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
        <script src="../global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
        <script src="../global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
        <script src="../global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
        <script src="../global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
        <script src="../global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
        <script src="../global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
        <script src="../global/vendor/datatables.net-buttons/buttons.html5.js"></script>
        <script src="../global/vendor/datatables.net-buttons/buttons.flash.js"></script>
        <script src="../global/vendor/datatables.net-buttons/buttons.print.js"></script>
        <script src="../global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
        <script src="../global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
        <script src="../global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="../global/vendor/bootbox/bootbox.js"></script>
     
    
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/GridMenu.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>
    
    <script src="../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    <script>Config.set('../assets', '../assets');</script>
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/matchheight.js"></script>
        <script src="../global/js/Plugin/jvectormap.js"></script>
        <script src="../global/js/Plugin/peity.js"></script>
        <script src="../assets/examples/js/charts/chartjs.js"></script>
    
  </body>
</html>
