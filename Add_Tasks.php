<?php 
  session_start();
$isTouch = isset( $_SESSION["addtasks"] );
	if($isTouch==null){
		 echo '<script>window.location.href="index.php"</script>';
	}
	else{
       $addtasks= $_SESSION["addtasks"];
       include('Connnect.php');
       date_default_timezone_set("Asia/Bangkok");
       $date= Date("d-m-Y");
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
    
    <title>เพิ่มงาน || PROJECT MANAGEMENT</title>
    
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
    <link rel="stylesheet" href="assets/examples/css/uikit/progress-bars.css">
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
        <link rel="stylesheet" href="global/vendor/formvalidation/formValidation.css">
        <link rel="stylesheet" href="assets/examples/css/forms/validation.css">
    

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
        <?php 
          include('Connnect.php');
          $sql = " SELECT * FROM  projects AS  t2  where t2.ProjectID = '".$addtasks."'";
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
            <h1 class="page-title">เพิ่มงาน : <?php echo $row['ProjectName']?></h1>
         <?php }?>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="MyProject.php">โครงการทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item"><a href="MyTasks.php">งานทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item active">เพิ่มงาน</li>
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
                <form action="" method="POST" autocomplete="on">
                         <div class="row form-group">
												<div class="col-lg-6">
													 <h4>ชื่องาน</h4> 
													<input type="text" name="TaskName" id="TaskName" class="form-control"  value="" required />
                                                </div>
                                                <div class="col-lg-6"><h4>ระยะเวลาดำเนินงาน</h4> 
                                                <div class="example">
                                                    <div class="input-daterange" data-plugin="datepicker" data-date-format="dd-mm-yyyy" data-date-end-date="+<?php echo $enddate; ?>" data-date-start-date="-<?php echo $startdate;?>"> 
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            เริ่มวันที่ : &nbsp;  <i class="icon md-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="datestart" name="start" value="<?php echo $date;?>"/>
                                                    </div>
                                                        <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            ถึงวันที่ : &nbsp; <i class="icon md-calendar" aria-hidden="true"> </i>
                                                        </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="dateend" name="end" value="<?php echo $date;?>" />
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                         </div>
                      
											<div class="row form-group">
												<div class="col-lg-12">
													<h4>รายละเอียดงาน</h4> 
													<textarea class="form-control" rows="5" id="TaskDetail" name="TaskDetail"  value="" required></textarea>
												</div>
                      </div>

                      <div class="row form-group">
												<div class="col-lg-6">
													<h4>สถานะงาน</h4> 
													<select class="form-control" name="Taskstatus" >
																<option value="กำลังดำเนินการ" >กำลังดำเนินการ</option>
																<option value="อยู่ระหว่างพักโครงการ" >อยู่ระหว่างพักโครงการ</option>
                                	<option value="ดำเนินการเสร็จสิ้น" >ดำเนินการเสร็จสิ้น</option>
                                <option value="ยังไม่เริ่มโครงการ" >ยังไม่เริ่มโครงการ</option>
																<option value="ยกเลิกโครงการ"  >ยกเลิกโครงการ</option>
															</select>
												</div>
												<div class="mb-md hidden-lg hidden-xl"></div>	
												<div class="col-lg-6">
                          <h4>ความสำคัญงาน</h4> 
                            <select class="form-control" name="TaskPiority">
																<option value="สูง" >สูง</option>
																<option value="กลาง">กลาง</option>
																<option value="ต่ำ">ต่ำ</option>
															</select>
												</div>
                      </div>
                       <div class="row form-group">
                          <div class="col-lg-12">
													<h4>น้ำหนักงาน (%)</h4> 
                         
                          <?php 
                              $totalEmphasis=0;
                              $sqlEmphasis = "SELECT TaskPoEmphasis FROM taskprojects where ProjectID = '".$addtasks."'  AND TaskPoSituation='proceed'";
                                  $stmtEmphasis = $conn->prepare($sqlEmphasis);
                                  $stmtEmphasis->execute();
                                      while ($rowEmphasis = $stmtEmphasis->fetch()) 
                                        { 
                                          $totalEmphasis+= $rowEmphasis["TaskPoEmphasis"];
                                        }
                              $totalEmphasis =100-$totalEmphasis ;
                          ?>
                            <input type="text" id="irs_1"  name="TaskEmphasis" data-plugin="ionRangeSlider" data-min=0 data-max=<?php echo $totalEmphasis;?> data-from=1 />
                         </div>
                      </div>
                    <div class="row form-group">
                        <div class="col-lg-12"><h4>หัวหน้างาน</h4> 
                        <select id="Taskmanager" name="Taskmanager" class="form-control">
                          <?php  
                              $sqlpm = "SELECT *  FROM  memberproject  AS d4 
                              INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                              WHERE d4.ProjectID ='".$addtasks."'";
                                $stmtpm = $conn->prepare($sqlpm);
                                $stmtpm->execute();
                                while ($rowpm = $stmtpm->fetch()) {
                          ?>
                          
                          <option id="Tasktm" name="<?php echo $rowpm['ProjectID']; ?>" value="<?php echo $rowpm['MemberProjectID']; ?>"><?php echo $rowpm['EmployeeFullName']; ?></option>
                          <?php } ?>
                          </select>
                                </div>
                                </div>
                       <div class="row form-group">
                          <div class="col-lg-12"><h4>สมาชิกงาน</h4> 
                          <div class="select2-success">
                            <select class="form-control hideforms"  id="selTypeRiskAllaa" name="Taskmember[]"  multiple data-plugin="select2" aria-hidden="true" style="overflow:hidden;" > </select>
                          </div>
                        </div>
											</div>
                        <center>
                        <div class="col-lg-5">
                        <button type="button" class="btn btn-danger waves-effect waves-classic"><a href="./MyTasks.php" class="cancel-btn text-white">ยกเลิก</a></button>
                        <button type="submit" class="btn btn-success waves-effect waves-classic" name="submit" value="บันทึกข้อมูล">บันทึกข้อมูล</button>
                        </div>
                       </center>
                </form>

                 <!-- Modaldelete ok -->
                <div class="modal fade example-modal-sm show modal-success" id="addTasksuccess" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>เพิ่มข้อมูลงานสำเร็จ</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-success btn-floating btn-lg addTasksuccessok" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Modaldelete pk-->

                
                 <!-- Modaldelete ok -->
                 <div class="modal fade" id="addTasksuccessfalse" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-simple modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                            <center><h3>เพิ่มข้อมูลงานไม่สำเร็จ</h3></center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-pure hideok" data-dismiss="modal">ปิดหน้านี้</button>
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
           
                if(isset( $_POST["submit"] )){
                    $TaskName = $_POST['TaskName'];
                    $TaskDetail = $_POST['TaskDetail'];
                    $Taskstatus = $_POST['Taskstatus'];
                    $TaskPiority = $_POST['TaskPiority'];
                    $TaskEmphasis  = $_POST['TaskEmphasis'];
                    $newStartDate = date("Y-m-d", strtotime( $_POST['start']));
                    $newendDate = date("Y-m-d", strtotime( $_POST['end']));
                    $date = date("Y-m-d", strtotime($date));
                    $progress =0.00;
                    $TaskPoSituation = "proceed";
                    $Taskmanager = $_POST['Taskmanager']; 
                    $Taskmember = $_POST['Taskmember'];

                    $stpo = $conn->query("SELECT count(TaskPoID) as countId FROM taskprojects");
											$rowpo = $stpo->fetch(); 
                            $poid = $rowpo['countId']+1;
                            $poid = "Task".$poid ;
              

                    $datapro = [
                        'TaskPoID' =>  $poid ,
                        'TaskPoName' => $TaskName,
                        'TaskPoStatus' => $Taskstatus,
                        'TaskPoPiority' => $TaskPiority,
                        'TaskPoProgress' => $progress,
                        'TaskPoEmphasis' => $TaskEmphasis,
                        'TaskPoDetail' => $TaskDetail,
                        'TaskPoStartDate' => $newStartDate,
                        'TaskPoEndDate' => $newendDate ,
                        'TaskPoCreateDate' => $date,
                        'TaskPoSituation' =>$TaskPoSituation,
                        'ProjectID' => $addtasks
                    ];
                    $sqlpro = "INSERT INTO taskprojects (TaskPoID,TaskPoName,TaskPoStatus,TaskPoPiority,TaskPoProgress,TaskPoEmphasis,TaskPoDetail,TaskPoStartDate,TaskPoEndDate,TaskPoCreateDate,TaskPoSituation,ProjectID) 
                    VALUES (:TaskPoID, :TaskPoName, :TaskPoStatus, :TaskPoPiority, :TaskPoProgress,:TaskPoEmphasis, :TaskPoDetail, :TaskPoStartDate, :TaskPoEndDate, :TaskPoCreateDate,:TaskPoSituation, :ProjectID)";
                    $stmtpro= $conn->prepare($sqlpro);
                    if ($stmtpro->execute($datapro)) { 
                            if($Taskmanager !=null){
                                $PositionPM = "Task-Manager";
                                $datapm = [
                                    'MemberProjectID' => $Taskmanager,
                                    'AssignTaskPoPosition' => $PositionPM,
                                    'TaskPoID' => $poid
                                ];
                                $sqlpm = "INSERT INTO assigntaskproject (AssignTaskPoPosition, MemberProjectID, TaskPoID) VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                                $stmtpm= $conn->prepare($sqlpm);
                                $stmtpm->execute($datapm);
                            }
                             if($Taskmember !=null){
                                    $Position = "Task-Member";
                                    $countarray = count($Taskmember);
                                    for($i=0; $i<$countarray; $i++){
                                        $PositionPM = "Task-Member";
                                        $datapmm = [
                                            'MemberProjectID' =>$Taskmember[$i],
                                            'AssignTaskPoPosition' => $PositionPM,
                                            'TaskPoID' => $poid
                                        ];
                                        $sqlpmm = "INSERT INTO assigntaskproject (AssignTaskPoPosition, MemberProjectID, TaskPoID) VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                                        $stmtpm= $conn->prepare($sqlpmm);
                                        $stmtpm->execute($datapmm);
                                        }
                            } 
                            $dataActi = [
                              'ActivitiesName' =>"งาน : ".$TaskName." ถูกสร้างขึน",
                              'ActivitiesDate' =>  $dateActi,
                              'ActivitiesTaskPoID' =>$poid,
                              'AssignTaskPoID' => $_SESSION["Employee"]
                          ];
                          $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                           VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                          $stmtpm= $conn->prepare($sqlActi);
                          $stmtpm->execute($dataActi);  
                        ?>
                            
                          <script type="text/javascript">
                      	$(document).ready(function() {
                          $( "#addTasksuccess" ).modal('show');
                          $(".select2-success").css("position","fixed");  
                          $(".select2-success").css("width","100%");  
                        });
                      </script>
                          
                     <?php 
                  }  
                    else{
                        ?>
                        <script>
                       $(function() {
                            $( "#addTasksuccessfalse" ).dialog();
                            $(".select2-success").css("position","fixed");  
                          $(".select2-success").css("width","100%");  
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
    <!-- script modal-->
    <script>
           $(document).on('click', '.addTasksuccessok', function(){  
                  window.location.href="MyTasks.php" 
								});
    </script>
      <!-- End script modal-->
    <!-- Script select-->
    <script>
    $('#Taskmanager').ready(function() {
           var Taskname = $('#Tasktm').attr("name"); 
          var  Taskmanager =  $('#Taskmanager').val();
							$.ajax({
							url: "view_member.php",
							data: ({subject_id:Taskmanager,pj:Taskname,checkmm:"Checkmm"}),
							dataType: "json",
							beforeSend: function() {
								$("#selTypeRiskAllaa").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + '" hidden>' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});

							$('#Taskmanager').change(function() {
                var  Taskmanager =  $('#Taskmanager').val();
                var Taskname = $('#Tasktm').attr("name"); 
							$.ajax({
							url: "view_member.php",
              data: ({subject_id:Taskmanager,pj:Taskname,checkmm:"Checkmm"}),
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
								
    </script>
    <!-- End Script select-->
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
         <script src="global/vendor/formvalidation/formValidation.min.js"></script>
        <script src="global/vendor/formvalidation/framework/bootstrap4.min.js"></script>
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
        <script src="assets/examples/js/forms/validation.js"></script>
        <script src="global/js/Plugin/matchheight.js"></script>
        <script src="global/js/Plugin/jvectormap.js"></script>
        <script src="global/js/Plugin/peity.js"></script>
        <script src="global/js/Plugin/matchheight.js"></script>
        <script src="global/js/Plugin/jvectormap.js"></script>
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
        var fixmin = $('#irs_1').attr("data-from");
       $("#irs_1").ionRangeSlider({
        from_min: fixmin  
    });
    </script>
  </body>
</html>
<?php } ?>