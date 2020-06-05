<?php 
  session_start();
$isTouch = isset( $_SESSION["idtasks"] );
	if($isTouch==null){
		 echo '<script>window.location.href="index.php"</script>';
	}
	else{
       $idtasks= $_SESSION["idtasks"];
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
    
    <title>รายละเอียดงาน || PROJECT MANAGEMENT</title>
    
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
    <link rel="stylesheet" href="global/vendor/blueimp-file-upload/jquery.fileupload.css">
    <link rel="stylesheet" href="global/vendor/dropify/dropify.css">
    <link rel="stylesheet" href="global/vendor/summernote/summernote.css">
    <link rel="stylesheet" href="assets/examples/css/pages/project.css">
    <link rel="stylesheet" href="global/vendor/aspieprogress/asPieProgress.css">
    <link rel="stylesheet" href="assets/examples/css/charts/pie-progress.css">
    <link rel="stylesheet" href="assets/examples/css/uikit/images.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.css">
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
  <body class="animsition page-project">
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
          $sql = "SELECT * FROM taskprojects  where TaskPoID = '".$idtasks."'";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          while ($row = $stmt->fetch()) { 
        ?>
            <h1 class="page-title">รายละเอียดงาน : <?php echo $row['TaskPoName']?></h1>
         <?php }?>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="MyProject.php">โครงการทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item"><a href="MyTasks.php">งานทั้งหมดที่รับผิดชอบ</a></li>
              <li class="breadcrumb-item active">รายละเอียดงาน</li>
            </ol>
          </div>
          <div class="page-content container-fluid">
        <div class="row">
            <?php 
                include('Connnect.php');
                $sql = "SELECT * FROM taskprojects AS t1
                        INNER JOIN  projects AS  t2 ON (t1.ProjectID = t2.ProjectID) where t1.TaskPoID = '".$idtasks."'";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        while ($row = $stmt->fetch()) { 
            ?>
          <div class="col-xxl-9 col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title project-title">
                  งาน : <?php echo $row['TaskPoName']; ?>
                </h4>
                <p class="card-text">
                  โครงการ : <?php echo $row['ProjectName']; ?>
                </p>
              </div>
              <div class="card-block">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="project-option-title">ความคืบหน้างาน</h4>
                        <div class="example mt-60">
                            <div class="pie-progress pie-progress-lg" data-plugin="pieProgress" data-barcolor="#4caf50"
                            data-size="200" data-barsize="8" data-goal="75" aria-valuenow="75" role="progressbar">
                                <div class="pie-progress-content">
                                    <div class="pie-progress-number"><?php echo $row['TaskPoProgress'];?>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="card-block">
                            <div class="media mt-0 col-md-12">
                            <div class="pr-20 mt-5 text-left">
                                <span><h5>ความสำคัญงาน :
                                            <span class="font-size-16 ml-5">
                                            <?php if($row['TaskPoPiority']==='สูง'){ ?>
                                                <span class="badge badge-danger piority-reds badge-lg"><b><?php echo $row['TaskPoPiority']; ?></b></span>
                                            <?php 	}  else if($row['TaskPoPiority']=="กลาง"){?>
                                                <span class="badge badge-warning piority-warnings badge-lg"><b><?php echo $row['TaskPoPiority']; ?></b></span>
                                            <?php 	} else if($row['TaskPoPiority']=="ต่ำ"){ 	?>
                                                <span class="badge badge-success piority-successs badge-lg"><b><?php echo $row['TaskPoPiority']; ?></b></span>
                                            <?php } ?>
                                            </span>
                                    </h5>
                                </span>
                            </div>
                            </div>
                            <div class="media mt-15 col-md-12">
                            <div class=" text-left">
                                <span><h5>สถานะงาน   : <span class="font-size-14 ml-10"><?php echo $row['TaskPoStatus']; ?></span></h5></span>
                            </div>
                            </div>
                            <div class="media mt-10 col-md-12">
                            <div class="ml-3 text-left">
                                <span><h5>วันที่สร้าง : <a class="media-content  ml-10"><?php echo date("d-m-Y", strtotime($row['TaskPoCreateDate']));?> </a></h5><span>
                            </div>
                            </div>
                            <div class="media mt-10 col-md-12">
                            <div class="pr-20  text-left">
                                <span><h5>ระยะเวลาดำเนินงาน</h5> <span>
                            </div>
                            <div class="media-body">
                            </div>
                            </div>
                            <div class="media mt-10 col-md-12">
                            <div class="pr-20  text-left">
                                <span><h5>เริ่มวันที่ : <a class="media-content ml-15"><?php echo date("d-m-Y", strtotime($row['TaskPoStartDate']));?> </a></h5><span>
                            </div>
                            </div>
                            <div class="media col-md-12 mt-5">
                            <div class="text-left">
                                <span><h5>ถึงวันที่ : <a class="media-content ml-15"><?php echo date("d-m-Y", strtotime($row['TaskPoEndDate']));?> </a></h5><span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="card-block ">
                <h4 class="card-title">รายละเอียดงาน</h4>
                <p class="card-text"> <?php echo $row['TaskPoDetail']; ?></p>
              </div>
              <div class="card-block ">
                <h4 class="card-title"><i class="panel-title-icon icon md-comments" aria-hidden="true"></i>การกระทำล่าสุด</h4>
                        <div class="panel-activity panel-body h-300 w-1000" data-plugin="scrollable" style="padding: 25px;">
                            <div data-role="container">
                              <div data-role="content">
                                <ul class="list-group list-group-dividered list-group-full">
                                  <?php 
                                      $sqlActivity = "SELECT *  FROM activitiestaskproject AS log1
                                      INNER JOIN employee AS log2 ON (log1.AssignTaskPoID = log2.EmployeeID)
                                      WHERE log1.ActivitiesTaskPoID ='".$row['TaskPoID']."' ORDER BY log1.ActivitiesID DESC";
                                        
                                        $stmtActivity = $conn->prepare($sqlActivity);
                                        $stmtActivity->execute();
                                        while ($rowac = $stmtActivity->fetch()) {
                                  ?>
                                  <li class="list-group-item">
                                    <div class="media"  style="padding:10px;">
                                      <div class="pr-20">
                                        <a class="avatar avatar-online" href="javascript:void(0)">
                                          <img src="assets/employee/<?php echo $rowac['EmployeePic']; ?>" alt="">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <small class="float-right">วันที่ <?php echo date("d-m-Y H:i:s", strtotime($rowac['ActivitiesDate']));?></small>
                                        <h5 class="mt-0 mb-5"><?php echo $rowac['ActivitiesName'];?></h5>
                                        <small>แก้ไขโดย <a href="javascript:void(0)" title=""><?php echo $rowac['EmployeeFullName']; ?></a></small>
                                      </div>
                                    </div>
                                  </li>
                                        <?php }?>
                                </ul>
                              </div>
                            </div>
                          </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-block">
                  <h4 class="project-option-title">หัวหน้างาน</h4>
                    <?php  
                        $sqlpm = "SELECT *  FROM assigntaskproject AS d1 
                        INNER JOIN taskprojects  AS d2 ON  (d1.TaskPoID = d2.TaskPoID) 
                        INNER JOIN memberproject  AS d4 ON  (d1.MemberProjectID = d4.MemberProjectID) 
                        INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                        WHERE d1.TaskPoID ='".$row['TaskPoID']."' AND d1.AssignTaskPoPosition ='Task-Manager'";
                                
                        $stmtpm = $conn->prepare($sqlpm);
                        $stmtpm->execute();
                        while ($rowpm = $stmtpm->fetch()) {
                    ?>
                <div class="example text-center">
                    <img class="rounded-circle img-bordered img-bordered-primary" width="150" height="150" src="assets/employee/<?php echo $rowpm['EmployeePic']; ?>" alt="...">
                </div>
                <div class="media mt-15">
                    <div class=" text-right ml-3">
                        <span>ชื่อ - นามสกุล :  </span>
                    </div>
                    <div class="media-body ml-20">
                        <span class="font-size-16 ml-5"><?php echo $rowpm['EmployeeFullName']; ?></span>
                    </div>
                </div>
                <div class="media mt-15">
                    <div class=" text-right ml-9">
                        <span>ตำแหน่งงาน :  </span>
                    </div>
                    <div class="media-body ml-20">
                        <span class="font-size-16 ml-5"><?php echo $rowpm['EmployeePosition']; ?></span>
                    </div>
                </div>
                     <?php } ?>
              </div>
              <div class="card-block">
                <h4 class="project-option-title">สมาชิกงาน</h4>
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
                    <div class="row">
                        <div class="media mb-15">
                        <div class="pr-20 text-middle">
                            <a href="javascript:void(0)" class="avatar">
                            <img src="assets/employee/<?php echo $rowpm['EmployeePic']; ?>">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="mt-0 mb-5 font-size-16">ชื่อ - นามสกุล : <?php echo $rowpm['EmployeeFullName']; ?></h4>
                            <span>ตำแหน่งงาน : <?php echo $rowpm['EmployeePosition']; ?></span>
                        </div>
                        </div>
                    </div>
                     <?php } ?>
              </div>
            </div>
          </div>
            <?php }?>  
        </div>
            <!-- End Panel Basic -->
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
        <script src="global/vendor/jquery-ui/jquery-ui.js"></script>
        <script src="global/vendor/asprogress/jquery-asProgress.js"></script>
        <script src="global/vendor/blueimp-tmpl/tmpl.js"></script>
        <script src="global/vendor/blueimp-canvas-to-blob/canvas-to-blob.js"></script>
        <script src="global/vendor/blueimp-load-image/load-image.all.min.js"></script>
        <script src="global/vendor/blueimp-file-upload/jquery.fileupload.js"></script>
        <script src="global/vendor/blueimp-file-upload/jquery.fileupload-process.js"></script>
        <script src="global/vendor/blueimp-file-upload/jquery.fileupload-image.js"></script>
        <script src="global/vendor/blueimp-file-upload/jquery.fileupload-audio.js"></script>
        <script src="global/vendor/blueimp-file-upload/jquery.fileupload-video.js"></script>
        <script src="global/vendor/blueimp-file-upload/jquery.fileupload-validate.js"></script>
        <script src="global/vendor/blueimp-file-upload/jquery.fileupload-ui.js"></script>
        <script src="global/vendor/summernote/summernote.min.js"></script>
        <script src="global/vendor/aspieprogress/jquery-asPieProgress.js"></script>
    
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
        <script src="global/js/Plugin/summernote.js"></script>
        <script src="assets/examples/js/pages/project.js"></script>
        <script src="global/js/Plugin/aspieprogress.js"></script>
        <script src="assets/examples/js/charts/pie-progress.js"></script>
  </body>
</html>
<?php } ?>