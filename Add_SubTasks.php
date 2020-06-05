<?php 
  session_start();
$isTouch = isset( $_SESSION["addsubtasks"] );
	if($isTouch==null){
		 echo '<script>window.location.href="index.php"</script>';
	}
	else{
       $addsubtasks= $_SESSION["addsubtasks"];
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
    
    <title>เพิ่มงานย่อย || PROJECT MANAGEMENT</title>
    
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
          $sql = " SELECT * FROM  taskprojects AS  t2  where t2.TaskPoID = '".$addsubtasks."'";
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
            <h1 class="page-title">เพิ่มงานย่อย : <?php echo $row['TaskPoName']?></h1>
         <?php }?>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="MyProject.php">โครงการทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item"><a href="MyTasks.php">งานทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item"><a href="MySubTasks.php">งานย่อยทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item active">เพิ่มงานย่อย</li>
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
                         <div class="row form-group">
												<div class="col-lg-6">
													 <h4>ชื่องานย่อย</h4> 
													<input type="text" name="TaskName" id="TaskName" class="form-control"  value="" required/>
                                                </div>
                                                <div class="col-lg-6">
                                                     <h4>ความสำคัญงานย่อย</h4> 
                                                             <select class="form-control" name="TaskPiority">
																<option value="สูง" >สูง</option>
																<option value="กลาง">กลาง</option>
																<option value="ต่ำ">ต่ำ</option>
															</select>
												</div>  
                         </div>
                      
											<div class="row form-group">
												<div class="col-lg-12">
													<h4>รายละเอียดงานย่อย</h4> 
													<textarea class="form-control" rows="5" id="TaskDetail" name="TaskDetail"  value="" required></textarea>
												</div>
                      </div>

                      <div class="row form-group">
												<div class="col-lg-5">
													<h4>สถานะงานย่อย</h4> 
													<select class="form-control" name="Taskstatus" >
																<option value="กำลังดำเนินการ" >กำลังดำเนินการ</option>
																<option value="อยู่ระหว่างพักโครงการ" >อยู่ระหว่างพักโครงการ</option>
                                <option value="ดำเนินการเสร็จสิ้น" >ดำเนินการเสร็จสิ้น</option>
                                <option value="ยังไม่เริ่มโครงการ" >ยังไม่เริ่มโครงการ</option>
																<option value="ยกเลิกโครงการ"  >ยกเลิกโครงการ</option>
															</select>
												</div>
												<div class="mb-md hidden-lg hidden-xl"></div>
                         <div class="col-lg-7">
                           <h4>ระยะเวลาดำเนินงาน</h4> 
                                                <div class="example" style="margin-top: 0px;">
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
													<h4>น้ำหนักงานย่อย (%)</h4> 
                          <?php 
                              $totalEmphasis=0;
                              $sqlEmphasis = "SELECT TaskEmphasis FROM task where TaskPoID = '".$addsubtasks."'  AND TaskSituation='proceed'";
                                  $stmtEmphasis = $conn->prepare($sqlEmphasis);
                                  $stmtEmphasis->execute();
                                      while ($rowEmphasis = $stmtEmphasis->fetch()) 
                                        { 
                                          $totalEmphasis+= $rowEmphasis["TaskEmphasis"];
                                        }
                              $totalEmphasis =100-$totalEmphasis ;
                          ?>
                           <input type="text" id="irs_1"  name="TaskEmphasis" data-plugin="ionRangeSlider" data-min=0 data-max=<?php echo $totalEmphasis;?> data-from=1 />
                     	</div> 
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12"><h4>หัวหน้างานย่อย</h4> 
                        <select id="Taskmanager" name="Taskmanager" class="form-control">
                          <?php  
                              $sqlpm = "SELECT *  FROM  assigntaskproject AS sub1
                              INNER JOIN memberproject  AS sub2  ON (sub1.MemberProjectID = sub2.MemberProjectID)
                              INNER JOIN employee  AS sub3 ON  (sub2.EmployeeID = sub3.EmployeeID) 
                              WHERE sub1.TaskPoID ='".$addsubtasks."'";
                                $stmtpm = $conn->prepare($sqlpm);
                                $stmtpm->execute();
                                while ($rowpm = $stmtpm->fetch()) {
                          ?>
                          
                          <option id="Tasktm" name="<?php echo $addsubtasks; ?>" value="<?php echo $rowpm['AssignTaskPoID']; ?>"><?php echo $rowpm['EmployeeFullName']; ?></option>
                          <?php } ?>
                          </select>
                                </div>
                                </div>
                       <div class="row form-group">
                          <div class="col-lg-12"><h4>สมาชิกงานย่อย</h4> 
                          <div class="example">
                          <div class="select2-primary">
                            <select class="form-control"  id="selTypeRiskAllaa" name="Taskmember[]"  multiple="multiple" data-plugin="select2" > </select>
                          </div>
                        </div>
                        </div>
											</div>
                        <center>
                        <div class="col-lg-5">
                        <button type="button" class="btn btn-danger waves-effect waves-classic"><a href="./MySubTasks.php" class="cancel-btn text-white">ยกเลิก</a></button>
                        <button type="submit" class="btn btn-success waves-effect waves-classic" name="submit" value="บันทึกข้อมูล">บันทึกข้อมูล</button>
                        </div>
                       </center>
                </form>

                 <!-- Modaldelete ok -->
                 <div class="modal fade example-modal-sm show modal-success" id="madaldeleteok" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>เพิ่มข้อมูลงานย่อยสำเร็จ!!!</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-success btn-floating btn-lg hideok" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-check" aria-hidden="true" style="font-size: 38px;"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Modaldelete pk-->

                
                 <!-- Modaldelete ok -->
                <div class="modal fade example-modal-sm show modal-success" id="madaldeletefalse" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1" style="padding-right: 10%;padding-left: 10%;">
                    <div class="modal-dialog modal-simple modal-sm modal-center">
                        <div class="modal-content">
                        <div class="modal-header madal-title">
                            <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
                        </div>
                        <div class="modal-body">
                                  <p>   <center><h3>เพิ่มข้อมูลงานย่อยไม่สำเร็จ!!!</h3></center></p>
                        </div>
                        <div class="modal-footer modal-center">
                            <button type="button" class="btn btn-success btn-floating btn-lg hidefalse" data-dismiss="modal" style="font-size: 25px;"><i class="icon fa-close" aria-hidden="true" style="font-size: 38px;"></i></button>
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
                    $TaskName = $_POST['TaskName'];
                    $TaskDetail = $_POST['TaskDetail'];
                    $Taskstatus = $_POST['Taskstatus'];
                    $TaskPiority = $_POST['TaskPiority'];
                    $TaskEmphasis = $_POST['TaskEmphasis'];
                    $newStartDate = date("Y-m-d", strtotime( $_POST['start']));
                    $newendDate = date("Y-m-d", strtotime( $_POST['end']));
                    $date = date("Y-m-d", strtotime($date));
                    $progress =0;
                    $Taskmanager = $_POST['Taskmanager']; 
                    $Taskmember = $_POST['Taskmember'];
                    $TaskSituation="proceed";
                    $stpo = $conn->query("SELECT count(TaskID) as countId FROM task");
											$rowpo = $stpo->fetch(); 
                                            $poid = $rowpo['countId']+1;
                                            $poid = "SubTask".$poid ;
                                           
                    $datapro = [
                        'TaskPoID' =>  $poid ,
                        'TaskPoName' => $TaskName,
                        'TaskPoStatus' => $Taskstatus,
                        'TaskPoPiority' => $TaskPiority,
                        'TaskPoProgress' => $progress,
                        'TaskEmphasis' => $TaskEmphasis,
                        'TaskPoDetail' => $TaskDetail,
                        'TaskPoStartDate' => $newStartDate,
                        'TaskPoEndDate' => $newendDate ,
                        'TaskPoCreateDate' => $date,
                        'TaskSituation' => $TaskSituation,
                        'ProjectID' => $addsubtasks
                    ];
                    $sqlpro = "INSERT INTO task (TaskID,TaskName,TaskStatus,TaskPiority,TaskProgress,TaskEmphasis,TaskDetail,TaskStartDate,TaskEndDate,TaskCreateDate,TaskSituation,TaskPoID) 
                    VALUES (:TaskPoID, :TaskPoName, :TaskPoStatus, :TaskPoPiority, :TaskPoProgress,:TaskEmphasis, :TaskPoDetail, :TaskPoStartDate, :TaskPoEndDate, :TaskPoCreateDate,:TaskSituation, :ProjectID)";
                    $stmtpro= $conn->prepare($sqlpro);
                    if ($stmtpro->execute($datapro)) { 
                            if($Taskmanager !=null){
                                $PositionPM = "Task-SubManager";
                                $datapm = [
                                    'MemberProjectID' => $Taskmanager,
                                    'AssignTaskPoPosition' => $PositionPM,
                                    'TaskPoID' => $poid
                                ];
                                $sqlpm = "INSERT INTO assigntask (AssignTaskPosition, AssignTaskPoID, TaskID) 
                                VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                                $stmtpm= $conn->prepare($sqlpm);
                                $stmtpm->execute($datapm);
                            }
                             if($Taskmember !=null){
                                    $countarray = count($Taskmember);
                                    for($i=0; $i<$countarray; $i++){
                                        $PositionPM = "Task-SubMember";
                                        $datapmm = [
                                            'MemberProjectID' =>$Taskmember[$i],
                                            'AssignTaskPoPosition' => $PositionPM,
                                            'TaskPoID' => $poid
                                        ];
                                        $sqlpmm = "INSERT INTO assigntask (AssignTaskPosition, AssignTaskPoID, TaskID) 
                                        VALUES (:AssignTaskPoPosition, :MemberProjectID, :TaskPoID)";
                                        $stmtpm= $conn->prepare($sqlpmm);
                                        $stmtpm->execute($datapmm);
                                      } 
                                     } 
                       
                       $Action = "งานย่อย :".$TaskName." ถูกสร้างขึน" ;
                         $dataActi = [
                           'ActivitiesName' =>$Action,
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
                              $( "#madaldeleteok" ).modal('show');
                              $(".select2-primary").css("position","fixed");  
                              $(".select2-primary").css("width","100%");  
                            });
                          </script>
                       <?php
                     }
                    else{
                        ?>
                           <script type="text/javascript">
                            $(document).ready(function() {
                              $( "#madaldeletefalse" ).modal('show');
                            });
                          </script>
                        <?php
                    } 
                }
            
            ?>
    <!-- script modal-->
    <script>
           $(document).on('click', '.hideok', function(){  
                  window.location.href="MySubTasks.php" 
								});
                $(document).on('click', '.hidefalse', function(){  
                  window.location.href="Add_SubTasks.php" 
								});
    </script>
      <!-- End script modal-->
    <!-- Script select-->
    <script>
    $('#Taskmanager').ready(function() {
           var Taskname = $('#Tasktm').attr("name"); 
          var  Taskmanager =  $('#Taskmanager').val();
							$.ajax({
							url: "AjaxSubTasks.php",
							data: ({subject_id:Taskmanager,pj:Taskname}),
							dataType: "json",
							beforeSend: function() {
								$("#selTypeRiskAllaa").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
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
								$("#selTypeRiskAllaa").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});
								$('#selTypeRiskAll').ready(function() {
							var	MemberProjectID = $('#Taskmanager').val();
              var Taskname = $('#Tasktm').attr("name"); 
									$.ajax({
										url: "AjaxSubTasks.php",
										data:({subject_id: MemberProjectID,pj:Taskname}),
										dataType: "json",
										beforeSend: function() {
											$("#selTypeRiskAllaa").html("");
										},
										success: function(json){
											$("#selTypeRiskAllaa").html("");
											$.each(json, function(index, value) {
												$("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
											});
										}
									});
								});
    </script>
    <!-- End Script select-->
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
    <script src="global/vendor/formvalidation/formValidation.min.js"></script>
        <script src="global/vendor/formvalidation/framework/bootstrap4.min.js"></script>
        <script src="global/vendor/chartist/chartist.min.js"></script>
        <script src="global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
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
        <script src="global/vendor/typeahead-js/bloodhound.min.js"></script>
        <script src="global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <script src="global/vendor/webui-popover/jquery.webui-popover.min.js"></script>
        <script src="global/vendor/toolbar/jquery.toolbar.js"></script>
        <script src="global/vendor/asprogress/jquery-asProgress.js"></script>
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
        <script src="global/vendor/typeahead-js/bloodhound.min.js"></script>
        <script src="global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <script src=""></script>
    
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
        <script src="global/js/Plugin/jquery-knob.js"></script>
        <script src="assets/examples/js/forms/validation.js"></script>
        <script>
        var fixmin = $('#irs_1').attr("data-from");
        $("#irs_1").ionRangeSlider({
          from_min: fixmin  
          });
       </script>
  </body>
</html>
<?php } ?>