<?php
  session_start();
  $isset = isset($_SESSION["ProjectIDedit"]);
	if($isset==null){
		 echo '<script>window.location.href="index.php"</script>';
	}
	else{
    $projectid = $_SESSION["ProjectIDedit"];
       include('Connnect.php');
       $userid = $_SESSION["Employee"];
       date_default_timezone_set("Asia/Bangkok");
       $dateActi = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>แก้ไขรายละเอียดโครงการ</title>
    
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
             <link rel="stylesheet" href="global/vendor/select2/select2.css">
             <link rel="stylesheet" href="global/vendor/bootstrap-select/bootstrap-select.css">
             <link rel="stylesheet" href="global/vendor/jquery-strength/jquery-strength.css">
    
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
    <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/examples/css/uikit/progress-bars.css">
    <link rel="stylesheet" href="assets/examples/css/uikit/badges.css">
    <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="assets/examples/css/uikit/icon.css">
    <link rel="stylesheet" href="global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="global/vendor/multi-select/multi-select.css">
    <!-- <link rel="stylesheet" href="assets/examples/css/forms/advanced.css"> -->
    
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/octicons/octicons.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
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
            <h1 class="page-title">แก้ไขรายละเอียดโครงการ</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
              <li class="breadcrumb-item"><a href="MyProject.php">โครงการทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item active">แก้ไขรายละเอียดโครงการ</li>
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
                <h3 class="panel-title">แก้ไขข้อมูลโครงการ</h3>
              </div>
              <div class="panel-body container-fluid">
                <form action=""  method="POST" autocomplete="off">
                    
                            <?php 
                               $stmt = $conn->query("SELECT * FROM projects AS d1 INNER JOIN memberproject AS d2 ON (d1.ProjectID = d2.ProjectID) WHERE d1.ProjectID = '".$projectid."' ");
                               while ($row = $stmt->fetch()) {
										        ?>
											          <input type="hidden"  id="ProjectID" type="text" name='ProjectID'  value="<?php echo $row['ProjectID']; ?>" class="form-control" readonly>							
                                            
                                            <h4 class="example-title">ชื่อโครงการ</h4>
                                            <input type="text" class="form-control " id="inputRounded" name="NameProject" value="<?php echo $row['ProjectName']; ?>" required>
                                            
                                            <h4 class="example-title">รายละเอียดโครงการ</h4>
                                            <textarea class="form-control" id="textareaDefault" name="ProjectDetail" rows="3" ><?php echo $row['ProjectDetail']; ?></textarea>

                                            <h4 class="example-title">ความสำคัญ</h4>
                                            <div class="form-group">
                                                <select name="Piority" class="form-control" required>
                                                <?php
                                                if($row['ProjectPiority'] == 'สูง'){
                                                ?>
                                                <option value="สูง" selected>สูง</option>
                                                <option value="ปานกลาง">ปานกลาง</option>
                                                <option value="ต่ำ">ต่ำ</option>	
                                              <?php } 
                                                 else if($row['ProjectPiority'] == 'ปานกลาง'){
                                              ?>
                                                <option value="สูง">สูง</option>
                                                <option value="ปานกลาง" selected>ปานกลาง</option>
                                                <option value="ต่ำ">ต่ำ</option>	
                                              <?php }
                                                 else if($row['ProjectPiority'] == 'ต่ำ'){
                                              ?>
                                                <option value="สูง">สูง</option>
                                                <option value="ปานกลาง">ปานกลาง</option>
                                                <option value="ต่ำ" selected>ต่ำ</option>	
                                              <?php } ?>
                                                </select>
                                            </div>

                                            <h4 class="example-title">สถานะ</h4>
                                            <div class="form-group">
                                                <select class="form-control" name="Status" required>
                                              <?php
                                                if($row['ProjectStatus'] == 'ยังไม่เริ่มโครงการ'){
                                                ?>
                                                <option value="ยังไม่เริ่มโครงการ" selected>ยังไม่เริ่มโครงการ</option>
                                                <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                                <option value="อยู่ระหว่างพักโครงการ">อยู่ระหว่างพักโครงการ</option>
                                                <option value="ยกเลิกโครงการ">ยกเลิกโครงการ</option>				
                                                <option value="ดำเนินการเสร็จสิ้น">ดำเนินการเสร็จสิ้น</option>	
                                             <?php } 
                                                 else if($row['ProjectStatus'] == 'กำลังดำเนินการ'){
                                              ?>
                                                <option value="ยังไม่เริ่มโครงการ">ยังไม่เริ่มโครงการ</option>
                                                <option value="กำลังดำเนินการ" selected>กำลังดำเนินการ</option>
                                                <option value="อยู่ระหว่างพักโครงการ">อยู่ระหว่างพักโครงการ</option>
                                                <option value="ยกเลิกโครงการ">ยกเลิกโครงการ</option>				
                                                <option value="ดำเนินการเสร็จสิ้น">ดำเนินการเสร็จสิ้น</option>	
                                              <?php }
                                                 else if($row['ProjectStatus'] == 'อยู่ระหว่างพักโครงการ'){
                                              ?>
                                                <option value="ยังไม่เริ่มโครงการ">ยังไม่เริ่มโครงการ</option>
                                                <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                                <option value="อยู่ระหว่างพักโครงการ" selected>อยู่ระหว่างพักโครงการ</option>
                                                <option value="ยกเลิกโครงการ">ยกเลิกโครงการ</option>				
                                                <option value="ดำเนินการเสร็จสิ้น">ดำเนินการเสร็จสิ้น</option>	
                                              <?php }
                                                 else if($row['ProjectStatus'] == 'ยกเลิกโครงการ'){
                                              ?>
                                                <option value="ยังไม่เริ่มโครงการ">ยังไม่เริ่มโครงการ</option>
                                                <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                                <option value="อยู่ระหว่างพักโครงการ">อยู่ระหว่างพักโครงการ</option>
                                                <option value="ยกเลิกโครงการ" selected>ยกเลิกโครงการ</option>				
                                                <option value="ดำเนินการเสร็จสิ้น">ดำเนินการเสร็จสิ้น</option>	
                                              <?php }
                                                 else if($row['ProjectStatus'] == 'ดำเนินการเสร็จสิ้น'){
                                              ?>
                                                <option value="ยังไม่เริ่มโครงการ">ยังไม่เริ่มโครงการ</option>
                                                <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                                <option value="อยู่ระหว่างพักโครงการ">อยู่ระหว่างพักโครงการ</option>
                                                <option value="ยกเลิกโครงการ">ยกเลิกโครงการ</option>				
                                                <option value="ดำเนินการเสร็จสิ้น" selected>ดำเนินการเสร็จสิ้น</option>	
                                                 <?php } ?>
                                                
                                                </select>
                                            </div>

                                            <!-- create date -->	
                                            <input type="hidden"  id="myInput" type="text" name='CreateDate' class="form-control" value="<?php echo $row['ProjectCreateDate']; ?>" >
                                            <!-- End create date -->      

                                            <?php 
                                            $datetran1 = $row['ProjectStartDate'];
                                            $datetran2 = $row['ProjectEndDate'];
                                            $dateshowstart = date("m/d/Y", strtotime($datetran1)); 
                                            $dateshowend = date("m/d/Y", strtotime($datetran2));
                                            ?>

                                            <div class="form-group">        
                                              <h4 class="example-title">วันที่เริ่มโครงการ</h4>
                                              <div class="example">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="icon md-calendar" aria-hidden="true"></i>
                                                    </span>
                                                  </div>
                                                  <input type="text" name="datestart" class="form-control" value="<?php echo $dateshowstart; ?>" data-plugin="datepicker" required>
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
                                                  <input type="text" name="dateend" class="form-control" value="<?php echo $dateshowend; ?>" data-plugin="datepicker" required>
                                                </div>
                                              </div>
                                          </div>
                                  <?php
                                    $stjemid = $conn->query("SELECT * FROM projects AS d1 INNER JOIN memberproject AS d2 ON (d1.ProjectID = d2.ProjectID) WHERE d1.ProjectID = '".$projectid."' AND MemberProjectPosition='Project-Manager' ");
                                     while ($rowjemid = $stjemid->fetch()) {
                                  ?>
                                    <!-- ProjectManager_ID -->
                                    <input type="hidden"  id="projectmanagerid" type="text" name='projectmanagerid'  value="<?php echo $rowjemid['MemberProjectID']; ?>" class="form-control" readonly>
                                  
                                  <h4 class="example-title">หัวหน้าโครงการ</h4>
                                    <div class="form-group">
                                      <select class="form-control" name="SelectPM" >
                                      <!-- <option value="" selected></option> -->
                                        <?php 
                                          $stselec = $conn->query("SELECT * FROM projects AS d1 INNER JOIN memberproject AS d2 ON (d1.ProjectID = d2.ProjectID) WHERE d1.ProjectID = '".$projectid."' AND MemberProjectPosition='Project-Manager' ");
                                          while ($rowselec= $stselec->fetch()) {
                                            $stemselec = $conn->query("SELECT * FROM employee WHERE EmployeeID = '".$rowselec['EmployeeID']."' ");
                                              while ($rowemselec = $stemselec->fetch()) {
                                        ?>
                                      <option value="<?php echo $rowemselec['EmployeeID']; ?>" selected><?php echo $rowemselec['EmployeeFullName']; ?></option>
                                          <?php } } ?>
                                        <?php 
                                            // $stjem = $conn->query("SELECT DISTINCT d2.EmployeeID,d1.EmployeeFullName FROM employee AS d1 INNER JOIN memberproject AS d2 on (d1.EmployeeID = d2.EmployeeID) WHERE d1.EmployeeID != '".$rowjemid['EmployeeID']."' ORDER BY EmployeeID ASC ");
                                            // while ($rowjem = $stjem->fetch()) {

                                            $stem = $conn->query("SELECT * FROM employee WHERE EmployeeID != '".$rowjemid['EmployeeID']."' ");
                                          while ($rowem = $stem->fetch()) {
                                        ?>
														            <option value="<?php echo $rowem['EmployeeID']; ?>"><?php echo $rowem['EmployeeFullName']; ?></option>
                                        <?php            
                                        } } //} ?>
                                      </select>
                                    </div>
                                  <?php
                                    $stjemid = $conn->query("SELECT * FROM projects AS d1 INNER JOIN memberproject AS d2 ON (d1.ProjectID = d2.ProjectID) WHERE d1.ProjectID = '".$projectid."' AND MemberProjectPosition='Project-Member' ");
                                     while ($rowjemid = $stjemid->fetch()) {
                                  ?>
                                    <!-- ProjectMember_ID -->
                                    <input type="hidden"  id="projectmemberid" type="text" name='projectmemberid[]' value="<?php echo $rowjemid['MemberProjectID']; ?>" class="form-control" readonly>
                                  <?php } ?>
											
                                  <h4 class="example-title">สมาชิกโครงการ</h4>
                                    <div class="form-group">
                                      <select name="SelectMember[]" multiple data-plugin="selectpicker">
                                        <optgroup data-max-options="30" label="รายชื่อพนักงาน">
                                          <?php 
                                            $stmt = $conn->query("SELECT * FROM employee ");
                                            while ($rowemm = $stmt->fetch()) {
                                          ?>
                                          <option value="<?php echo $rowemm['EmployeeID']; ?>"><?php echo $rowemm['EmployeeFullName']; ?></option>								
														              <?php } ?>
                                        </optgroup>
                                      </select>
                                     <p>
                                     <?php 
                                          $sqlpm = "SELECT d1.ProjectID,d3.EmployeeID,d3.EmployeeFullName,d3.EmployeePic,d2.ProjectID,d2.EmployeeID,d2.MemberProjectID,d2.MemberProjectPosition FROM projects AS d1 
                                          INNER JOIN memberproject AS d2 ON (d1.ProjectID = d2.ProjectID) 
                                          INNER JOIN  employee AS d3 ON (d2.EmployeeID=d3.EmployeeID)
                                          WHERE d1.ProjectID = '".$projectid."' AND MemberProjectPosition='Project-Member'";

                                            $stmtpm = $conn->prepare($sqlpm);
                                            $stmtpm->execute();
                                            while ($rowpm = $stmtpm->fetch()) {
                                          ?>
                                          <div class="vertical-align-middle panal-member">
                                          <a class="avatar avatar-md float-left mr-20">
                                            <img src="assets/employee/<?php echo $rowpm['EmployeePic']; ?>" alt="">
                                          </a>
                                          <div class="float-left" style="margin-right: 20px;">
                                          <div class="font-size-12"><?php echo $rowpm['EmployeeFullName']; ?></div>
                                            <p class="mb-20 text-nowrap">
                                              <span class="text-break font-size-12"><?php echo $rowpm['MemberProjectPosition']; ?></span>
                                            </p>
                                          </div>
                                          <button id="deletePM" name="<?php echo $rowpm['ProjectID']; ?>" data="<?php echo $rowpm['EmployeeFullName']; ?>"  idname="<?php echo $rowpm['EmployeeID'];?>" value="<?php echo $rowpm['MemberProjectID']; ?>" type="button" class="btn btn-sm btn-icon btn-pure btn-default waves-effect waves-classic" data-toggle="tooltip" data-original-title="ลบสมาชิก">
                                            <i class="icon md-close delete-member" aria-hidden="true"></i>
                                          </button>
                                          </div>
                                          <?php } ?>
                                     </p>
                                    </div>
                                    
                                   <div class="form-group">
                                    <center>
                                    <a href="main.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-warning" >ยกเลิก</button></a>
                                    <button type="submit" name="submit" class="mb-xs mt-xs mr-xs btn btn-success" value="ยืนยัน">ยืนยัน</button>
                                    </center>    
                                   </div>
                </div>
            </div>
                            <?php } ?>
        </form>

                                           <!--Modal check delete TM-->
                   <div class="modal fade  modal-danger" id="changTM" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
                           <form action="" method="post">
                           <div class="modal-dialog  modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                                </div>
                                <div class="modal-body"  style="margin-top: 20px;">
                                  <h4 class="text-center"> คุณแน่ใจที่จะลบพนักงาน :  <b id="mmdelete"></b> ออกจากโครงการนี้<br> </h4>
                                      <div id="datasubtask"></div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                  <button type="submit" class="btn btn-success" name="submitdeletempj">ยืนยัน</button>
                                </div>
                              </div>
                            </div>
                           </form>
                          </div>

              <!--end Modal check delete TM-->
                            <!--Modal check delete MM-->
                 <div class="modal fade example-modal-sm show modal-danger" id="changMM" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                        <h4 class="text-center"  style="margin-top: 20px;"> คุณแน่ใจที่จะลบพนักงาน :<br> <b id="mmdeletee">  </b> </h4>
                        <div id="checkpoid"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn btn-success btn-sm deletemm">ยืนยัน</button>
                           </div>
                    </div>
                    </div>
                </div>
              <!--end Modal check delete MM-->
                     <!-- Modaldelete ok -->
                     <div class="modal fade example-modal-sm show modal-success" id="madaldeleteok" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>ลบข้อมูลสมาชิกสำเร็จ</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-success btn-floating btn-lg hideok" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
              <!-- End Modaldelete pk-->
                <!-- Modaldelete ok -->
                <div class="modal fade example-modal-sm show modal-success" id="madaldeleteokd" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>ลบข้อมูลสมาชิกไม่สำเร็จ</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-success btn-floating btn-lg hideok" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
              <!-- End Modaldelete pk-->
                                    <!-- Modal complete-->
                                    <div class="modal fade modal-success" id="modalcomplete" aria-hidden="true"
                                        aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="MyProject.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h2 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h2>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-check" aria-hidden="true" style="font-size:64px;"></i>
                                              <p><h3>แก้ไขโครงการของคุณเรียบร้อย!<h3></p>
                                              </center>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="MyProject.php"><button type="button" class="btn btn-default btn-pure">ตกลง</button></a>      
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal complete-->
                                      <!-- Modal Error-->
                                      <div class="modal fade modal-danger" id="modalerror" aria-hidden="true"
                                        aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="editeProject.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h4 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h4>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-x" aria-hidden="true" style="font-size:64px;"></i>
                                              <p><h3>หัวหน้าโครงการซ้ำกับสมาชิกที่คุณเลือก กรุณาเลือกใหม่!<h3></p>
                                              </center>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="editeProject.php"><button type="button" class="btn btn-default btn-pure">ตกลง</button></a>       
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal Error-->
                                      <!-- Modal Errorpmmember-->
                                      <div class="modal fade modal-danger" id="modalerrorpmmember" aria-hidden="true"
                                        aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="editeProject.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h4 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h4>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-x" aria-hidden="true" style="font-size:64px;"></i>
                                              <p><h4>หัวหน้าโครงการซ้ำกับสมาชิกที่อยู่ในโครงการ กรุณาเลือกใหม่!<h4></p>
                                              <p><h5>**กรุณาลบสมาชิกคนที่ต้องการเพิ่มเป็นหัวหน้าออกจากสมาชิกโครงการก่อน**<h5></p>
                                              </center>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="editeProject.php"><button type="button" class="btn btn-default btn-pure">ตกลง</button></a>       
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal Errorpmmember-->
                                      <!-- Modal Erroredit-->
                                      <div class="modal fade modal-danger" id="modalerroredit" aria-hidden="true"
                                        aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="editeProject.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h2 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h2>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-x" aria-hidden="true" style="font-size:64px;"></i>
                                              <p><h3>คุณเลือกสมาชิกซ้ำ กรุณาเลือกสมาชิกใหม่!<h3></p>
                                              <p><h4>หรือกรุณาลบสมาชิกคนเก่าก่อนทำการเพิ่มสมาชิก<h4></p>
                                              </center>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="editeProject.php"><button type="button" class="btn btn-default btn-pure">ตกลง</button></a>       
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal Error-->
                                      <!-- Modal complete member-->
                                    <div class="modal fade modal-success" id="modalcompletemember" aria-hidden="true"
                                        aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="editeProject.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h2 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h2>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-check" aria-hidden="true" style="font-size:64px;"></i>
                                              <p><h3>เพิ่มสมาชิกโครงการของคุณเรียบร้อย!<h3></p>
                                              </center>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="editeProject.php"><button type="button" class="btn btn-default btn-pure">ตกลง</button></a>      
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal complete member-->
                                      <!-- Modal complete manager-->
                                    <div class="modal fade modal-success" id="modalcompletemanager" aria-hidden="true"
                                        aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-simple modal-center">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" aria-label="Close">
                                              <a href="editeProject.php"><span aria-hidden="true">×</span></a>
                                              </button>
                                              <h2 class="modal-title">แจ้งเตือน&nbsp;<i class="icon oi-alert" aria-hidden="true" style="font-size:24px;"></i></h2>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <br>
                                              <center>
                                              <i class="icon oi-check" aria-hidden="true" style="font-size:64px;"></i>
                                              <p><h3>แก้ไขหัวหน้าโครงการของคุณเรียบร้อย!<h3></p>
                                              </center>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="editeProject.php"><button type="button" class="btn btn-default btn-pure">ตกลง</button></a>      
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Modal complete manager-->

                                <?php
                                //เช็คหัวหน้ากับสมาชิกซ้ำ
                                $poidcheck = "";
                                if(isset($_POST['submit'])){
                                $poidcheck = $_POST['ProjectID'];
                                $check ="";
                                $arraymember = $_POST['SelectMember'];
                                $countarraycheck = count($arraymember);
                                $checkpm = $_POST['SelectPM'];
                                  for($che=0; $che<$countarraycheck; $che++){
                                    if($checkpm == $arraymember[$che]){
                                        $check = "false";
                                    }
                                  }
                                    if($check == "false" && $checkpmmember != "false"){
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

                                //เช็คเปลี่ยนหัวหน้าซ้ำกับสมาชิกที่มีอยู่แล้ว
                                if(isset($_POST['submit'])){
                                  $pmid = array();
                                  $sqlcheckpm = "SELECT * FROM `memberproject` WHERE `ProjectID` = '$projectid' AND MemberProjectPosition = 'Project-Member' ";
                                  $stmtcheckpm = $conn->prepare($sqlcheckpm);
                                  $stmtcheckpm->execute();
                                  while ($rowpmcheck = $stmtcheckpm->fetch()) {
                                    array_push($pmid,$rowpmcheck['EmployeeID']);  
                                  }
                                  $countpmid = count($pmid);
                                  $checkpmmember = "";
                                  $checkpm = $_POST['SelectPM'];
                                  for($x=0; $x<$countpmid; $x++){
                                      if($checkpm == $pmid[$x]){
                                          $checkpmmember = "false";
                                       }
                                  }
                                  if($checkpmmember == "false" && $check != "false"){
                                  ?>
                                   <script>        
                                      $(document).ready(function(){
                                      // Show the Modal on load
                                      $("#modalerrorpmmember").modal("show");           
                                      });
                                   </script>
                                  <?php
                                  }
                                }

                                //check สมาชิกซ้ำ
                                if(isset($_POST['submit']) && $_POST['SelectMember'] != "" && $check != "false"){
                                  $empid = array();
                                  $sqlcheck = "SELECT * FROM memberproject WHERE ProjectID = '".$poidcheck."' AND MemberProjectPosition = 'Project-Member' ";
                                  $stmtcheck = $conn->prepare($sqlcheck);
                                  $stmtcheck->execute();
                                  while ($rowcheck = $stmtcheck->fetch()) {
                                    array_push($empid,$rowcheck['EmployeeID']);  
                                  }
                                  $countempid = count($empid);

                                  $checkmember ="";
                                  $arrayinmember =  $_POST['SelectMember'];
                                  $countarrayin = count($arrayinmember);
                                  for($x=0; $x<$countempid; $x++){
                                    for($k=0; $k<$countarrayin; $k++){  
                                      if($empid[$x] == $arrayinmember[$k]){
                                          $checkmember = "false";
                                       }
                                    }
                                  }
                                if($checkmember == "false"){
                                ?>
                                  <script>        
                                    $(document).ready(function(){
                                    // Show the Modal on load
                                    $("#modalerroredit").modal("show");           
                                    });
                                  </script>
                                <?php
                                  }
                                }
                                //edit รายละเอียดโครงการ
                                if(isset($_POST['submit']) && $check != "false" && $checkmember != "false" && $checkpmmember != "false"){
                                  //เช็คว่ามีการแก้ไขลายละเอียดโครงการหรือไม่
                                  $sqlcheckproject = $conn->query("SELECT * FROM projects WHERE ProjectID = '".$projectid."' ");
                                    while ($rowcheckproject = $sqlcheckproject->fetch()) {
                                      $poname = $rowcheckproject['ProjectName'];
                                      $podetail = $rowcheckproject['ProjectDetail'];
                                      $popiority = $rowcheckproject['ProjectPiority'];
                                      $postatus = $rowcheckproject['ProjectStatus'];
                                      $postartdate = $rowcheckproject['ProjectStartDate'];
                                      $poenddate = $rowcheckproject['ProjectEndDate'];
                                      $potranStartDate = date("m/d/Y", strtotime($postartdate));
                                      $potranEndDate = date("m/d/Y", strtotime($poenddate));		
                                    }
                                    if($_POST['NameProject'] != $poname || $_POST['ProjectDetail'] != $podetail || $_POST['Piority'] != $popiority || $_POST['Status'] != $postatus || $_POST['datestart'] != $potranStartDate || $_POST['dateend'] != $potranEndDate ){
                                  
                                    include('Connnect.php');
                                    $datestart = $_POST['datestart'];
                                    $newStartDate = date("Y-m-d", strtotime($datestart));
                                    $dateend = $_POST['dateend'];
                                    $newEndDate = date("Y-m-d", strtotime($dateend));									
                                    // $Progress = 0;
                                    $projectsituation = "proceed";
                                   
                                    $datapro = [
                                        'NameProject' => $_POST['NameProject'],
                                        'datestart' => $newStartDate,
                                        'dateend' => $newEndDate,
                                        'Statusss' => $_POST['Status'],
                                        'Piority' => $_POST['Piority'],
                                        // 'Progress' => $Progress,
                                        'createdate' => $_POST['CreateDate'],
                                        'projectsituation' => $projectsituation,
                                        'ProjectDetail' => $_POST['ProjectDetail'],

                                        'ID' => $_POST['ProjectID']
                                    ];
                                    $sqlpro = " UPDATE projects SET ProjectName=:NameProject,
                                     ProjectStartDate=:datestart, 
                                     ProjectEndDate=:dateend,
                                      ProjectStatus=:Statusss,
                                       ProjectPiority=:Piority, 
                                      
                                        ProjectCreateDate=:createdate,
                                        ProjectSituation=:projectsituation,
                                         ProjectDetail=:ProjectDetail WHERE ProjectID=:ID ";
                                    $stmtpro= $conn->prepare($sqlpro);
                                    $stmtpro->execute($datapro);

                                    //Log แก้ไขรายละเอียด
                                      $namelogpo = $_POST['NameProject'];
                                      $namelog = "แก้ไขข้อมูลของโครงการ".':'.$namelogpo;
                                      $datelog = date("Y-m-d H:i:s");
                                      $idlog = $projectid;
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
                                    ?>
                                    <script>        
                                       $(document).ready(function(){
                                        $("#modalcomplete").modal("show");           
                                      });
                                      </script>
                                    <?php
                                      }
                                    }
                                    //edit หัวหน้าโครงการ
                                    $stcheckpm = $conn->query("SELECT * FROM projects AS a1 INNER JOIN memberproject AS b1 ON (a1.ProjectID = b1.ProjectID) 
                                    WHERE b1.ProjectID = '".$projectid."' AND b1.MemberProjectPosition = 'Project-Manager'");
                                    while ($rowcheckpm = $stcheckpm->fetch()) {
                                      $checkhead = $rowcheckpm['EmployeeID'];
                                      // echo $checkhead;
                                    }
                                    if(isset($_POST['submit']) && $_POST['SelectPM'] != $checkhead && $check != "false" && $checkmember != "false" && $checkpmmember != "false"){
                                        $PositionPM = "Project-Manager";
                                        $datapm = [
                                            'memberprojectid' => $_POST['projectmanagerid'],
                                            'SelectPM' => $_POST['SelectPM'],
                                            'PositionPM' => $PositionPM,
                                            'poid' => $_POST['ProjectID']
                                        ];
                                        $sqlpm = "UPDATE memberproject SET MemberProjectPosition=:PositionPM, ProjectID=:poid, EmployeeID=:SelectPM WHERE  MemberProjectID=:memberprojectid ";
                                        $stmtpm= $conn->prepare($sqlpm);
                                        $stmtpm->execute($datapm);
                                        //log แก้ไขหัวหน้า
                                        $namelogpo = $_POST['NameProject'];
                                        $namelog = "เปลี่ยนแปลงหัวหน้าของโครงการ".':'.$namelogpo;
                                        $datelog = date("Y-m-d H:i:s");
                                        $idlog = $projectid;
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
                                      ?>
                                      <script>        
                                         $(document).ready(function(){
                                          $("#modalcompletemanager").modal("show");           
                                        });
                                        </script>
                                      <?php
                                      }
                                        
                                        //edit สมาชิกโครงการ
                                        if(isset($_POST['submit']) && $_POST['SelectMember'] != "" && $check != "false" && $checkmember != "false" && $checkpmmember != "false"){
                                          $Position = "Project-Member";
                                          $arrayinmember =  $_POST['SelectMember'];
                                          $countarrayin = count($arrayinmember);
                                          for($k=0; $k<$countarrayin; $k++){  
                                            $datamb = [
                                                  'SelectMemberin' => $arrayinmember[$k],
                                                  'Positionin' => $Position,
                                                  'poidin' => $_POST['ProjectID']
                                              ];
                                              $sqlmb = "INSERT INTO memberproject (MemberProjectPosition, ProjectID, EmployeeID) VALUES (:Positionin, :poidin, :SelectMemberin)";
                                              $stmtmb= $conn->prepare($sqlmb);
                                              $stmtmb->execute($datamb);
                                          }
                                          //log แก้ไขสมาชิก
                                          $namelogpo = $_POST['NameProject'];
                                          $namelog = "เพิ่มสมาชิกของโครงการ".':'.$namelogpo;
                                          $datelog = date("Y-m-d H:i:s");
                                          $idlog = $projectid;
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
                                        ?>
                                        <script>        
                                           $(document).ready(function(){
                                            $("#modalcompletemember").modal("show");           
                                          });
                                          </script>
                                        <?php
                                        }
                                          
                                          if(isset($_POST['submitdeletempj'])){
                                            //อัพเดตหัวหน้างาน
                                            $changmember=$_POST['changmember'];
                                            $AssignTaskPoID=$_POST['AssignTaskPoID'];
                                            $Taskpoid=$_POST['Taskpoid'];
                                            $changmemberaa = count($changmember);
                                            for($i=0; $i<$changmemberaa; $i++)
                                            {
                                                      $datapm = [
                                                        'MemberProjectID' => $changmember[$i],
                                                        'AssignTaskPoID' => $AssignTaskPoID[$i]
                                                    ];
                                                    $sqlpm = "UPDATE assigntaskproject SET 
                                                    MemberProjectID=:MemberProjectID
                                                    WHERE AssignTaskPoID=:AssignTaskPoID";
                                                    $stmtpm= $conn->prepare($sqlpm);
                                                    $stmtpm->execute($datapm);
                          
                                                    $dataActi = [
                                                      'ActivitiesName' =>"เปลี่ยนหัวหน้างาน",
                                                      'ActivitiesDate' =>  $dateActi,
                                                      'ActivitiesTaskPoID' =>$Taskpoid[$i],
                                                      'AssignTaskPoID' => $_SESSION["Employee"]
                                                  ];
                                                  $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                                                  VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                                                  $stmtpm= $conn->prepare($sqlActi);
                                                  $stmtpm->execute($dataActi);
                                            }
                                              //ลบพนักงานในงาน
                                                if ($stmtpm->execute($dataActi)) {
                                                  
                                                  if(isset($_POST["AssignTaskPoIDmm"]))
                                                  {
                                                        $AssignTaskPoIDmm= $_POST['AssignTaskPoIDmm'];
                                                        $TaskPoIDmm= $_POST['TaskPoIDmm'];
                                                        $countAssignTaskIDmm = count($AssignTaskPoIDmm);
                                                      for($i=0; $i<$countAssignTaskIDmm; $i++)
                                                      {
                                  
                                                            $datadelmm = [
                                                              'id' => $AssignTaskPoIDmm[$i]
                                                          ];
                                                          $sqldelmm = "DELETE FROM assigntaskproject WHERE AssignTaskPoID=:id ";
                                                          $stmtdelmm = $conn->prepare($sqldelmm);
                                                          if ($stmtdelmm->execute($datadelmm)){
                                  
                                                                $dataActimm = [
                                                                  'ActivitiesName' =>"ลบสมาชิกงานออกจากทีม",
                                                                  'ActivitiesDate' =>  $dateActi,
                                                                  'ActivitiesTaskPoID' =>$TaskPoIDmm[$i],
                                                                  'AssignTaskPoID' => $_SESSION["Employee"]
                                                              ];
                                                              $sqlActimm = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                                                              VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                                                              $stmtpmm= $conn->prepare($sqlActimm);
                                                              $stmtpmm->execute($dataActimm);
                                                          } 
                                                          
                                                      }
                                                  }
                                                 //อัพเดตหัวหน้างานย่อย
                                                 if(isset($_POST["changmembertsm"])){
                                                  $changmembertsm = $_POST['changmembertsm'];
                                                  $AssignTaskID=$_POST['AssignTaskID'];
                                                  $changmemberaa = count($changmembertsm);
                                                  $TaskID= $_POST['TaskID'];
                                                  for($i=0; $i<$changmemberaa; $i++)
                                                  {
                                                            $datapm = [
                                                              'AssignTaskPoID' => $changmembertsm[$i],
                                                              'AssignTaskID' => $AssignTaskID[$i]
                                                          ];
                                                          $sqlpm = "UPDATE assigntask SET 
                                                          AssignTaskPoID=:AssignTaskPoID
                                                          WHERE AssignTaskID=:AssignTaskID";
                                                          $stmtpm= $conn->prepare($sqlpm);
                                                          $stmtpm->execute($datapm);

                                                          $dataActi = [
                                                            'ActivitiesName' =>"เปลี่ยนหัวหน้างานย่อย",
                                                            'ActivitiesDate' =>  $dateActi,
                                                            'ActivitiesTaskPoID' =>$TaskID[$i],
                                                            'AssignTaskPoID' => $_SESSION["Employee"]
                                                        ];
                                                        $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                                                        VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                                                        $stmtpm= $conn->prepare($sqlActi);
                                                        $stmtpm->execute($dataActi);
                                                  }
                                                }
                                                //ลบพนักงานในงานย่อย
                                                  if(isset($_POST["AssignTaskIDmm"]))
                                                  {
                                                        $AssignTaskIDmm= $_POST['AssignTaskIDmm'];
                                                        $TaskIDmm= $_POST['TaskIDmm'];
                                                        $countAssignTaskIDmm = count($AssignTaskIDmm);
                                                      for($i=0; $i<$countAssignTaskIDmm; $i++)
                                                      {
                                  
                                                            $datadelmm = [
                                                              'id' => $AssignTaskIDmm[$i]
                                                          ];
                                                          $sqldelmm = "DELETE FROM assigntask WHERE AssignTaskID=:id ";
                                                          $stmtdelmm = $conn->prepare($sqldelmm);
                                                          if ($stmtdelmm->execute($datadelmm)){
                                  
                                                                $dataActimm = [
                                                                  'ActivitiesName' =>"ลบสมาชิกงานออกจากทีม",
                                                                  'ActivitiesDate' =>  $dateActi,
                                                                  'ActivitiesTaskPoID' =>$TaskIDmm[$i],
                                                                  'AssignTaskPoID' => $_SESSION["Employee"]
                                                              ];
                                                              $sqlActimm = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                                                              VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                                                              $stmtpmm= $conn->prepare($sqlActimm);
                                                              $stmtpmm->execute($dataActimm);
                                                          } 
                                                          
                                                      }
                                                  }
                                                   // ลบพนักงานในงาน
                                                        $deletetmid = $_POST['deletetmid'];
                                                        $ProjectID =  $_POST['ProjectID'];
                                                        $datadel = [
                                                          'id' => $deletetmid[0]
                                                      ];
                                                      $sqldel = "DELETE FROM memberproject WHERE MemberProjectID=:id ";
                                                      $stmtdel = $conn->prepare($sqldel);
                                                      $stmtdel->execute($datadel);
                                                      
                                                      $dataActis = [
                                                        'ActivitiesName' =>"ลบสมาชิกงานออกจากโครงการ",
                                                        'ActivitiesDate' =>  $dateActi,
                                                        'ActivitiesTaskPoID' =>  $ProjectID[0],
                                                        'AssignTaskPoID' => $_SESSION["Employee"]
                                                    ];

                                                    $sqlActis = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                                                    VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                                                    $stmtpm= $conn->prepare($sqlActis);
                                                    $stmtpm->execute($dataActis);

                                                      ?>
                                                      <script>
                                                    $(document).ready(function(){
                                                        $('#madaldeleteok').modal('show');  
                                                         
                                                          });
                                                      </script>
                                                      <?php
                                              } 
                                              else{
                                                ?>
                                                <script>
                                              $(document).ready(function(){
                                                    $('#madaldeleteokd').modal('show');  
                                                    });
                                                </script>
                                                <?php
                                              }

                                          }

                                            //session_destroy();
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
    <script>
        $(document).on('click', '.hideok', function(){  
                  window.location.href="editeProject.php" 
                });
    </script>
    <script>
            var Taskpoid='';
            var AssignTaskPoID='';
            var employeeID='';
            var AssignTaskPoName='';
            $(document).on('click', '#deletePM', function(){  
                    Taskpoid = $(this).attr("name"); 
                    AssignTaskPoID = $(this).attr("value"); 
                    AssignTaskPoName = $(this).attr("data"); 
                    employeeID = $(this).attr("idname"); 
                    $.ajax({
										url: "View_task.php",
                    method:"POST", 
										data:({taskid: Taskpoid,taskaction: 'checkpj',employeeID: AssignTaskPoID, AssignTaskPoName:AssignTaskPoName}),
										dataType: "json",
                    beforeSend: function() {
                                    $("#datasubtask").html("");
                                    $("#datasubtaskmm").html("");
                                  },
										success: function(json){
                      if(json!="0"){ 
                        document.getElementById("mmdelete").innerHTML = AssignTaskPoName;
                         $.each(json, function(index, value)
                          {
                             if(value.AssignTaskPoPosition=="Task-Manager"){
                              $("#datasubtask").append('<div class="card border  border-primary">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">งานชื่อ : '+value.TaskPoName+'</h4>'+
                                          '<p class="card-text">'+
                                          'จำเป็นต้องเลือกผู้รับผิดชอบงานแทนก่อน!!!'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.MemberProjectID+'">'+
                                          '<input type="hidden" name="Taskpoid[]" value="'+value.TaskPoID+'">'+
                                          '<input type="hidden" name="ProjectID[]" value="'+value.ProjectID+'">'+
                                          '<input type="hidden" name="AssignTaskPoID[]" value="'+value.AssignTaskPoID+'">'+
                                          '<select class="form-control"  id="changmember'+index+'" name="changmember[]"> </select>'+
                                          '</p>'+
                                        '</div>'+
                                      '</div>');
                             $('#changmember'+index+'').ready(function() {
                                  $.ajax({
                                  url: "view_member.php",
                                  data: ({ProjectID:Taskpoid,pj:employeeID,checkmm:"Checkmmpj"}),
                                  dataType: "json",
                                  beforeSend: function() {
                                    $('#changmember'+index+'').html("");
                                  },
                                  success: function(json1){
                                    $.each(json1, function(indexs, valuee) {
                                    $('#changmember'+index+'').append('<option value="'+valuee.MemberProjectID +'">'+valuee.EmployeeFullName+'</option>');
                                        });
                                      }
                                    });
                            });
                             }

                          });
                          $.each(json, function(index, value)
                          {
                             if(value.AssignTaskPoPosition=="Task-Member"){
                              $("#datasubtask").append('<div class="card border  border-primary">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">มีหน้าที่รับผิดชอบงานชื่อ : '+value.TaskPoName+'</h4>'+
                                          '<p class="card-text">'+
                                          'ชื่อพนักงาน : <b> '  +value.EmployeeFullName+ '</b><br>  ตำแหน่งงาน :  สมาชิกงาน'+
                                          '<input type="hidden" name="AssignTaskPoIDmm[]" value="'+value.AssignTaskPoID+'">'+
                                          '<input type="hidden" name="TaskPoIDmm[]" value="'+value.TaskPoID+'">'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.MemberProjectID+'">'+
                                           '<input type="hidden" name="ProjectID[]" value="'+value.ProjectID+'">'+
                                          '</p>'+
                                        '</div>'+
                                      '</div>');
                             }

                          });
                          $.each(json, function(index, value)
                          {
                             if(value.AssignTaskPosition=="Task-SubManager"){
                              $("#datasubtask").append('<div class="card border  border-primary" style="width: 90%;right: -10%;">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">งานย่อยชื่อ : '+value.TaskName+'</h4>'+
                                          '<p class="card-text">'+
                                          'จำเป็นต้องเลือกผู้รับผิดชอบงานแทนก่อน!!!'+
                                          '<input type="hidden" name="AssignTaskID[]" value="'+value.AssignTaskID+'">'+
                                          '<input type="hidden" name="TaskID[]" value="'+value.TaskID+'">'+
                                          '<select class="form-control"  id="changmember'+index+'" name="changmembertsm[]"> </select>'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.MemberProjectID+'">'+
                                           '<input type="hidden" name="ProjectID[]" value="'+Taskpoid+'">'+
                                          '</p>'+
                                        '</div>'+
                                      '</div>');
                             $('#changmember'+index+'').ready(function() {
                                  $.ajax({
                                  url: "view_member.php",
                                  data: ({subject_id:value.TaskPoID,pj:value.AssignTaskPoID,checkmm:"Check"}),
                                  dataType: "json",
                                  beforeSend: function() {
                                    $('#changmember'+index+'').html("");
                                  },
                                  success: function(json1){
                                    $.each(json1, function(indexs, valuee) {
                                    $('#changmember'+index+'').append('<option value="'+valuee.AssignTaskPoID +'">'+valuee.EmployeeFullName+'</option>');
                                        });
                                      }
                                    });
                            });
                             }

                          });
                          $.each(json, function(index, value)
                          {
                             if(value.AssignTaskPosition=="Task-SubMember"){
                              $("#datasubtask").append('<div class="card border  border-primary"  style="width: 90%;right: -10%;">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">มีหน้าที่รับผิดชอบงานย่อยชื่อ : '+value.TaskName+'</h4>'+
                                          '<p class="card-text">'+
                                          'ชื่อพนักงาน : <b> '  +value.EmployeeFullName+ '</b><br>  ตำแหน่งงาน :  สมาชิกงานย่อย'+
                                          '<input type="hidden" name="AssignTaskIDmm[]" value="'+value.AssignTaskID+'">'+
                                          '<input type="hidden" name="TaskIDmm[]" value="'+value.TaskID+'">'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.MemberProjectID+'">'+
                                           '<input type="hidden" name="ProjectID[]" value="'+Taskpoid+'">'+
                                          '</p>'+
                                        '</div>'+
                                      '</div>');
                             }

                          });
                            $('#changTM').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
                       }
                      else{
                        document.getElementById("mmdeletee").innerHTML = AssignTaskPoName;
                        $("#checkpoid").append('<div id="deletetmm" name="'+Taskpoid+'" value="'+AssignTaskPoID+'"></div>');
                        $('#changMM').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
                      }             
										}
									});
								});
    </script>
    <script>
              $(document).on('click', '.deletemm', function(){ 
                        var TaskPoID = $('#deletetmm').attr("name"); 
                        var AssignTaskPoID = $('#deletetmm').attr("value"); 
                    $.ajax({
                    url: "View_task.php",
                    method:"POST", 
                    data: ({taskid: TaskPoID,taskaction: 'deletetmmpj', AssignTaskPoID:AssignTaskPoID}),
                    dataType: "json",
                    success: function(json){
                      $('#changMM').modal('hide');  
                      $('#madaldeleteok').modal('show');  
                      $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
                        }
                      });
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
        <script src="global/vendor/select2/select2.full.min.js"></script>
        <script src="global/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
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
        <script src="global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
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
        <script src="global/js/Plugin/jquery-placeholder.js"></script>
        <script src="global/js/Plugin/material.js"></script>
        <script src="assets/examples/js/uikit/icon.js"></script>
        <script src="global/js/Plugin/bootstrap-datepicker.js"></script>
  </body>
</html>
<?php } ?>