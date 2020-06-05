<?php
  session_start();
  include('Connnect.php');
  date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>โครงการทั้งหมด || PROJECT MANAGEMENT</title>
    
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
    <link rel="stylesheet" href="global/vendor/chartist/chartist.css">
    
    <link rel="stylesheet" href="global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
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
    <link rel="stylesheet" href="global/vendor/webui-popover/webui-popover.css">

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
            <h1 class="page-title">โครงการทั้งหมด</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active">โครงการทั้งหมด</li>
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
                    <!-- Button Add Project -->
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ชื่อโครงการ</th>
                      <th style="width: 100px;"><center>สถานะ</center></th>
                      <th style="width: 200px;"><center>ความคืบหน้า</center></th>     
                      <th style="width: 150px;"><center>ระยะเวลาโครงการ</center></th>
                      <th style="width: 100px;"><center>ความสำคัญ</center></th>
                      <th style="width: 100px;"><center>หัวหน้าโครงการ</center></th> 
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                            $stmt = $conn->query("SELECT * FROM projects WHERE ProjectSituation = 'proceed' ");
                            while ($row = $stmt->fetch()) {

                            $plus = 0;
                            $stprogresstask2 = $conn->query("SELECT * FROM taskprojects WHERE ProjectID = '".$row['ProjectID']."' AND TaskPoSituation = 'proceed' ");
                              while ($rowprogressproject2 = $stprogresstask2->fetch()) {
                                $plus +=  ($rowprogressproject2['TaskPoEmphasis']*$rowprogressproject2['TaskPoProgress'])/100;
                            }
                            $A = 0;
                            $A += $plus;
                          if($row['ProjectProgress'] !=number_format($A,2)){
                              $datapro = [
                                'Progress' =>number_format($A,2),
                                'ID' => $row['ProjectID']
                            ];
                            $sqlpro = " UPDATE projects SET ProjectProgress=:Progress WHERE ProjectID=:ID ";
                            $stmtpro= $conn->prepare($sqlpro);
                            $stmtpro->execute($datapro);
                          
                            $namelog = "ความคืบหน้าของโครงการ".$row['ProjectName']."มีการเปลี่ยนแปลง";
                            $datelog = date("Y-m-d H:i:s");
                            $idlog = $row['ProjectID'];
                            $assignlog = $Employee;
                            $dataprolog = [
                              'namelog' => $namelog,
                              'datelog' => $datelog,
                              'idlog' => $idlog,
                              'assignlog' => $assignlog
                          ];
                          $sqlprolog = "INSERT INTO Activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID, AssignTaskPoID) VALUES (:namelog, :datelog, :idlog, :assignlog)";
                          $stmtprolog = $conn->prepare($sqlprolog);
                          $stmtprolog->execute($dataprolog);   
                        ?>
                        <script langauge="javascript">
                        window.location.reload();
                        </script>
                        <?php
                          }
                        ?>
                        <tr>
                          <td>
                            <div class="imageWrapper">
                              <span>
                                <a href="configpage.php?idproject=<?php echo $row['ProjectID']; ?>&status=viewproject" class="btn-links text-title"  value="<?php echo $row['ProjectID']; ?>" style="text-decoration: none;" ><?php echo $row['ProjectName']; ?></a></span>
                                <span class="cornerLink">
                                <a href="configpage.php?idviewproject=<?php echo $row['ProjectID']; ?>" class="btn btn-info  btn-xs viewdata" id="<?php echo $row['ProjectID']; ?>" name="ดูข้อมูล">ดูข้อมูล</a>
                                </span>
                            </div>
                        </td>

                          <!-- Modal -->
                          <div class="modal fade" id="examplePositionTop<?php echo $row['ProjectID']; ?>" aria-hidden="true" aria-labelledby="examplePositionTop"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-top">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">ลบข้อมูล<?php echo $row['ProjectName']; ?></h4>
                                </div>
                                <div class="modal-body">
                                  <p>คุณต้องการลบโครงการนี้หรือไม่?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">ยกเลิก</button>
                                  <button type="button" class="btn btn-danger"><a href="check.php?iddelproject=<?php echo $row['ProjectID']; ?>">ยืนยัน</a></button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->

                              <?php 
                                $stmem = $conn->query("SELECT * FROM memberproject AS d1 INNER JOIN projects AS d2 ON (d1.ProjectID = d2.ProjectID) INNER JOIN 
                                employee AS d3 ON (d1.EmployeeID = d3.EmployeeID) WHERE d1.ProjectID = '".$row["ProjectID"]."' AND MemberProjectPosition = 'Project-Manager' ");
                                while ($rowmem = $stmem->fetch()) {
                                if($rowmem['MemberProjectPosition'] =="Project-Manager"){
                              ?>
                          <td>
                          <center>
                            <?php echo $row['ProjectStatus']; ?>
                          </center>
                          </td> 
                          <td>
                          <?php 
                            $decimalprogress = number_format($row['ProjectProgress'],2);
                            $percen =  $decimalprogress.''."%"; 
                            ?>
                            <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $percen;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percen;?>;">
                            <span class="progress-label"><?php echo $percen;?></span>  
                          </div>
                          </td>
                          <?php 
                            $origStartDate = $row['ProjectStartDate'];
                            $origEndDate = $row['ProjectEndDate'];
                            $newStartDate = date("d/m/Y", strtotime($origStartDate));
                            $newEndDate = date("d/m/Y", strtotime($origEndDate));
                          ?>
                          <td class="text-center"><?php echo $newStartDate.'&nbsp&nbspถึง&nbsp&nbsp'.$newEndDate; ?></td>
                          
                          <td class="text-center">
                          <?php 
                            if($row['ProjectPiority']==="สูง"){
                            ?>
                            <span class="badge badge-danger badge-lg piority"><?php echo $row['ProjectPiority']; ?></span>
                            <?php 
                            }
                            else if($row['ProjectPiority']==="ปานกลาง"){
                            ?>
                            <span class="badge badge-warning badge-lg piority"><?php echo $row['ProjectPiority']; ?></span>
                            <?php 
                            }
                            else if($row['ProjectPiority']==="ต่ำ"){
                            ?>
                            <span class="badge badge-success badge-lg piority">	<?php echo $row['ProjectPiority']; ?></span>
                            <?php } ?>
                          </td>
                          <td>
                          <center>
                          <a href="#" class="avatar avatar-sm" data-placement="right" data-toggle="tooltip" data-original-title="<?php echo $rowmem['EmployeeFullName']; ?>">
                              <img src="assets/employee/<?php echo $rowmem['EmployeePic']; ?>" alt="...">
                          </a>
                          </center>
                            <?php } } ?>
                          </td>
                        </tr>
                        <?php	} ?>
                  </tbody>
                </table>
   
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
        <script src="global/vendor/webui-popover/jquery.webui-popover.min.js"></script>
    
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
        <script src="global/js/Plugin/datatables.js"></script>
        <script src="global/js/Plugin/webui-popover.js"></script>
        <script src="assets/examples/js/uikit/tooltip-popover.js"></script>
    
    <script src="assets/examples/js/tables/datatable.js"></script>
    <script src="assets/examples/js/uikit/icon.js"></script>
    
  </body>
</html>
