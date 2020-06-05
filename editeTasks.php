<?php 
  session_start();
$isTouch = isset( $_SESSION["editetasks"] );
	if($isTouch==null){
		 echo '<script>window.location.href="index.php"</script>';
	}
	else{
       $idtasks= $_SESSION["editetasks"];
       include('Connnect.php');
       date_default_timezone_set("Asia/Bangkok");
       $dateActi = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="th">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>แก้ไขรายละเอียดงาน | PROJECT MANAGEMENT</title>
    
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
    <link rel="stylesheet" href="global/vendor/select2/select2.css">
    <link rel="stylesheet" href="global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
    <link rel="stylesheet" href="global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="global/vendor/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="global/vendor/icheck/icheck.css">
    <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="global/vendor/asrange/asRange.css">
    <link rel="stylesheet" href="global/vendor/ionrangeslider/ionrangeslider.min.css">
    <link rel="stylesheet" href="global/vendor/asspinner/asSpinner.css">
    <link rel="stylesheet" href="global/vendor/clockpicker/clockpicker.css">
    <link rel="stylesheet" href="global/vendor/ascolorpicker/asColorPicker.css">
    <link rel="stylesheet" href="global/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
    <link rel="stylesheet" href="global/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="global/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
    <link rel="stylesheet" href="global/vendor/timepicker/jquery-timepicker.css">
    <link rel="stylesheet" href="global/vendor/jquery-strength/jquery-strength.css">
    <link rel="stylesheet" href="global/vendor/multi-select/multi-select.css">
    <link rel="stylesheet" href="global/vendor/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="assets/examples/css/forms/advanced.css">
    <link rel="stylesheet" href="global/vendor/webui-popover/webui-popover.css">
    <link rel="stylesheet" href="global/vendor/toolbar/toolbar.css">
    <link rel="stylesheet" href="assets/examples/css/uikit/modals.css">
    

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
        <?php 
          include('Connnect.php');
          $sql = " SELECT * FROM taskprojects AS t1
          INNER JOIN  projects AS  t2 ON (t1.ProjectID = t2.ProjectID) where t1.TaskPoID = '".$idtasks."'";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          while ($row = $stmt->fetch()) { 
              $startdate=$row['ProjectStartDate'];
              $formatestart = date('d/m/Y', strtotime($startdate));
              $startdate= $formatestart;
              $enddate=$row['ProjectEndDate'];
              $formateend = date('d/m/Y', strtotime($enddate));
              $enddate= $formateend;
        ?>
            <h1 class="page-title">แก้ไขรายละเอียดงาน : <?php echo $row['TaskPoName']?></h1>
         <?php }?>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="MyProject.php">โครงการทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item"><a href="MyTasks.php">งานทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item active">แก้ไขรายละเอียดงาน</li>
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
                <form action="" method="POST">
                <?php 
                                include('Connnect.php');
                                $date= Date("d-m-Y");
                                $sql = " SELECT * FROM taskprojects AS t1
                                INNER JOIN  projects AS  t2 ON (t1.ProjectID = t2.ProjectID) where t1.TaskPoID = '".$idtasks."' ";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                while ($row = $stmt->fetch()) { 
                            ?>
                      <div class="row form-group">
                          <div class="col-lg-6">
                            <h4>ชื่องาน</h4> 
                            <input type="text" name="TaskName" id="TaskName" class="form-control"  value="<?php echo $row['TaskPoName']; ?>" />
                            <input type="hidden" name="TaskNames" id="TaskName" class="form-control"  value="<?php echo $row['TaskPoName']; ?>" />
                            <input type="hidden" name="TaskPoid" value="<?php echo $row['TaskPoID']; ?>">
                          </div>
                          <div class="col-lg-6">
													<h4>สถานะงาน</h4> 
													<select class="form-control" name="Taskstatus" >
																<option value="ยังไม่เริ่มโครงการ" <?php if($row['TaskPoStatus']=="ยังไม่เริ่มโครงการ"){ echo "selected";}?>>ยังไม่เริ่มโครงการ</option>
																<option value="กำลังดำเนินการ"  <?php if($row['TaskPoStatus']=="กำลังดำเนินการ"){ echo "selected";}?>>กำลังดำเนินการ</option>
																<option value="อยู่ระหว่างพักโครงการ"  <?php if($row['TaskPoStatus']=="อยู่ระหว่างพักโครงการ"){ echo "selected";}?>>อยู่ระหว่างพักโครงการ</option>
																<option value="ยกเลิกโครงการ"  <?php if($row['TaskPoStatus']=="ยกเลิกโครงการ"){ echo "selected";}?>>ยกเลิกโครงการ</option>
																<option value="ดำเนินการเสร็จสิ้น"  <?php if($row['TaskPoStatus']=="ดำเนินการเสร็จสิ้น"){ echo "selected";}?>>ดำเนินการเสร็จสิ้น</option>
															</select>
                              <input type="hidden" name="Taskstatuss" id="TaskName" class="form-control"  value="<?php echo $row['TaskPoStatus']; ?>" />
												</div>
                      </div>
                      
											<div class="row form-group">
												<div class="col-lg-12">
													<h4>รายละเอียดงาน</h4> 
													<textarea class="form-control" rows="5" id="TaskDetail" name="TaskDetail"  value="" ><?php echo $row['TaskPoDetail']; ?></textarea>
                          <input type="hidden" name="TaskDetails" id="TaskName" class="form-control"  value="<?php echo $row['TaskPoDetail']; ?>" />
												</div>
                      </div>

                      <div class="row form-group">
                      <div class="col-lg-6"><h4>ระยะเวลาดำเนินงาน</h4> 
                          <div class="example" style="margin-top: 0px;">
                            <div class="input-daterange" data-plugin="datepicker" data-date-format="dd-mm-yyyy" data-date-end-date="+<?php echo $enddate; ?>" data-date-start-date="-<?php echo $startdate;?>"> 
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    เริ่มวันที่ : &nbsp;  <i class="icon md-calendar" aria-hidden="true"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control" id="datestart" name="start" value="<?php echo date("d-m-Y", strtotime($row['TaskPoStartDate']));?>"/>
                              </div>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    ถึงวันที่ : &nbsp; <i class="icon md-calendar" aria-hidden="true"> </i>
                                  </span>
                                  </div>
                                  <input type="text" class="form-control" id="dateend" name="end" value="<?php echo date("d-m-Y", strtotime($row['TaskPoEndDate']));?>" />
                                </div>
                              </div>
                            </div>
                            <input type="hidden" name="starts" id="TaskName" class="form-control"  value="<?php echo date("d-m-Y", strtotime($row['TaskPoStartDate']));?>" />
                            <input type="hidden" name="ends" id="TaskName" class="form-control"  value="<?php echo date("d-m-Y", strtotime($row['TaskPoEndDate']));?>" />
                          </div>
												<div class="mb-md hidden-lg hidden-xl"></div>
												<div class="col-lg-6">
                          <h4>ความสำคัญงาน</h4> 
                            <select class="form-control" name="TaskPiority">
																<option value="สูง" <?php if($row['TaskPoPiority']=="สูง"){ echo "selected";} ?>>สูง</option>
																<option value="กลาง" <?php if($row['TaskPoPiority']=="กลาง"){ echo "selected";} ?>>กลาง</option>
																<option value="ต่ำ" <?php if($row['TaskPoPiority']=="ต่ำ"){ echo "selected";} ?>>ต่ำ</option>
															</select>
                              <input type="hidden" name="TaskPioritys" id="TaskName" class="form-control"  value="<?php echo $row['TaskPoPiority']; ?>" />
												</div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-12">
                           <?php 
                              $totalEmphasis=0;
                              $sqlEmphasis = "SELECT TaskPoEmphasis FROM taskprojects where ProjectID = '". $row['ProjectID']."'  AND TaskPoSituation='proceed'";
                                  $stmtEmphasis = $conn->prepare($sqlEmphasis);
                                  $stmtEmphasis->execute();
                                      while ($rowEmphasis = $stmtEmphasis->fetch()) 
                                        { 
                                          $totalEmphasis+= $rowEmphasis["TaskPoEmphasis"];
                                        }
                              $totalEmphasis =100-$totalEmphasis ;
                              $totalEmphasis +=$row['TaskPoEmphasis'];
                          ?>
                           	<h4>น้ำหนักงาน</h4>
                          <input type="text" id="irs_1"  name="Emphasis" data-plugin="ionRangeSlider" data-min=0 data-max=<?php echo $totalEmphasis;?> data-from=<?php echo $row['TaskPoEmphasis']?> />
                          <input type="hidden" name="Emphasiss" class="form-control"  value="<?php echo $row['TaskPoEmphasis'];?>" />
                        </div>
                      </div>
                      <div class="row form-group">
                      <div class="col-lg-12">
                      <?php 
                        $stpo = $conn->query("SELECT count(TaskPoID) as countId FROM task WHERE TaskPoID='".$idtasks."' AND TaskSituation='proceed'");
                        $rowpo = $stpo->fetch(); 
                              $poid = $rowpo['countId'];
                             if($poid<=0){
                               ?>
                               	<h4>ความคืบหน้างาน</h4>
                          <div class="example">
                            <div class="form-group">
                              <input type="text" id="irs_2" name="progress" data-plugin="ionRangeSlider" data-min=0
                                data-max=100 data-from=<?php echo $row['TaskPoProgress']?> />
                                <input type="hidden" name="progresss" id="TaskName" class="form-control"  value="<?php echo $row['TaskPoProgress']; ?>" />
                            </div>
                          </div>
                               <?php
                             }
                      ?>
                      </div>
                   </div>
                  <div class="contaiter container-member">
                  <div class="row form-group">
                        <div class="col-lg-12"><h4>หัวหน้างาน</h4> 
                        <select id="Taskmanager" name="Taskmanager" class="form-control">
                          <?php  
                              $sqlpm = "SELECT *  FROM assigntaskproject AS d1 
                              INNER JOIN taskprojects  AS d2 ON  (d1.TaskPoID = d2.TaskPoID) 
                              INNER JOIN memberproject  AS d4 ON  (d1.MemberProjectID = d4.MemberProjectID) 
                              INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                              WHERE d1.TaskPoID ='".$row['TaskPoID']."' AND d1.AssignTaskPoPosition ='Task-Manager'";
                                 $EmployeeFullName='';
                                 $AssignTaskPoPosition='';
                                 $taskID='';
                                 $assign='';
                                 $EmployeeID='';
                                 $naem='';
                                 $idname='';
                                $stmtpm = $conn->prepare($sqlpm);
                                $stmtpm->execute();
                                while ($rowpm = $stmtpm->fetch()) {
                                  $EmployeeFullName =$rowpm['EmployeeFullName']; 
                                  $AssignTaskPoPosition =$rowpm['AssignTaskPoPosition']; 
                                  $Picemployee = $rowpm['EmployeePic']; 
                                  $taskID=$row['TaskPoID'];
                                  $naem=$rowpm['EmployeeFullName'];
                                  $assign=$rowpm['AssignTaskPoID'];
                                  $EmployeeID=$rowpm['MemberProjectID'];
                                  $idname=$rowpm['EmployeeID'];
                                 
                                  
                          ?>
                          <option id="Tasktm" name="<?php echo $rowpm['ProjectID']; ?>" value="<?php echo $rowpm['MemberProjectID']; ?>"><?php echo $rowpm['EmployeeFullName']; ?></option>
                          <?php } ?>
                          <?php  
                              $sqlpm = "SELECT *  FROM  memberproject  AS d4 
                              INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                              WHERE d4.ProjectID ='".$row['ProjectID']."' AND d4.MemberProjectID !='".$EmployeeID."'";
                                
                                $stmtpm = $conn->prepare($sqlpm);
                                $stmtpm->execute();
                                while ($rowpm = $stmtpm->fetch()) {  ?>
                          <option id="Tasktm" name="<?php echo $rowpm['ProjectID']; ?>"  value="<?php echo $rowpm['MemberProjectID']; ?>"><?php echo $rowpm['EmployeeFullName']; ?></option>
                          <?php }  ?>
                        </select>
                        
                        <br>
                       <?php if($taskID!=null){ ?>
                        <div class="vertical-align-middle  panal-member">
                              <a class="avatar avatar-md float-left mr-20">
                                <img src="assets/employee/<?php echo $Picemployee; ?>" alt="">
                              </a>
                              <div class="float-left" style="margin-right: 20px;">
                                <div class="font-size-12"><?php echo $EmployeeFullName; ?></div>
                                  <p class="mb-20 text-nowrap">
                                    <span class="text-break font-size-12"><?php echo $AssignTaskPoPosition; ?></span>
                                  </p>
                              </div>
                          </div>  
                         <?php  } ?>
                        </div>
                      </div>
                      <hr>
                       <div class="row form-group">
                          <div class="col-lg-12"><h4>สมาชิกงาน</h4> 
                            <div class="example">
                              <div class="select2-primary">
                               <small>เพิ่มสมาชิกงาน</small>
                                <select class="form-control"  id="selTypeRiskAllaa" name="Taskmember[]"  multiple="multiple" data-plugin="select2"> </select>
                              </div>
                            </div>
                          <?php 

                              $sqlpm = "SELECT *  FROM assigntaskproject AS d1 
                              INNER JOIN taskprojects  AS d2 ON  (d1.TaskPoID = d2.TaskPoID) 
                              INNER JOIN memberproject  AS d4 ON  (d1.MemberProjectID = d4.MemberProjectID) 
                              INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                              WHERE d1.TaskPoID ='".$row['TaskPoID']."' AND d1.AssignTaskPoPosition !='Task-Manager'";
                              
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
                                  <span class="text-break font-size-12"><?php echo $rowpm['AssignTaskPoPosition']; ?></span>
                                </p>
                            </div>
                              <button id="delmembertaks" name="<?php echo $rowpm['TaskPoID']; ?>" data="<?php echo $rowpm['EmployeeFullName']; ?>"  idname="<?php echo $rowpm['EmployeeID'];?>" value="<?php echo $rowpm['AssignTaskPoID']; ?>" type="button" class="btn btn-sm btn-icon btn-pure btn-default waves-effect waves-classic" data-toggle="tooltip" data-original-title="ลบสมาชิก">
                                <i class="icon md-close delete-member" aria-hidden="true"></i>
                              </button>
                            </div>
                          <?php } ?>
                        </div>
											</div>
                  </div>
                   <?php }?>  
                        <center>
                        <div class="col-lg-5">
                        <button type="button" class="btn btn-danger waves-effect waves-classic "><a href="./MyTasks.php" class="cancel-btn text-white">ยกเลิก</a></button>
                        <button type="submit" class="btn btn-success waves-effect waves-classic" name="submit" value="บันทึกข้อมูล">บันทึกข้อมูล</button>
                        </div>
                       </center>
                </form>
                  
                    <!-- Modaledite ok -->
                    <div class="modal fade example-modal-sm show modal-success" id="EditTasksuccess" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>แก้ไขข้อมูลงานสำเร็จ</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-success btn-floating btn-lg EditTasksuccessok" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
              <!-- End Modaledite pk-->
               <!-- Modaledite false -->
                    <div class="modal fade example-modal-sm show modal-danger" id="madaldeletefalse" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>แก้ไขข้อมูลงานไม่สำเร็จ</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-danger btn-floating btn-lg hidden" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-close" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
              <!-- End Modaledite false-->
              <!--Modal check delete TM-->
              <div class="modal fade  modal-danger" id="changTM" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                           <form action="" method="post">
                           <div class="modal-dialog  modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                                </div>
                                <div class="modal-body"  style="margin-top: 20px;">
                                  <h4 class="text-center"> คุณแน่ใจที่จะลบพนักงาน :  <b id="mmdelete"></b> ออกจากงานนี้<br> </h4>
                                      <div id="datasubtask"></div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                  <button type="submit" class="btn btn-success" name="submitdeletetm">ยืนยัน</button>
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
                            <button type="button" class="btn btn-success btn-floating btn-lg hiddenclose" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
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
                            <button type="button" class="btn btn-success btn-floating btn-lg hiddenclose" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
              <!-- End Modaldelete pk-->
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
              </div>
            </div>
            <!-- End Panel Basic -->
      </div>
    </div>
    <!-- End Page -->
    <?php 
             
             if(isset($_POST["submit"] )){
                $Taskprogress ='';
                 $TaskPoid = $_POST['TaskPoid'];
                 $TaskName = $_POST['TaskName'];
                 $Emphasis = $_POST['Emphasis'];
                 $Emphasiss = $_POST['Emphasiss'];
                 $TaskDetail = $_POST['TaskDetail'];
                 $Taskstatus = $_POST['Taskstatus'];
                 if(isset($_POST["progress"])){  $Taskprogress = $_POST['progress']; }
                 $TaskPiority = $_POST['TaskPiority'];
                 $newStartDate = date("Y-m-d", strtotime( $_POST['start']));
                 $newendDate = date("Y-m-d", strtotime( $_POST['end']));
                 $Taskmanager = $_POST['Taskmanager']; 
              
                if( $Taskprogress==null )
                  {
                    $datapro = [

                      'TaskPoName' => $TaskName,
                      'TaskPoStatus' => $Taskstatus,
                      'TaskPoPiority' => $TaskPiority,
                      'TaskPoEmphasis' => $Emphasis,
                      'TaskPoDetail' => $TaskDetail,
                      'TaskPoStartDate' => $newStartDate,
                      'TaskPoEndDate' => $newendDate,
                      'TaskPoID' =>  $TaskPoid 
                  ];
                  //update Taskproject
                  $sqlpro = "UPDATE taskprojects SET 
                              TaskPoName=:TaskPoName,
                              TaskPoStatus=:TaskPoStatus,
                              TaskPoPiority=:TaskPoPiority,
                              TaskPoEmphasis=:TaskPoEmphasis,
                              TaskPoDetail=:TaskPoDetail,
                              TaskPoStartDate=:TaskPoStartDate,
                              TaskPoEndDate=:TaskPoEndDate
                               WHERE TaskPoID=:TaskPoID";
 
                  $stmtpro= $conn->prepare($sqlpro);
                  }
                  else
                  {
                      $datapro = [

                      'TaskPoName' => $TaskName,
                      'TaskPoStatus' => $Taskstatus,
                      'TaskPoPiority' => $TaskPiority,
                      'TaskPoProgress' => $Taskprogress,
                      'TaskPoEmphasis' => $Emphasis,
                      'TaskPoDetail' => $TaskDetail,
                      'TaskPoStartDate' => $newStartDate,
                      'TaskPoEndDate' => $newendDate,
                      'TaskPoID' =>  $TaskPoid 
                  ];
                  //update Taskproject
                  $sqlpro = "UPDATE taskprojects SET 
                              TaskPoName=:TaskPoName,
                              TaskPoStatus=:TaskPoStatus,
                              TaskPoPiority=:TaskPoPiority,
                              TaskPoProgress=:TaskPoProgress,
                              TaskPoEmphasis=:TaskPoEmphasis,
                              TaskPoDetail=:TaskPoDetail,
                              TaskPoStartDate=:TaskPoStartDate,
                              TaskPoEndDate=:TaskPoEndDate
                               WHERE TaskPoID=:TaskPoID";
 
                  $stmtpro= $conn->prepare($sqlpro);
                  }            
               
                 if ($stmtpro->execute($datapro)) { 
                    
                         $stpo = $conn->query("SELECT *  FROM assigntaskproject WHERE TaskPoID = '".$TaskPoid."' AND AssignTaskPoPosition='Task-Manager'");
                         $rowpo = $stpo->fetch(); 
                         $poid = $rowpo['MemberProjectID'];
                         $AssignTaskPoID =  $rowpo['AssignTaskPoID'];
                        if( $poid ==null){
                          $datapmm = [
                            'MemberProjectID' =>$Taskmanager,
                            'AssignTaskPoPosition' => "Task-Manager",
                            'TaskPoID' => $TaskPoid
                        ];
                          $sqlpmm = "INSERT INTO assigntaskproject (AssignTaskPoPosition, MemberProjectID, TaskPoID) VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                          $stmtpm= $conn->prepare($sqlpmm);
                          $stmtpm->execute($datapmm);
                        }
                         // edete Task Manager
                         if($Taskmanager != $poid ){
                             $datapm = [
                                 'MemberProjectID' => $Taskmanager,
                                 'AssignTaskPoID' => $AssignTaskPoID
                             ];
                             $sqlpm = "UPDATE assigntaskproject SET 
                             MemberProjectID=:MemberProjectID
                              WHERE AssignTaskPoID=:AssignTaskPoID";
                             $stmtpm= $conn->prepare($sqlpm);
                             $stmtpm->execute($datapm);

                             $dataActi = [
                              'ActivitiesName' =>"เปลี่ยนแปลงหัวหน้างานคนใหม่",
                              'ActivitiesDate' =>  $dateActi,
                              'ActivitiesTaskPoID' =>$TaskPoid,
                              'AssignTaskPoID' => $_SESSION["Employee"]
                          ];
                          $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                           VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                          $stmtpm= $conn->prepare($sqlActi);
                          $stmtpm->execute($dataActi);
                           }
                           // edete Task Member
                          if(isset($_POST["Taskmember"])!=null){
                                $Taskmember = $_POST['Taskmember'];
                                 $countarray = count($Taskmember);
                                 for($i=0; $i<$countarray; $i++){
                                     $PositionPM = "Task-Member";
                                     $datapmm = [
                                         'MemberProjectID' =>$Taskmember[$i],
                                         'AssignTaskPoPosition' => $PositionPM,
                                         'TaskPoID' => $TaskPoid
                                     ];
                                     $sqlpmm = "INSERT INTO assigntaskproject (AssignTaskPoPosition, MemberProjectID, TaskPoID) VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                                     $stmtpm= $conn->prepare($sqlpmm);
                                     $stmtpm->execute($datapmm);
                                     }
                             } 
                           // Insert activitiestaskproject
                           $dataactivitie="";
                           if($_POST['TaskName'] != $_POST['TaskNames'])
                           {  $dataactivitie = "แก้ไขชื่องาน";
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if($_POST['TaskDetail'] != $_POST['TaskDetails'])
                           {  $dataactivitie = "แก้ไขรายละเอียดงาน";
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if($_POST['Taskstatus'] != $_POST['Taskstatuss'])
                           {  $dataactivitie = "แก้ไขสถานะงาน";
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if($_POST['TaskPiority'] != $_POST['TaskPioritys'])
                           {  $dataactivitie = "แก้ไขความสำคัญงาน";
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if($_POST['start'] != $_POST['starts'])
                           {  $dataactivitie = "แก้ไขวันเริ่มงาน";
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if($_POST['end'] != $_POST['ends'])
                           {  $dataactivitie = "แก้ไขวันสิ้นสุดงาน" ; 
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if($_POST['Emphasis'] != $_POST['Emphasiss'])
                           {  $dataactivitie = "แก้ไขน้ำหนักงาน" ; 
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if($_POST['progress'] != $_POST['progresss'])
                           {  $dataactivitie = "แก้ไขความคืบหน้างาน";
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           if(isset($_POST["Taskmember"]) != null)
                           {  $dataactivitie = "เพิ่มสมาชิกเข้ามาใหม่";
                                $dataActi = [
                               'ActivitiesName' =>$dataactivitie,
                               'ActivitiesDate' =>  $dateActi,
                               'ActivitiesTaskPoID' =>$TaskPoid,
                               'AssignTaskPoID' => $_SESSION["Employee"]
                           ];
                           $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                            VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                           $stmtpm= $conn->prepare($sqlActi);
                           $stmtpm->execute($dataActi);
                          }
                           $_SESSION["idtasks"]=$idtasks;
                            ?>
                             
                             <script type="text/javascript">
                                $(document).ready(function() {
                                  $( "#EditTasksuccess" ).modal('show');
                                  $(".select2-primary").css("position","sticky");  
                                  $(".select2-primary").css("width","100%");  
                                });
                            </script>
                 <?php }  
                 else{
                     ?>
                     <script>
                    $(document).ready(function(){
                         $('#madaldeletefalse').modal('show');  
                         });
                     </script>
                     <?php
                 } 
             }
             if(isset($_POST["submitdeletetm"] )){
               //อัพเดตหัวหน้างานย่อย
                  $changmembermm = $_POST['changmember'];
                  $AssignTaskID=$_POST['AssignTaskID'];
                  $changmemberaa = count($changmembermm);
                  $TaskID= $_POST['TaskID'];
                  for($i=0; $i<$changmemberaa; $i++)
                  {
                            $datapm = [
                              'AssignTaskPoID' => $changmembermm[$i],
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
                  //ลบพนักงานในงานย่อย
                  if ($stmtpm->execute($dataActi)) {
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
                        //ลบพนักงานในงาน
                            $deletetmid = $_POST['deletetmid'];
                            $Taskpoid =  $_POST['Taskpoid'];
                            $datadel = [
                              'id' => $deletetmid[0]
                          ];
                          $sqldel = "DELETE FROM assigntaskproject WHERE AssignTaskPoID=:id ";
                          $stmtdel = $conn->prepare($sqldel);
                          $stmtdel->execute($datadel);
                          
                          $dataActis = [
                            'ActivitiesName' =>"ลบสมาชิกงานออกจากทีม",
                            'ActivitiesDate' =>  $dateActi,
                            'ActivitiesTaskPoID' =>  $Taskpoid[0],
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
                              $(".select2-primary").css("position","sticky");  
                              $(".select2-primary").css("width","100%");  
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
         
         ?>
    <!-- Footer -->
    <footer class="site-footer">
    <?php include('footer.html');?>
    </footer>
    <!--delete PM PMM-->
    <script>
            var Taskpoid='';
            var AssignTaskPoID='';
            var employeeID='';
            var AssignTaskPoName='';
            $(document).on('click', '#delmembertaks', function(){  
                    Taskpoid = $(this).attr("name"); 
                    AssignTaskPoID = $(this).attr("value"); 
                    AssignTaskPoName = $(this).attr("data"); 
                    employeeID = $(this).attr("idname"); 
                    $.ajax({
										url: "View_task.php",
                    method:"POST", 
										data:({taskid: Taskpoid,taskaction: 'checkmm',employeeID: employeeID, AssignTaskPoName:AssignTaskPoName}),
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
                             if(value.AssignTaskPosition=="Task-SubManager"){
                              $("#datasubtask").append('<div class="card border  border-primary">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">งานย่อยชื่อ : '+value.TaskName+'</h4>'+
                                          '<p class="card-text">'+
                                          'จำเป็นต้องเลือกผู้รับผิดชอบงานแทนก่อน!!!'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.AssignTaskPoID+'">'+
                                          '<input type="hidden" name="Taskpoid[]" value="'+value.TaskPoID+'">'+
                                          '<input type="hidden" name="TaskID[]" value="'+value.TaskID+'">'+
                                          '<input type="hidden" name="AssignTaskID[]" value="'+value.AssignTaskID+'">'+
                                          '<select class="form-control"  id="changmember'+index+'" name="changmember[]"> </select>'+
                                          '</p>'+
                                        '</div>'+
                                      '</div>');
                             $('#changmember'+index+'').ready(function() {
                                  $.ajax({
                                  url: "view_member.php",
                                  data: ({subject_id:Taskpoid,pj:AssignTaskPoID,checkmm:"Check"}),
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
                             if(value.AssignTaskPosition!="Task-SubManager"){
                              $("#datasubtask").append('<div class="card border  border-primary">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">มีหน้าที่รับผิดชอบงานย่อยชื่อ : '+value.TaskName+'</h4>'+
                                          '<p class="card-text">'+
                                          'ชื่อพนักงาน : <b> '  +value.EmployeeFullName+ '</b><br>  ตำแหน่งงาน :  สมาชิกงานย่อย'+
                                          '<input type="hidden" name="TaskIDmm[]" value="'+value.TaskID+'">'+
                                          '<input type="hidden" name="AssignTaskIDmm[]" value="'+value.AssignTaskID+'">'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.AssignTaskPoID+'">'+
                                          '<input type="hidden" name="Taskpoid[]" value="'+value.TaskPoID+'">'+
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

                $(document).on('click', '.deletetask', function(){  
                      $('#madaldeletePM').modal('hide');  
									$.ajax({
										url: "View_task.php",
                    method:"POST", 
										data:({taskid: deletetask,taskaction:'deletetask'}),
										dataType: "json",
										success: function(json){
                        $('#madaldeleteok').modal('show');  
                                        
										}
									});
								});
                
                $(document).on('click', '.hiddenclose', function(){  
                  window.location.href="editeTasks.php" 
                });
                
                $(document).on('click', '.EditTasksuccessok', function(){ 
                  window.location.href="MyTasks.php" 
                });
                
                $(document).on('click', '.deletemm', function(){ 
                        var TaskPoID = $('#deletetmm').attr("name"); 
                        var AssignTaskPoID = $('#deletetmm').attr("value"); 
                    $.ajax({
                    url: "View_task.php",
                    method:"POST", 
                    data: ({taskid: TaskPoID,taskaction: 'deletetaskPM', AssignTaskPoID:AssignTaskPoID}),
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
             <!--end delete PM PMM-->
    <!-- Script select-->
    <script>

          $('#Taskmanager').ready(function() {
           var Taskname = $('#Tasktm').attr("name"); 
          var  Taskmanager =  $('#Taskmanager').val();
							$.ajax({
							url: "view_member.php",
							data: ({subject_id:Taskmanager,pj:Taskname,checkmm:"selectmm"}),
							dataType: "json",
							beforeSend: function() {
								$("#selTypeRiskAllaa").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#selTypeRiskAllaa").append('<option value="'+ value.MemberProjectID +'" hidden>' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});

							$('#Taskmanager').change(function() {
                var  Taskmanager =  $('#Taskmanager').val();
                var Taskname = $('#Tasktm').attr("name"); 
							$.ajax({
							url: "view_member.php",
              data: ({subject_id:Taskmanager,pj:Taskname,checkmm:"selectmm"}),
							dataType: "json",
							beforeSend: function() {
								$("#selTypeRiskAllaa").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + '">' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});
								$('#Taskmanager').ready(function() {
								MemberProjectID = $('#Taskmanager').val();
									$.ajax({
										url: "view_member.php",
										data:({subject_id: MemberProjectID,}),
										dataType: "json",
										beforeSend: function() {
											$("#selTypeRiskAllaa").html("");
										},
										success: function(json){
											$("#selTypeRiskAllaa").html("");
											$.each(json, function(index, value) {
												$("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + 
																		'">' + value.EmployeeFullName + '</option>');
											});
										}
									});
								});
								$('#selTypeRiskAll').change(function() {
								MemberProjectID = $('#selTypeRiskAll').val();
									$.ajax({
										url: "view_member.php",
										data:({subject_id: MemberProjectID,}),
										dataType: "json",
										beforeSend: function() {
											$("#selTypeRiskAllaa").html("");
										},
										success: function(json){
											$("#selTypeRiskAllaa").html("");
											$.each(json, function(index, value) {
												$("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + 
																		'">' + value.EmployeeFullName + '</option>');
											});
										}
									});
								});
    </script>
    <!-- Core  -->
    <script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
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
        <script src="global/vendor/select2/select2.full.min.js"></script>
        <script src="global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
        <script src="global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="global/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script src="global/vendor/icheck/icheck.min.js"></script>
        <script src="global/vendor/switchery/switchery.js"></script>
        <script src="global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="global/vendor/ionrangeslider/ion.rangeSlider.min.js"></script>
        <script src="global/vendor/asspinner/jquery-asSpinner.min.js"></script>
        <script src="global/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="global/vendor/ascolor/jquery-asColor.min.js"></script>
        <script src="global/vendor/asgradient/jquery-asGradient.min.js"></script>
        <script src="global/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
        <script src="global/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        <script src="global/vendor/jquery-knob/jquery.knob.js"></script>
        <script src="global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
        <script src="global/vendor/jquery-labelauty/jquery-labelauty.js"></script>
        <script src="global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="global/vendor/timepicker/jquery.timepicker.min.js"></script>
        <script src="global/vendor/datepair/datepair.min.js"></script>
        <script src="global/vendor/datepair/jquery.datepair.min.js"></script>
        <script src="global/vendor/jquery-strength/password_strength.js"></script>
        <script src="global/vendor/jquery-strength/jquery-strength.min.js"></script>
        <script src="global/vendor/multi-select/jquery.multi-select.js"></script>
        <script src="global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <script src="global/vendor/webui-popover/jquery.webui-popover.min.js"></script>
        <script src="global/vendor/toolbar/jquery.toolbar.js"></script>
        <script src="global/vendor/asprogress/jquery-asProgress.js"></script>
    
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
        <script src="global/js/Plugin/peity.js"></script>
        <script src="global/js/Plugin/matchheight.js"></script>
        <script src="global/js/Plugin/peity.js"></script>
        <script src="global/js/Plugin/select2.js"></script>
        <script src="global/js/Plugin/bootstrap-tokenfield.js"></script>
        <script src="global/js/Plugin/bootstrap-tagsinput.js"></script>
        <script src="global/js/Plugin/bootstrap-select.js"></script>
        <script src="global/js/Plugin/icheck.js"></script>
        <script src="global/js/Plugin/switchery.js"></script>
        <script src="global/js/Plugin/asrange.js"></script>
        <script src="global/js/Plugin/ionrangeslider.js"></script>
        <script src="global/js/Plugin/asspinner.js"></script>
        <script src="global/js/Plugin/clockpicker.js"></script>
        <script src="global/js/Plugin/ascolorpicker.js"></script>
        <script src="global/js/Plugin/bootstrap-maxlength.js"></script>
        <script src="global/js/Plugin/jquery-knob.js"></script>
        <script src="global/js/Plugin/bootstrap-touchspin.js"></script>
        <script src="global/js/Plugin/card.js"></script>
        <script src="global/js/Plugin/jquery-labelauty.js"></script>
        <script src="global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="global/js/Plugin/jt-timepicker.js"></script>
        <script src="global/js/Plugin/datepair.js"></script>
        <script src="global/js/Plugin/jquery-strength.js"></script>
        <script src="global/js/Plugin/multi-select.js"></script>
        <script src="global/js/Plugin/jquery-placeholder.js"></script>
        <script src="global/js/Plugin/webui-popover.js"></script>
        <script src="global/js/Plugin/toolbar.js"></script>
        <script src="assets/examples/js/uikit/tooltip-popover.js"></script>
        <script src="global/js/Plugin/asprogress.js"></script>
        <script src="assets/examples/js/uikit/progress-bars.js"></script>
        <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
     <script>
        var fixmin = $('#irs_2').attr("data-from");
       $("#irs_2").ionRangeSlider({
        from_min: fixmin  
    });
    </script>
  </body>
</html>
<?php } ?>