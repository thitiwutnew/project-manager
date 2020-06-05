<?php
  session_start();
  date_default_timezone_set("Asia/Bangkok");
  include('Connnect.php');
  $userid = $_SESSION["Employee"]; 
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>เพิ่มโครงการ</title>
    
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
    <link rel="stylesheet" href="global/vendor/waves/waves.css">
             <link rel="stylesheet" href="global/vendor/select2/select2.css">
             <link rel="stylesheet" href="global/vendor/bootstrap-select/bootstrap-select.css">
             <link rel="stylesheet" href="global/vendor/jquery-strength/jquery-strength.css">
    <link rel="stylesheet" href="global/vendor/chartist/chartist.css">
    <link rel="stylesheet" href="global/vendor/jvectormap/jquery-jvectormap.css">
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
    <link rel="stylesheet" href="global/vendor/multi-select/multi-select.css">
    <link rel="stylesheet" href="assets/examples/css/forms/advanced.css">
        <link rel="stylesheet" href="global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
        <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="assets/examples/css/uikit/icon.css">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/octicons/octicons.css">
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

              $stproall = $conn->query("SELECT count(ProjectID) as countId FROM projects WHERE ProjectSituation = 'proceed' ");
              $rowproall = $stproall->fetch();
              $countproall = $rowproall['countId'];
            ?>
               </div>
        </div>
      </div>
    </div>    
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">เพิ่มโครงการ</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active">เพิ่มโครงการ</li>
            </ol>
           
          </div>
          <div class="page-content container-fluid">
                <div class="col-md-12">
          
              <!-- Panel Basic -->
            <div class="panel">
                <header class="panel-heading">
                  <div class="panel-actions"></div>
                  <h3 class="panel-title"></h3>
                </header>
              <div class="panel-body">
                
            <!-- Panel Floating Labels -->
           
              <div class="panel-heading">
                <h3 class="panel-title">กรอกข้อมูลโครงการ</h3>
              </div>
              <div class="panel-body container-fluid">
                <form autocomplete="off" method="POST" action=''>
                    
                                            <?php 
                                              $stpo = $conn->query("SELECT count(ProjectID) as countId FROM projects");
                                              $rowpo = $stpo->fetch(); 
                                              $poid = $rowpo['countId']+1;
                                            ?>
                                            <input type="hidden"  id="ProjectID" type="text" name='ProjectID'  value="PJ<?php echo $poid;?>" class="form-control" readonly>								
                                            
                                            <h4 class="example-title">ชื่อโครงการ</h4>
                                            <input type="text" class="form-control" id="inputRounded" name="NameProject" required>
                                            
                                            <h4 class="example-title">รายละเอียดโครงการ</h4>
                                            <textarea class="form-control" id="textareaDefault" name="ProjectDetail" rows="3" required></textarea>

                                            <h4 class="example-title">ความสำคัญ</h4>
                                            <div class="form-group">
                                                <select name="Piority" class="form-control">
                                                  <option value="ยังไม่เริ่มโครงการ" selected>ยังไม่เริ่มโครงการ</option>
                                                  <option value="สูง">สูง</option>
                                                  <option value="ปานกลาง">ปานกลาง</option>
                                                  <option value="ต่ำ" selected>ต่ำ</option>	
                                                </select>
                                            </div>

                                            <h4 class="example-title">สถานะ</h4>
                                            <div class="form-group">
                                                <select class="form-control" name="Status">
                                                  <option value="กำลังดำเนินการ" selected>กำลังดำเนินการ</option>
                                                  <option value="อยู่ระหว่างพักโครงการ">อยู่ระหว่างพักโครงการ</option>
                                                  <option value="ดำเนินการเสร็จสิ้น">ดำเนินการเสร็จสิ้น</option>	
                                                  <option value="ยังไม่เริ่มโครงการ">ยังไม่เริ่มโครงการ</option>
                                                  <option value="ยกเลิกโครงการ">ยกเลิกโครงการ</option>
                                                </select>
                                            </div>

                                            <!-- create date -->
                                            <?php $date = date("Y/m/d") ;?>					
                                            <input type="hidden"  id="myInput" type="text" name='CreateDate' class="form-control" value="<?php echo $date; ?>" >
                                            <!-- End create date -->      

                                          <div class="form-group">        
                                              <h4 class="example-title">วันที่เริ่มโครงการ</h4>
                                              <div class="example">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="icon md-calendar" aria-hidden="true"></i>
                                                    </span>
                                                  </div>
                                                  <input type="text" name="datestart" class="form-control" data-plugin="datepicker" required>
                                                </div>
                                              </div>
                                              <h4 class="example-title">วันที่สิ้นสุดโครงการ</h4>
                                              <div class="example">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="icon md-calendar" aria-hidden="true"></i>
                                                    </span>
                                                  </div>
                                                  <input type="text" name="dateend" class="form-control" data-plugin="datepicker" required>
                                                </div>
                                              </div>
                                          </div>

                                            <h4 class="example-title">หัวหน้าโครงการ</h4>
                                            <div class="form-group">
                                                <select class="form-control" name="SelectPM" required>
                                                      <option value="" selected></option>
                                                        <?php 
                                                          $stpm = $conn->query("SELECT * FROM Employee");
                                                          while ($rowpm = $stpm->fetch()) {
                                                        ?>
                                                        <option value="<?php echo $rowpm['EmployeeID']; ?>"><?php echo $rowpm['EmployeeFullName']; ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>
                                            
                                            <h4 class="example-title">สมาชิกโครงการ</h4>      
                                            <div class="form-group">                                       
                                              <select name="SelectMember[]" multiple data-plugin="selectpicker" required>
                                                <optgroup data-max-options="30" label="รายชื่อพนักงาน">
                                                <?php 
                                                  $stmt = $conn->query("SELECT * FROM Employee");
                                                  while ($row = $stmt->fetch()) {
                                                ?>
                                                <option value="<?php echo $row['EmployeeID']; ?>" <?php //if($row['EmployeeFullName']=='A'){echo 'selected';} ?>><?php echo $row['EmployeeFullName']; ?></option>								
                                                <?php } ?>
                                                </optgroup>
                                              </select>
                                            </div>

                                            <div class="form-group">
                                            <center>
                                            <a href="main.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-warning" >ยกเลิก</button></a>
                                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-success" name="submit" id="submit" >ยืนยัน</button>
                                            </center>    
                                            </div>
                </form>
                                    <!-- modal logout-->
                                        <div class="modal fade example-modal-sm show modal-danger" id="madallogout" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                                          <div class="modal-dialog modal-simple modal-sm modal-center">
                                            <div class="modal-content">
                                              <div class="modal-header madal-title">
                                                  <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                                              </div>
                                              <div class="modal-body">
                                                <p><center><h4>ยืนยันการออกจากระบบ</h4></center></p>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">ยกเลิก</button>
                                                  <button type="button" class="btn btn-success btn-sm logoutok">ยืนยัน</button>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      <!--end modal logout-->
                                      <!-- Modal complete-->
                                      <div class="modal fade modal-success" id="modalcomplete" aria-hidden="true"
                                         role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="MyProject.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h4 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h4>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-check" aria-hidden="true" style="font-size:64px;"></i>
                                              <p><h3>เพิ่มโครงการของคุณเรียบร้อย!<h3></p>
                                              </center>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="main.php"><button type="button" class="btn btn-success">ตกลง</button></a>      
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal complete-->
                                       
                                       <!-- Modal -->
                                      <div class="modal fade modal-danger " id="modalerror" aria-hidden="true" 
                                        role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="Add_Project.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h4 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h4>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-x" aria-hidden="true" style="font-size:64px;"></i>
                                            <p><h3>หัวหน้าโครงการซ้ำกับสมาชิก กรุณาเลือกใหม่!<h3></p>
                                            </center>
                                            </div>
                                            <div class="modal-footer">
                                            <a href="Add_Project.php"><button type="button" class="btn btn-default">ตกลง</button></a> 
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal -->
                 
                                  <?php
                                        //เช็ค if ถ้า else ให้ insert
                                        if(isset($_POST['submit'])){
                                        $check ="";
                                        $arraymember =  $_POST['SelectMember'];
                                        $countarraycheck = count($arraymember);
                                        $checkpm = $_POST['SelectPM'];
                                          for($che=0; $che<$countarraycheck; $che++){
                                            if($checkpm == $arraymember[$che]){
                                                $check = "false";
                                      if($check == "false"){
                                    ?>
                                        <script>        
                                          $(document).ready(function(){
                                          // Show the Modal on load
                                          $("#modalerror").modal("show");
                                          });
                                        </script>
                                    <?php
                                      }
                                            }
                                          }
                                        }         
                                if(isset($_POST['submit']) && $check != "false"){
                                    $datestart = $_POST['datestart'];
                                    $newStartDate = date("Y-m-d", strtotime($datestart));
                                    $dateend = $_POST['dateend'];
                                    $newEndDate = date("Y-m-d", strtotime($dateend));									
                                    $Progress = 0;
                                    $projectsituation = "proceed";
                                    $datapro = [
                                        'ID' => $_POST['ProjectID'],
                                        'NameProject' => $_POST['NameProject'],
                                        'Status' => $_POST['Status'],
                                        'datestart' => $newStartDate,
                                        'dateend' => $newEndDate,
                                        'Piority' => $_POST['Piority'],
                                        'Progress' => $Progress,
                                        'createdate' => $_POST['CreateDate'],
                                        'projectsituation' => $projectsituation,
                                        'ProjectDetail' => $_POST['ProjectDetail']
                                    ];
                                    $sqlpro = "INSERT INTO projects (ProjectID, ProjectName, ProjectStartDate, ProjectEndDate, ProjectStatus, ProjectPiority, ProjectProgress, ProjectCreateDate, ProjectSituation, ProjectDetail) VALUES (:ID, :NameProject, :datestart, :dateend, :Status, :Piority, :Progress, :createdate, :projectsituation, :ProjectDetail)";
                                    $stmtpro= $conn->prepare($sqlpro);
                                    $stmtpro->execute($datapro);
                                    }
                                    //เอาไปรวมกับproject
                                    if(isset($_POST['submit']) && $_POST['SelectPM'] != "" && $check != "false"){
 
                                        $PositionPM = "Project-Manager";
                                    
                                        $datapm = [
                                            'SelectPM' => $_POST['SelectPM'],
                                            'PositionPM' => $PositionPM,
                                            'poid' => $_POST['ProjectID']
                                        ];
                                        $sqlpm = "INSERT INTO memberproject (MemberProjectPosition, ProjectID, EmployeeID) VALUES (:PositionPM, :poid, :SelectPM)";
                                        $stmtpm= $conn->prepare($sqlpm);
                                        $stmtpm->execute($datapm);
                                        }
                                        //เอาไปรวมกับproject
                                        if(isset($_POST['submit']) && $_POST['SelectMember'] != "" && $check != "false"){

                                            $Position = "Project-Member";
                                            $arraymember =  $_POST['SelectMember'];
                                            $countarray = count($arraymember);
                      
                                            for($i=0; $i<$countarray; $i++){
                                            $datamb = [
                                                'SelectMember' => $arraymember[$i],
                                                'Position' => $Position,
                                                'poid' => $_POST['ProjectID']
                                            ];
                                            $sqlmb = "INSERT INTO memberproject (MemberProjectPosition, ProjectID, EmployeeID) VALUES (:Position, :poid, :SelectMember)";
                                            $stmtmb= $conn->prepare($sqlmb);
                                            $stmtmb->execute($datamb);
                                            //echo"<body onload=\"window.alert('เพิ่มโครงการสำเร็จ');\">";
                                                } 
                                            }
                                            if(isset($_POST['submit']) && $_POST['NameProject'] != '' && $check != "false"){
                                              $namelogpo = $_POST['NameProject'];
                                               $namelog = "โครงการ".$namelogpo."ถูกสร้างขึ้น";
                                               $datelog = date("Y-m-d H:i:s");
                                               $idlog = $_POST['ProjectID'];
                                               $assignlog = $userid;
                                               $datapro = [
                                                 'namelog' => $namelog,
                                                 'datelog' => $datelog,
                                                 'idlog' => $idlog,
                                                 'assignlog' => $assignlog
                                             ];
                                             $sqlpro = "INSERT INTO Activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID, AssignTaskPoID) VALUES (:namelog, :datelog, :idlog, :assignlog)";
                                             $stmtpro= $conn->prepare($sqlpro);
                                             $stmtpro->execute($datapro);
                                              //echo '<script>window.location.href="MyProject.php"</script>'; 
                                            ?>    
                                            <script>        
                                             $(document).ready(function(){
                                              // Show the Modal on load
                                              $("#modalcomplete").modal("show");           
                                            });
                                            </script>
                                            <?php                                         
                                              }
                                            ?>
                                            
              </div>   
            <!-- End Panel Floating Labels -->
              </div>
            </div>
            <!-- End Panel Basic -->
        </div>
      </div>
    </div>
    <!-- End Page -->


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
        <script src="global/vendor/select2/select2.full.min.js"></script>
        <script src="global/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script src="global/vendor/chartist/chartist.min.js"></script>
        <script src="global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
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
        <script src="global/vendor/multi-select/jquery.multi-select.js"></script>

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
    <script src="global/js/Plugin/multi-select.js"></script>
        <script src="global/js/Plugin/matchheight.js"></script>
        <script src="global/js/Plugin/peity.js"></script>
        <script src="global/js/Plugin/bootstrap-select.js"></script>  
        <script src="global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="assets/examples/js/uikit/icon.js"></script>
  </body>
</html>
