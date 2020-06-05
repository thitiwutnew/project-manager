<?php 
  session_start();
$isTouch = isset( $_SESSION["editsubetasks"] );
	if($isTouch==null){
		 echo '<script>window.location.href="index.php"</script>';
	}
	else{
       $editsubetasks= $_SESSION["editsubetasks"];
       $taskPoID= $_SESSION["TaskPoID"];
       include('Connnect.php');
       date_default_timezone_set("Asia/Bangkok");
       $date= Date("d-m-Y");
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
    
    <title>อัพเดตรายละเอียดงานย่อย || PROJECT MANAGEMENT</title>
    
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
                   $sql = "SELECT * FROM task AS a1 
                  INNER JOIN taskprojects AS a2 ON(a1.TaskPoID=a2.TaskPoID) 
                  where a1.TaskID ='".$editsubetasks."'";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          while ($row = $stmt->fetch()) { 
             $startdate=$row['TaskPoStartDate'];
              $formatestart = date('d/m/Y', strtotime($startdate));
              $startdate= $formatestart;
              
              $enddate=$row['TaskPoEndDate'];
              $formateend = date('d/m/Y', strtotime($enddate));
              $enddate= $formateend;
        ?>
            <h1 class="page-title">อัพเดตรายละเอียดงานย่อย : <?php echo $row['TaskName']?></h1>
         <?php }?>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="MyProject.php">โครงการทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item"><a href="MyTasks.php">งานทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item"><a href="MySubTasks.php">งานย่อยทั้งหมที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item active">อัพเดตรายละเอียดงานย่อย</li>
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
                <form action="" method="post">
                <?php 
                                include('Connnect.php');
                                $sql = "SELECT * FROM task AS  sub1
                                INNER JOIN  taskprojects AS  sub2 ON (sub1.TaskPoID = sub2.TaskPoID) where sub1.TaskID =  '".$editsubetasks."' ";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                while ($row = $stmt->fetch()) { 
                            ?>
                         <div class="row form-group">
												<div class="col-lg-6">
													 <h4>ชื่องานย่อย</h4> 
                          <input type="text" name="TaskName" id="TaskName" class="form-control"  value="<?php echo $row['TaskName']; ?>" />
                          <input type="hidden" name="TaskNames" id="TaskNames" class="form-control"  value="<?php echo $row['TaskName']; ?>" />
                          <input type="hidden" name="TaskPoid" value="<?php echo $row['TaskID']; ?>">
												</div>
                      </div>
                      
											<div class="row form-group">
												<div class="col-lg-12">
													<h4>รายละเอียดงานย่อย</h4> 
                          <textarea class="form-control" rows="5" id="TaskDetail" name="TaskDetail"  value="" ><?php echo $row['TaskDetail']; ?></textarea>
                          <input type="hidden" name="TaskDetails" id="TaskNames" class="form-control"  value="<?php echo $row['TaskDetail']; ?>" />
												</div>
                      </div>

                      <div class="row form-group">
												<div class="col-lg-6">
													<h4>สถานะงานย่อย</h4> 
													<select class="form-control" name="Taskstatus" >
																<option value="ยังไม่เริ่มโครงการ" <?php if($row['TaskStatus']=="ยังไม่เริ่มโครงการ"){ echo "selected";}?>>ยังไม่เริ่มโครงการ</option>
																<option value="กำลังดำเนินการ"  <?php if($row['TaskStatus']=="กำลังดำเนินการ"){ echo "selected";}?>>กำลังดำเนินการ</option>
																<option value="อยู่ระหว่างพักโครงการ"  <?php if($row['TaskStatus']=="อยู่ระหว่างพักโครงการ"){ echo "selected";}?>>อยู่ระหว่างพักโครงการ</option>
																<option value="ยกเลิกโครงการ"  <?php if($row['TaskStatus']=="ยกเลิกโครงการ"){ echo "selected";}?>>ยกเลิกโครงการ</option>
																<option value="ดำเนินการเสร็จสิ้น"  <?php if($row['TaskStatus']=="ดำเนินการเสร็จสิ้น"){ echo "selected";}?>>ดำเนินการเสร็จสิ้น</option>
                              </select>
                              <input type="hidden" name="Taskstatuss" id="Taskstatuss" class="form-control"  value="<?php echo $row['TaskStatus']; ?>" />
												</div>
												<div class="mb-md hidden-lg hidden-xl"></div>
												<div class="col-lg-6">
                          <h4>ความสำคัญงานย่อย</h4> 
                            <select class="form-control" name="TaskPiority">
																<option value="สูง" <?php if($row['TaskPiority']=="สูง"){ echo "selected";} ?>>สูง</option>
																<option value="กลาง" <?php if($row['TaskPiority']=="กลาง"){ echo "selected";} ?>>กลาง</option>
																<option value="ต่ำ" <?php if($row['TaskPiority']=="ต่ำ"){ echo "selected";} ?>>ต่ำ</option>
                              </select>
                              <input type="hidden" name="TaskPioritys" id="TaskNames" class="form-control"  value="<?php echo $row['TaskPiority']; ?>" />
												</div>
                      </div>
                      
											<div class="row form-group">
                      <div class="col-lg-6"><h4>ระยะเวลาดำเนินงานย่อย</h4> 
                          <div class="example">
                            <div class="input-daterange" data-plugin="datepicker" data-date-format="dd-mm-yyyy"  data-date-end-date="+<?php echo $enddate; ?>" data-date-start-date="-<?php echo $startdate;?>"> 
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    เริ่มวันที่ : &nbsp;  <i class="icon md-calendar" aria-hidden="true"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control" id="datestart" name="start" value="<?php echo date("d-m-Y", strtotime($row['TaskStartDate']));?>"/>
                              </div>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    ถึงวันที่ : &nbsp; <i class="icon md-calendar" aria-hidden="true"> </i>
                                  </span>
                                  </div>
                                  <input type="text" class="form-control" id="dateend" name="end" value="<?php echo date("d-m-Y", strtotime($row['TaskEndDate']));?>" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" name="starts" id="TaskNames" class="form-control"  value="<?php echo date("d-m-Y", strtotime($row['TaskStartDate']));?>" />
                          <input type="hidden" name="ends" id="TaskNames" class="form-control"  value="<?php echo date("d-m-Y", strtotime($row['TaskEndDate']));?>" />
												<div class="mb-md hidden-lg hidden-xl"></div>
												<div class="col-lg-6">
                             <?php 
                              $totalEmphasis=0;
                              $sqlEmphasis = "SELECT TaskEmphasis FROM task where TaskPoID = '".$row['TaskPoID']."'  AND TaskSituation='proceed'";
                                  $stmtEmphasis = $conn->prepare($sqlEmphasis);
                                  $stmtEmphasis->execute();
                                      while ($rowEmphasis = $stmtEmphasis->fetch()) 
                                        { 
                                          $totalEmphasis+= $rowEmphasis["TaskEmphasis"];
                                        }
                              $totalEmphasis =100-$totalEmphasis ;
                              $totalEmphasis +=$row['TaskEmphasis'];
                          ?>
                           	<h4>น้ำหนักงาน</h4>
                          <input type="text" id="irs_1"  name="Emphasis" data-plugin="ionRangeSlider" data-min=0 data-max=<?php echo $totalEmphasis;?> data-from=<?php echo $row['TaskEmphasis']?> />
                          <input type="hidden" name="Emphasiss" class="form-control"  value="<?php echo $row['TaskEmphasis'];?>" />
											<div class="mb-md hidden-lg hidden-xl"></div>
                      </div>

                    </div>
                      <div class="row form-group">
                        <div class="col-lg-12">
                         	<h4>ความคืบหน้างานย่อย</h4>
                          <div class="example">
                            <div class="form-group">
                              <input type="text" id="slidprogress" name="progress" data-plugin="ionRangeSlider" data-min=0
                                data-max=100 data-from=<?php echo $row['TaskProgress']?> />
                            </div>
                            <input type="hidden" name="progresss" value="<?php echo $row['TaskProgress']?>">
                          </div>
                        </div>
                      </div>
                    <div class="contaiter container-member">
                    <div class="row form-group">
                        <div class="col-lg-12"><h4>หัวหน้างานย่อย</h4> 
                        <select id="subTaskmanager" name="Taskmanager" class="form-control">
                          <?php  
                          
                              $sqlpm = "SELECT * FROM assigntask AS d5 
                              INNER JOIN assigntaskproject AS d2 ON (d5.AssignTaskPoID = d2.AssignTaskPoID)
                               INNER JOIN memberproject AS d4 ON (d2.MemberProjectID = d4.MemberProjectID) 
                               INNER JOIN employee AS d3 ON (d4.EmployeeID = d3.EmployeeID)
                               WHERE d5.TaskID ='".$editsubetasks."' AND d5.AssignTaskPosition ='Task-SubManager'";
                                 $EmployeeFullName='';
                                 $AssignTaskPoPosition='';
                                 $taskID='';
                                 $assign='';
                                $stmtpm = $conn->prepare($sqlpm);
                                $stmtpm->execute();
                                while ($rowpm = $stmtpm->fetch()) {
                                  $EmployeeFullName =$rowpm['EmployeeFullName']; 
                                  $AssignTaskPoPosition =$rowpm['AssignTaskPosition']; 
                                  $Picemployee = $rowpm['EmployeePic']; 
                                  $taskID=$rowpm['AssignTaskID'];
                                  $assign=$rowpm['AssignTaskPoID'];
                                  
                          ?>
                          <option id="Tasktm" name="<?php echo $rowpm['TaskPoID']; ?>" value="<?php echo $rowpm['AssignTaskPoID']; ?>" ><?php echo $rowpm['EmployeeFullName']; ?></option>
                         <?php } ?>
                          <?php  
                              $sqlpm = "SELECT *  FROM  assigntaskproject AS d1
                              INNER JOIN memberproject  AS d4 ON  (d1.MemberProjectID = d4.MemberProjectID) 
                              INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID)  
                              WHERE d1.TaskPoID ='".$taskPoID."'";
                                
                                $stmtpm = $conn->prepare($sqlpm);
                                $stmtpm->execute();
                                while ($rowpmmm = $stmtpm->fetch()) {  ?>
                          <option id="Tasktm" name="<?php echo $rowpmmm['TaskPoID']; ?>" value="<?php echo $rowpmmm['AssignTaskPoID']; ?>" <?php if($rowpmmm['AssignTaskPoID']==$assign){echo "hidden";}?>><?php echo $rowpmmm['EmployeeFullName']; ?></option>
                          <?php } ?>
                        </select>
                        <br>
                       <?php if($taskID!=null){ ?>
                        <div class="vertical-align-middle panal-member">
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
                       <div class="row form-group">
                          <div class="col-lg-12"><h4>สมาชิกงานย่อย</h4> 
                            <div class="example">
                              <div class="select2-primary">
                              <small>เพิ่มสมาชิกงานย่อย</small>
                                <select class="form-control"  id="membersubtask" name="Taskmember[]"  multiple="multiple" data-plugin="select2"> </select>
                              </div>
                            </div>
                          <?php 
                              
                              $sqlpm = "SELECT *  FROM assigntask AS d1 
                              INNER JOIN assigntaskproject  AS d2 ON  (d1.AssignTaskPoID = d2.AssignTaskPoID) 
                              INNER JOIN memberproject  AS d4 ON  (d2.MemberProjectID = d4.MemberProjectID) 
                              INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                              WHERE d1.TaskID ='".$editsubetasks."' AND d1.AssignTaskPosition !='Task-SubManager'";
                              
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
                                  <span class="text-break font-size-12"><?php echo $rowpm['AssignTaskPosition']; ?></span>
                                </p>
                            </div>
                              <button id="deletemembersubtask" name="<?php echo $rowpm['AssignTaskID']; ?>"  data="<?php echo $rowpm['EmployeeFullName']; ?>"  value="<?php echo $editsubetasks; ?>" type="button" class="btn btn-sm btn-icon btn-pure btn-default waves-effect waves-classic" data-toggle="tooltip" data-original-title="ลบสมาชิก">
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
                        <button type="button" class="btn btn-danger waves-effect waves-classic "><a href="./MySubTasks.php" class="cancel-btn text-white">ยกเลิก</a></button>
                        <button type="submit" class="btn btn-success waves-effect waves-classic" name="submit" value="บันทึกข้อมูล">บันทึกข้อมูล</button>
                        </div>
                       </center>
                </form>
                      <!--Modal edite-->
                      <div class="modal fade example-modal-sm show modal-success" id="madaledite" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>แก้ไขข้อมูลงานย่อยสำเร็จ!!!</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-success btn-floating btn-lg editeeok" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                      <!--end Modal edite-->
                      <!--Modal  editefalse-->
                      <div class="modal fade" id="madaleditefalse" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-simple modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                            <center><h3>แก้ไขข้อมูลงานย่อยไม่สำเร็จ!!!</h3></center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-pure hiddenclose" data-dismiss="modal">ปิดหน้านี้</button>
                        </div>
                    </div>
                    </div>
                </div>
                      <!--end Modal  editefalse-->
                    <!-- Modaldelete ok -->
                    <div class="modal fade example-modal-sm show modal-success" id="madaldeleteok" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>      <center><h3>ลบข้อมูลสมาชิกสำเร็จ!!!</h3></center></p>
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


    <!-- Footer -->
    <footer class="site-footer">
    <?php include('footer.html');?>
    </footer>
    <?php 
                if(isset($_POST["submit"] )){
                  $TaskPoid = $_POST['TaskPoid'];
                    $TaskName = $_POST['TaskName'];
                    $TaskDetail = $_POST['TaskDetail'];
                    $Taskstatus = $_POST['Taskstatus'];
                    $TaskEmphasis = $_POST['Emphasis'];
                    $TaskPiority = $_POST['TaskPiority'];
                    $newStartDate = date("Y-m-d", strtotime( $_POST['start']));
                    $newendDate = date("Y-m-d", strtotime( $_POST['end']));
                    $progress = $_POST['progress'];
                    $actiontask = $_POST['actiontask'];
                    $Taskmanager = $_POST['Taskmanager']; 
                 
                                           
                    $datapro = [

                        'TaskPoName' => $TaskName,
                        'TaskPoStatus' => $Taskstatus,
                        'TaskPoPiority' => $TaskPiority,
                        'TaskPoProgress' => $progress,
                        'TaskEmphasis' => $TaskEmphasis,
                        'TaskPoDetail' => $TaskDetail,
                        'TaskPoStartDate' => $newStartDate,
                        'TaskPoEndDate' => $newendDate,
                        'TaskPoID' =>  $TaskPoid 
                    ];
                    //update Taskproject
                    $sqlpro = "UPDATE task SET 
                                TaskName=:TaskPoName,
                                TaskStatus=:TaskPoStatus,
                                TaskPiority=:TaskPoPiority,
                                TaskProgress=:TaskPoProgress,
                                TaskEmphasis=:TaskEmphasis,
                                TaskDetail=:TaskPoDetail,
                                TaskStartDate=:TaskPoStartDate,
                                TaskEndDate=:TaskPoEndDate
                                 WHERE TaskID=:TaskPoID";

                    $stmtpro= $conn->prepare($sqlpro);
                    if ($stmtpro->execute($datapro)) { 
                       
                            $stpo = $conn->query("SELECT *  FROM assigntask WHERE TaskID = '".$TaskPoid."' AND AssignTaskPosition='Task-SubManager'");
                            $rowpo = $stpo->fetch(); 
                            $poid = $rowpo['AssignTaskPoID'];
                            $AssignTaskPoID =  $rowpo['AssignTaskID'];

                            if( $poid ==null){
                              $datapmm = [
                                'MemberProjectID' =>$Taskmanager,
                                'AssignTaskPoPosition' => "Task-SubManager",
                                'TaskPoID' => $TaskPoid
                            ];
                              $sqlpmm = "INSERT INTO assigntask (AssignTaskPosition, AssignTaskPoID, TaskID) VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                              $stmtpm= $conn->prepare($sqlpmm);
                              $stmtpm->execute($datapmm);
                            }
                            // edete Task Manager
                            if($Taskmanager != $poid){
                                $datapm = [
                                    'MemberProjectID' => $Taskmanager,
                                    'AssignTaskID' => $AssignTaskPoID
                                ];
                                $sqlpm = "UPDATE assigntask SET 
                                AssignTaskPoID=:MemberProjectID
                                 WHERE AssignTaskID=:AssignTaskID";
                                $stmtpm= $conn->prepare($sqlpm);
                                $stmtpm->execute($datapm);

                                $dataActi = [
                                  'ActivitiesName' =>"เปลี่ยนหัวหน้างานย่อย",
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
                                    $Taskmember= $_POST["Taskmember"];
                                    $countarray = count($Taskmember);
                                    for($i=0; $i<$countarray; $i++){
                                        $PositionPM = "Task-SubMember";
                                        $datapmm = [
                                            'MemberProjectID' =>$Taskmember[$i],
                                            'AssignTaskPoPosition' => $PositionPM,
                                            'TaskPoID' => $TaskPoid
                                        ];
                                        $sqlpmm = "INSERT INTO assigntask (AssignTaskPosition, AssignTaskPoID, TaskID)
                                         VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                                        $stmtpm= $conn->prepare($sqlpmm);
                                        $stmtpm->execute($datapmm);
                                        }
                                } 
                              // Insert activitiestaskproject
                              date_default_timezone_set("Asia/Bangkok");
                              
                              $dataactivitie="";
                              if($_POST['TaskName'] != $_POST['TaskNames'])
                              {  $dataactivitie = "แก้ไขชื่องานย่อย";
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
                              {  $dataactivitie = "แก้ไขรายละเอียดงานย่อย";
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
                              {  $dataactivitie = "แก้ไขรายสถานะงานย่อย";
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
                              {  $dataactivitie = "แก้ไขความสำคัญงานย่อย";
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
                              {  $dataactivitie = "แก้ไขวันเริ่มงานย่อย";
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
                              {  $dataactivitie ="แก้ไขวันสิ้นสุดงานย่อย" ;
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
                              {  $dataactivitie ="แก้ไขน้ำหนักงานย่อย" ;
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
                              {  $dataactivitie = "แก้ไขความคืบหน้างานย่อย";
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
                              if($_POST['Taskmember'] != null)
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
                              
                              $_SESSION["viewsubtasks"]=$editsubetasks;
                               ?>
                                  <script type="text/javascript">
                            $(document).ready(function() {
                              $( "#madaledite" ).modal('show');
                              $(".select2-primary").css("position","sticky");  
                              $(".select2-primary").css("width","100%");  
                            });
                          </script>
                    <?php }  
                    else{
                        ?>
                          <script type="text/javascript">
                            $(document).ready(function() {
                              $( "#madaleditefalse" ).modal('show');
                            });
                          </script>
                        <?php
                    } 
                }
            
            ?>
    <!--delete PM PMM-->
    <script>
            var Taskpoid='';
            var AssignTaskPoID='';
            $(document).on('click', '#deletemembersubtask', function(){  
                    Taskpoid = $(this).attr("name"); 
                    AssignTaskPoID = $(this).attr("value"); 
                    AssignTaskPoName = $(this).attr("data"); 
                    $.ajax({
										url: "View_subtask.php",
                    method:"POST", 
										data:({taskid: Taskpoid,taskaction:'deletemembersubtask',AssignTaskPoID: AssignTaskPoID, AssignTaskPoName:AssignTaskPoName}),
										dataType: "json",
										success: function(json){
                        $('#madaldeleteok').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
										}
									});
								});

                $(document).on('click', '.deletetask', function(){  
                      $('#madaldeletePM').modal('hide');  
									$.ajax({
										url: "View_subtask.php",
                    method:"POST", 
										data:({taskid: deletetask,taskaction:'deletetask'}),
										dataType: "json",
										success: function(json){
                        $('#madaldeleteok').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                              $(".select2-primary").css("width","100%");  
                                        
										}
									});
								});
                $(document).on('click', '.hiddenclose', function(){  
                  window.location.href="editeSubTasks.php" 
								});
                $(document).on('click', '.editeeok', function(){  
                  window.location.href="MySubTasks.php" 
								});
            </script>
             <!--end delete PM PMM-->
    <!-- Script select-->
    <script>
    $('#subTaskmanager').ready(function() {
           var Taskname = $('#Tasktm').attr("name"); 
          var  Taskmanager =  $('#subTaskmanager').val();
							$.ajax({
							url: "AjaxSubTasks.php",
							data: ({subject_id:Taskmanager,pj:Taskname}),
							dataType: "json",
							beforeSend: function() {
								$("#membersubtask").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#membersubtask").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});

							$('#Taskmanager').change(function() {
                var  Taskmanager =  $('#Taskmanager').val();
                var Taskname = $('#Tasktm').attr("name"); 
							$.ajax({
							url: "AjaxSubTasks.php",
              data: ({subject_id:Taskmanager,pj:Taskname}),
							dataType: "json",
							beforeSend: function() {
								$("#membersubtask").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#membersubtask").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});
								$('#Taskmanager').ready(function() {
								MemberProjectID = $('#Taskmanager').val();
									$.ajax({
										url: "AjaxSubTasks.php",
										data:({subject_id: MemberProjectID,}),
										dataType: "json",
										beforeSend: function() {
											$("#membersubtask").html("");
										},
										success: function(json){
											$("#membersubtask").html("");
											$.each(json, function(index, value) {
												$("#membersubtask").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
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
        var fixmin = $('#slidprogress').attr("data-from");
       $("#slidprogress").ionRangeSlider({
        from_min: fixmin  
    });
    </script>
  </body>
</html>
<?php } ?>