<?php
  session_start();
  include('Connnect.php');
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>หน้าแรก || PROJECT MANAGEMENT</title>
    
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
    <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="global/vendor/waves/waves.css">
    <link rel="stylesheet" href="global/vendor/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/examples/css/dashboard/v1.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
    <link rel="stylesheet" href="global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
    <link rel="stylesheet" href="assets/examples/css/tables/datatable.css">
    <link rel="stylesheet" href="global/css/style-des.css">
    <link rel="stylesheet" href="assets/examples/css/uikit/progress-bars.css">
    <link rel="stylesheet" href="assets/examples/css/uikit/badges.css">
    <link rel="stylesheet" href="global/vendor/nprogress/nprogress.css">
    <link rel="stylesheet" href="assets/examples/css/advanced/animation.css">
     <link rel="stylesheet" href="global/vendor/Timeline/style.css?v2" />
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script src="global/vendor/chart/highcharts.js"></script>
    <script src="global/vendor/chart/highcharts-more.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php 
      include('header.php');
    ?>
      <div class="site-menubar-body">
        <div>
          <div>
            <?php 
              include('menubar.html');
            ?>
        </div>
        </div>
      </div>
    </div>    
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">แผงควบคุม</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a href="main.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active">แผงควบคุม</li>
            </ol>
          </div>
          <div class="page-content container-fluid">
              <!-- Panel Basic -->
              <div class="panel">
                <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title"></h3>
              </header>
        <div class="panel-body">
          <h3 class="example-title"><i class="fa fa-bar-chart"></i> สรุปโครงการทั้งหมดประจำปี</h3>
          <div class="form-group float-right w-250">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <button type="button" class="btn btn-primary waves-effect waves-classic">ปีโครงการ :</button>
                      </span>
                      <select name="" id="selectyear" class="form-control" dd="dffd">
                        <?php 
                              $sqlselect = "SELECT DISTINCT(YEAR(ProjectStartDate)) AS Date FROM projects";
                              $stmtselect = $conn->prepare($sqlselect);
                              $stmtselect->execute();
                              while ($rowselect = $stmtselect->fetch()) 
                              { 
                              $year =$rowselect['Date']+543; ?>
                              <option class="form-control" value="<?php echo $rowselect['Date']?>" <?php if($_SESSION["years"]==$rowselect['Date']){ echo "selected"; } ?> ><?php echo $year; ?></option>
                              <?php  echo "nows :",date('Y');
                              echo "_SESSION ",$_SESSION["years"],"<br>";
                              echo "Base :",$rowselect['Date'];
                               }
                        ?>
                      </select>
                    </div>
                  </div>
           <div id="gantt" class="mb-40">
           </div>
       <p>
       <a href="Add_Project.php" ><button type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> เพิ่มโครงการ </button></a>       
       <br>
       </p>     
       <br>     
    <div class="row">
         <div class="col-12">
            <h3 class="example-title"><i class="fa fa-align-left"></i> กิจกรรมที่รับผิดชอบดูแล</h3>
            <div class="row">

              <div class="col-md-4">
                <div class="panel panel-primary panel-bordered" data-plugin="appear" data-animate="fade">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-folder"></i> โครงการ</h3>
                  </div>
                  <div class="panel-body">
                        <div class="row">
                          <div class="text-left">
                          <?php 
                                      $count=0;
                                      $ProjectIDs='';
                                      $sql = "SELECT DISTINCT(ch1.ProjectID),ch3.*,ch2.* FROM projects AS ch1
                                      INNER JOIN memberproject AS ch2 ON  (ch1.ProjectID = ch2.ProjectID)
                                        INNER JOIN employee AS ch3 ON  (ch2.EmployeeID = ch3.EmployeeID)
                                       WHERE ch3.EmployeeID='".$_SESSION["Employee"]."' AND ch1.ProjectSituation='proceed'";
                                      $stmt = $conn->prepare($sql);
                                      $stmt->execute();
                                      while ($row = $stmt->fetch()) 
                                      { 
                                        if($row['ProjectID']==$ProjectIDs){}
                                        else{ $ProjectIDs=$row['ProjectID'];  $count+=1; }
                                      }
                          ?>
                            <p class="font-panel"> โครงการที่รับผิดชอบ : <?php echo $count;?></p>
                            <?php 
                                $stpo = $conn->query("SELECT count(ProjectID) as ProjectID FROM projects WHERE ProjectSituation='proceed'");
                                $rowpo = $stpo->fetch(); 
                                    $ProjectID = $rowpo['ProjectID'];
                                   
                           ?>
                            <p class="font-panel">โครงการทั้งหมด : <?php echo  $ProjectID?></p>
                          </div>
                        </div>
                       <a href="./MyProject.php"><button class="btn btn-info btn-panel"><i class="fa fa-search"></i> ดูข้อมูล</button></a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="panel panel-success panel-bordered" data-plugin="appear" data-animate="fade">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-tasks"> </i> งาน</h3>
                  </div>
                  <div class="panel-body">      
                  <div class="row">
                            <div class="text-left">
                            <?php 
                                      $count=0;
                                      $TaskPoIDs='';
                                      $sql = "SELECT DISTINCT(ch1.TaskPoID),ch3.*,ch2.* ,ch4.* FROM taskprojects AS ch1 INNER JOIN assigntaskproject AS ch2 ON (ch1.TaskPoID = ch2.TaskPoID) INNER JOIN memberproject AS ch3 ON (ch2.MemberProjectID = ch3.MemberProjectID) INNER JOIN employee AS ch4 ON (ch3.EmployeeID = ch4.EmployeeID) WHERE ch4.EmployeeID='".$_SESSION["Employee"]."' AND ch1.TaskPoSituation='proceed'";
                                      $stmt = $conn->prepare($sql);
                                      $stmt->execute();
                                      while ($row = $stmt->fetch()) 
                                      { 
                                        if($row['TaskPoID']==$TaskPoIDs){}
                                        else{ $TaskPoIDs=$row['TaskPoID'];  $count+=1; }
                                      }
                          ?>
                           <p class="font-panel">งานที่รับผิดชอบ : <?php echo  $count?></p>
                           <?php 
                                $stpo = $conn->query("SELECT count(TaskPoID) as TaskPoID FROM taskprojects WHERE TaskPoSituation='proceed'");
                                $rowpo = $stpo->fetch(); 
                                    $TaskPoID = $rowpo['TaskPoID'];
                                   
                           ?>
                            <p class="font-panel">งานทั้งหมด : <?php echo $TaskPoID;?></p>
                        </div>
                    </div>
                    <a href="configpage.php?myTasks=viewtasks"> <button class="btn btn-info btn-panel"><i class="fa fa-search"></i> ดูข้อมูล</button></a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="panel panel-warning panel-bordered" data-plugin="appear" data-animate="fade">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-file-text-o"></i> งานย่อย</h3>
                  </div>
                  <div class="panel-body">
                  <div class="row">
                          <div class="text-left">
                          <?php 
                                      $count=0;
                                      $TaskIDs='';
                                      $sql = "SELECT DISTINCT(ch1.TaskID),ch3.*,ch2.* ,ch4.* FROM task AS ch1 INNER JOIN assigntask AS ch2 ON (ch1.TaskID = ch2.TaskID) INNER JOIN assigntaskproject AS ch3 ON (ch2.AssignTaskPoID = ch3.AssignTaskPoID) INNER JOIN memberproject AS ch4 ON (ch3.MemberProjectID = ch4.MemberProjectID) INNER JOIN employee AS ch5 ON (ch4.EmployeeID = ch5.EmployeeID) WHERE ch5.EmployeeID='".$_SESSION["Employee"]."' AND ch1.TaskSituation='proceed'";
                                      $stmt = $conn->prepare($sql);
                                      $stmt->execute();
                                      while ($row = $stmt->fetch()) 
                                      { 
                                        if($row['TaskID']==$TaskIDs){}
                                        else{ $TaskIDs=$row['TaskID'];  $count+=1; }
                                      }
                          ?>
                            <p class="font-panel"> งานย่อยที่รับผิดชอบ : <?php echo $count;?></p>
                            <?php 
                                $stpo = $conn->query("SELECT count(TaskID) as TaskID FROM task WHERE TaskSituation='proceed'");
                                $rowpo = $stpo->fetch(); 
                                    $TaskID = $rowpo['TaskID'];
                                   
                           ?>
                            <p class="font-panel">งานย่อยทั้งหมด : <?php echo $TaskID;?></p>
                          </div>
                        </div>
                        <a href="configpage.php?mysubTasks=viewsubtasks"> <button class="btn btn-info btn-panel"><i class="fa fa-search"></i> ดูข้อมูล</button></a>
                  </div>
                </div>
              </div>
              
              </div>
            </div>
        </div>            
              </div>
            </div>
            <!-- End Panel Basic -->
      </div>
    </div>
    <!-- End Page -->
               <!-- modal logout-->
               <div class="modal fade example-modal-sm show modal-danger" id="madallogout" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h4>ยืนยันการออกจากระบบ</h4></center></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn btn-success btn-sm logoutok">ยืนยัน</button>
                           </div>
                    </div>
                    </div>
                </div>
                          <!--end modal logout-->

    <!-- Footer -->
    <footer class="site-footer">
    <?php include('footer.html');?>
    </footer>
    <!-- Core  -->
      <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" id="jquery-gantt-js" src="global/vendor/Timeline/jquery.fn.gantt.js?v=2.3.5"></script>
    <script type="text/javascript">
            jq12 = jQuery.noConflict(true);
    </script>
    <script>    
           var selectyears='';
           var selectyearss='';
           var selectyear='';
          $('#selectyear').ready(function() {
            var e = document.getElementById("selectyear");
             selectyears = e.options[e.selectedIndex].value;
             selectyearss = e.options[e.selectedIndex].text;
             $.ajax({
                                  url: "configpage.php",
                                  type: "POST",
                                  data: ({years:selectyears}),
                                  dataType: "json",
                                  success: function(json1)
                                  {
                                    jq12(document).ready(function (){
                        "use strict";
                        var app = {};
                            app.months_json = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
                                     var gantt_data = [
                                            <?php  include('Connnect.php');
                                            $sql = "SELECT * FROM projects WHERE ProjectStartDate LIKE '%{$_SESSION["years"]}%' || ProjectEndDate LIKE '%{$_SESSION["years"]}%'";
                                            $stmt = $conn->prepare($sql);
                                                        $stmt->execute();
                                                        $count =0;
                                            while ($row = $stmt->fetch()) {
                                                          $count +=1;
                                                              $start_date = $row['ProjectStartDate'];
                                                              $start_date = date_create($start_date);
                                                              $start_date = date_format($start_date, 'd-m-Y');

                                                               $formatestart = date('Y', strtotime($start_date));
                                                              if($formatestart<$_SESSION["years"]){
                                                                  $start_date="01-01-".$_SESSION["years"];
                                                              }

                                                              $start_date = strtotime($start_date);
                                                              $start_date = $start_date * 1000;

                                                              $end_date = $row['ProjectEndDate'];
                                                              $end_date = date_create($end_date);
                                                              $end_date = date_format($end_date, 'd-m-Y');

                                                              $formateend = date('Y', strtotime($end_date));
                                                              if($formateend>$_SESSION["years"]){
                                                                  $end_date="31-12-".$_SESSION["years"];
                                                              }
                                                              $end_date = strtotime($end_date);
                                                              $end_date = $end_date * 1000;
                                                      ?>
                                            { name: "<?php echo $count;?>. <?php echo $row['ProjectName']?>",
                                              desc: "",
                                              values: [{
                                                from: <?php echo $start_date;?>,
                                                to: <?php echo $end_date;?>,
                                                label: "โครงการ :  <?php echo $row['ProjectName']?> , ความคืบหน้า :  <?php echo $row['ProjectProgress']?>%",
                                                customClass: "ganttpurple"
                                              }]
                                            },
                                        <?php } ?>];		
                                    $(function(){

                                      jq12("#gantt").gantt({
                                        source: gantt_data,
                                        itemsPerPage: 25,
                                        months: app.months_json,
                                        navigate: 'scroll',
                                        onRender: function() {
                                         jq12('#gantt .leftPanel .name .fn-label:empty').parents('.name').css('background', 'initial');
                                        }
                                      });
                                    });
                                  }
                                    )}
                    });
                
           
          });
          $('#selectyear').change(function() {
            var e = document.getElementById("selectyear");
             selectyears = e.options[e.selectedIndex].value;
             selectyearss = e.options[e.selectedIndex].text;
             $.ajax({
                                  url: "configpage.php",
                                  type: "POST",
                                  data: ({years:selectyears}),
                                  dataType: "json",
                                  success: function(json1)
                                  {
                                   
                                     var gantt_data = [
                                            <?php  include('Connnect.php');
                                            $sql = "SELECT * FROM projects WHERE ProjectStartDate LIKE '%{$_SESSION["years"]}%'";
                                            $stmt = $conn->prepare($sql);
                                                        $stmt->execute();
                                                        $count =0;
                                            while ($row = $stmt->fetch()) {
                                                          $count +=1;
                                                                $start_date = $row['ProjectStartDate'];
                                                              $start_date = date_create($start_date);
                                                              $start_date = date_format($start_date, 'd-m-Y');

                                                               $formatestart = date('Y', strtotime($start_date));
                                                              if($formatestart<$_SESSION["years"]){
                                                                  $start_date="01-01-".$_SESSION["years"];
                                                              }

                                                              $start_date = strtotime($start_date);
                                                              $start_date = $start_date * 1000;

                                                              $end_date = $row['ProjectEndDate'];
                                                              $end_date = date_create($end_date);
                                                              $end_date = date_format($end_date, 'd-m-Y');

                                                              $formateend = date('Y', strtotime($end_date));
                                                              if($formateend>$_SESSION["years"]){
                                                                  $end_date="31-12-".$_SESSION["years"];
                                                              }
                                                              $end_date = strtotime($end_date);
                                                              $end_date = $end_date * 1000;
                                                      ?>
                                            { name: "<?php echo $count;?>. <?php echo $row['ProjectName']?>",
                                              desc: "",
                                              values: [{
                                                from: <?php echo $start_date;?>,
                                                to: <?php echo $end_date;?>,
                                                label: "<?php echo $row['ProjectName']?>", 
                                                customClass: "ganttpurple"
                                              }]
                                            },
                                        <?php } ?>];		
                                    $(function(){

                                      $("#gantt").gantt({
                                        source: gantt_data,
                                        itemsPerPage: 25,
                                        months: app.months_json,
                                        navigate: 'scroll',
                                        onRender: function() {
                                          $('#gantt .leftPanel .name .fn-label:empty').parents('.name').css('background', 'initial');
                                        }
                                      });
                                    });
                                  }
                    });
                   location.reload();
                   
          });

    </script>
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
        <script src="global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="global/vendor/peity/jquery.peity.min.js"></script>
        <script src="global/vendor/datatables.net/jquery.dataTables.js"></script>
        <script src="global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
        <script src="global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
        <script src="global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
        <script src="global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
        <script src="global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
        <script src="global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
        <script src="global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
        <script src="global/vendor/datatables.net-buttons/buttons.html5.js"></script>
        <script src="global/vendor/datatables.net-buttons/buttons.flash.js"></script>
        <script src="global/vendor/datatables.net-buttons/buttons.print.js"></script>
        <script src="global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
        <script src="global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
        <script src="global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="global/vendor/bootbox/bootbox.js"></script>
        <script src="global/vendor/jquery-appear/jquery.appear.js"></script>
        <script src="global/vendor/nprogress/nprogress.js"></script>
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
        <script src="global/js/Plugin/matchheight.js"></script>
        <script src="global/js/Plugin/jvectormap.js"></script>
        <script src="global/js/Plugin/peity.js"></script>
        <script src="global/js/Plugin/jquery-appear.js"></script>
        <script src="global/js/Plugin/nprogress.js"></script>
    
        <script src="assets/examples/js/advanced/animation.js"></script>
    
  </body>
</html>
