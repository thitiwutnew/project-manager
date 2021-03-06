<?php
  session_start();
  $isset = isset($_SESSION["ProjectIDview"]);
	if($isset==null){
    echo '<script>window.location.href="index.php"</script>';
  }
	else{
    $projectid = $_SESSION["ProjectIDview"];
    $userid = $_SESSION["Employee"];   
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
    
    <title>ดูรายละเอียดโครงการ || PROJECT MANAGEMENT</title>
    
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
        <link rel="stylesheet" href="global/vendor/blueimp-file-upload/jquery.fileupload.css">
        <link rel="stylesheet" href="global/vendor/dropify/dropify.css">
        <link rel="stylesheet" href="global/vendor/summernote/summernote.css">
        <link rel="stylesheet" href="assets/examples/css/pages/project.css">
        <link rel="stylesheet" href="global/vendor/aspieprogress/asPieProgress.css">
        <link rel="stylesheet" href="assets/examples/css/charts/pie-progress.css">
        <link rel="stylesheet" href="assets/examples/css/uikit/progress-bars.css">
        <link rel="stylesheet" href="assets/examples/css/uikit/icon.css">
    
    <!-- Fonts -->
        <link rel="stylesheet" href="global/fonts/octicons/octicons.css">
        <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  <style type="text/css">
    div.scroll { 
    height: 180px; 
    width: 1010px; 
    overflow: auto;
    scrollbar-face-color:#FB7800; scrollbar-track-color:#FFE8EF; scrollbar-arrow-color:#F4346F; scrollbar-shadow-color:#F34077; scrollbar-dark-shadow-color:#F33771; scrollbar-highlight-color:#FFFFFF
    } 
  </style>
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
           
                  $stproall = $conn->query("SELECT count(ProjectID) as countId FROM projects WHERE ProjectSituation = 'proceed' ");
                  $rowproall = $stproall->fetch();
                  $countproall = $rowproall['countId'];
                ?>
            </div>
        </div>
      </div>
      </div>  
    <?php
        $stpo = $conn->query("SELECT * FROM projects WHERE ProjectID = '".$projectid."' ");
        while ($rowpo = $stpo->fetch()) {
            if($rowpo['ProjectStatus'] == 'ยังไม่เริ่มโครงการ'){$textprocedd = '<span class="badge badge-dark mr-5 mb-5">NotStart</span>';}
            else if($rowpo['ProjectStatus'] == 'อยู่ระหว่างพักโครงการ'){$textprocedd = '<span class="badge badge-warning mr-5 mb-5">Break</span>';}
            else if($rowpo['ProjectStatus'] == 'กำลังดำเนินการ'){$textprocedd = '<span class="badge badge-primary mr-5 mb-5">Proceed</span>';}
            else if($rowpo['ProjectStatus'] == 'ยกเลิกโครงการ'){$textprocedd = '<span class="badge badge-danger mr-5 mb-5">Cancle</span>';}
            else if($rowpo['ProjectStatus'] == 'ดำเนินการเสร็จสิ้น'){$textprocedd = '<span class="badge badge-success mr-5 mb-5">Success</span>';}
    ?>

    <div class="page">
    <div class="page-header">
            <h1 class="page-title">รายละเอียดโครงการ</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="Project_Total.php">โครงการทั้งหมด</a></li>
              <li class="breadcrumb-item active">รายละเอียดโครงการ</li>
            </ol>
          </div>
      <div class="page-content">
        <div class="row">
          <div class="col-xxl-9 col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title project-title">
                <h2><?php echo $rowpo['ProjectName'].'&nbsp;'.'&nbsp;'.'&nbsp;'.$textprocedd; ?></h2>
                  <!-- <btn class="btn btn-pure btn-default icon md-edit btn-edit"></btn> -->                
                </h3>
              </div>
              <div class="card-block">

              <h2 class="card-title project-title">
              <i class="icon oi-info" aria-hidden="true"></i>
                  ข้อมูลของโครงการ
                </h2>         
                <div class="row row-lg">
              <div class="col-lg-8">
              <div class="example-wrap m-md-0">
              <div class="example col-xs-4">
                <div class="media mt-4">
                  <div class="pr-10 text-middle">
                    <span><h4 class="card-title">สถานะของโครงการ : </h4></span>
                  </div>
                  <div class="media-body">     
                    <span class="font-size-16 ml-8"><?php echo $rowpo['ProjectStatus'] ?></span>
                  </div>
                </div>
                <div class="media mt-4">
                  <div class="pr-10 text-middle">
                    <span><h4 class="card-title">ความสำคัญของโครงการ :</h4></span>
                  </div>
                  <div class="media-body">     
                    <span class="font-size-16 ml-8"><?php echo $rowpo['ProjectPiority'] ?></span>
                  </div>
                </div>
                <div class="media mt-4">
                  <div class="pr-10 text-middle">
                    <span><h4 class="card-title">วันที่เริ่มโครงการ :</h4></span>
                  </div>
                  <div class="media-body">     
                  <?php
                     $datecreate = $rowpo['ProjectCreateDate'];
                     $CreateDate = date("d/m/Y", strtotime($datecreate));
                  ?>
                    <span class="font-size-16 ml-8"><?php echo $CreateDate ?></span>
                  </div>
                </div>
                <div class="media mt-4">
                  <div class="pr-10 text-middle">
                    <span><h4 class="card-title">ระยะเวลาของโครงการ :</h4></span>
                  </div>
                  <div class="media-body">     
                  <?php
                     $datestart = $rowpo['ProjectStartDate'];
                     $newStartDate = date("d/m/Y", strtotime($datestart));
                     $dateend = $rowpo['ProjectEndDate'];
                     $newEndDate = date("d/m/Y", strtotime($dateend));
                  ?>
                    <span class="font-size-16 ml-8"><?php echo $newStartDate.'  -  '.$newEndDate; ?></span>
                  </div>
                </div>  
               </div>   
              </div>
            </div>

            <div class="col-lg-3">
            <div class="example-wrap m-md-0">
              <div class="example col-xs-4">
              <?php
                    $stpogress = $conn->query("SELECT * FROM projects WHERE ProjectID = '".$projectid."' ");
                    while ($rowpogress = $stpogress->fetch()) {
                      $decimalprogress = number_format($rowpogress['ProjectProgress'],2);
                  ?>
                <br>
                <center><h4 class="project-option-title">ความคืบหน้าของโครงการ</h4></center>
                <div class="pie-progress pie-progress-md" data-plugin="pieProgress" data-barcolor="#4caf50" data-size="150"
                      data-barsize="18" data-goal="100" aria-valuenow="<?php echo $rowpogress['ProjectProgress'];?>" role="progressbar">
                      <div class="pie-progress-content">
                        <div class="pie-progress-number"><span class="font-size-26"><?php echo $decimalprogress.'%';?></span></div>
                        <!-- <div class="pie-progress-label">โดยรวม</div> -->
                      </div>
                </div>
                
                    <?php } ?>                
              <div class="example">
              
              </div>
              </div>
              </div>
            </div>

            </div> 
            
            <div class="col-xs-8">
              
              <div class="media mt-1">
                <div class="pr-10 text-middle">
                  <span><h4 class="card-title">รายละเอียดของโครงการ :</h4></span>
                </div>
                <div class="media-body col-lg-5">     
                  <span class="font-size-16 ml-8"><?php echo $rowpo['ProjectDetail'] ?></span>
                </div>
              </div>
             
            </div>

          </div>
              <!-- <div class="card-block ">
                <div class="project-controls clearfix"> -->
                <!-- input something -->
                <!-- </div>
                <h2 class="card-title">รายละเอียดของโครงการ</h2>
                <p class="card-text">
                  <?php echo $rowpo['ProjectDetail'] ?>
                </p>
              </div> -->
           <?php } ?>
              
              
           <div class="card-block project-comments">
           <h2 class="card-title"><i class="icon oi-history" aria-hidden="true"></i>กิจกรรม</h2>               
              <div class="panel-heading">
                <div class="panel-actions panel-actions-keep">
                  <a class="text-action" href="javascript:void(0)"></a>
                </div>
              </div>
              <div class="panel-body">
                <ul class="list-group list-group-full h-250" data-plugin="scrollable">
                  <div data-role="container">
                    <div data-role="content">
                      <?php
                        $stac = $conn->query("SELECT * FROM activitiestaskproject WHERE ActivitiesTaskPoID = '".$projectid."' ORDER BY ActivitiesDate DESC ");
                        while ($rowac = $stac->fetch()) {

                          $stmemlogg = $conn->query("SELECT * FROM employee WHERE EmployeeID = '".$rowac['AssignTaskPoID']."' ");
                          while ($rowmemlogg = $stmemlogg->fetch()) {
                      ?>
                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <span class="avatar avatar-online">
                              <img src="assets/employee/<?php echo $rowmemlogg['EmployeePic'] ?>" alt="">
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h5 class="list-group-item-heading mt-0 mb-5">
                              <small class="float-right"><?php echo "วันที่่"." ".$rowac['ActivitiesDate'] ?></small>
                              <?php 
                                  echo $rowac['ActivitiesName'];   
                              ?>
                            </h5>
                            <p class="list-group-item-text"><?php echo "แก้ไขโดย"." ".$rowmemlogg['EmployeeFullName'] ?></p>
                          </div>
                        </div>
                      </li>
                    <?php } }?>
                    </div>
                  </div>
                </ul>
              </div>
              
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-xl-4 col-lg-12">
            <div class="card">
                
              <div class="card-block">
              <h4 class="card-title">งานในโครงการ</h4>
                <p class="mb-10">
                <?php
                    $sttaskall = $conn->query("SELECT count(TaskPoID) as countId FROM taskprojects WHERE ProjectID = '".$projectid."' AND TaskPoSituation = 'proceed' ");
                    $rowtaskall = $sttaskall->fetch();
                    $counttaskall = $rowtaskall['countId'];
                ?>
                  <span class="float-right pl-10"><?php if($counttaskall != 0){echo $counttaskall;}else{echo "ไม่มีงานในโครงการนี้";} ?></span>
                  งานทั้งหมด
                </p>
                <p>
                <?php
                    $sttask = $conn->query("SELECT count(TaskPoID) as countId FROM taskprojects WHERE ((ProjectID = '".$projectid."' AND TaskPoSituation = 'proceed') AND (TaskPoStatus = 'ดำเนินการเสร็จสิ้น' OR TaskPoProgress = '100') )");
                    $rowtask = $sttask->fetch();
                    $counttask = $rowtask['countId'];
                ?>
                  <span class="float-right pl-10"><?php if($counttask != 0){echo $counttask;}else{echo "ไม่มีงานที่เสร็จ";} ?></span>
                  งานที่ดำเนินการเสร็จสิ้น
                </p>
                <!-- <div class="progress-label">50%</div> -->
                <?php 
                if($counttask != 0){
                  $countgen = ($counttask/$counttaskall)*100;
                  $countper = 100-$countgen;
                }else{$countper = "100";}
                ?>
                <!-- <div class="progress" data-labeltype="percentage" data-goal="-40" data-plugin="progress">
                            <div class="progress-bar" aria-valuemin="100" aria-valuemax="0" aria-valuenow="<?php echo $countper; ?>"
                              role="progressbar">
                              <span class="progress-label"></span>
                            </div>
                          </div> -->
                </div>
                
                
              <?php
                    $stjmanager = $conn->query("SELECT * FROM memberproject AS d1 INNER JOIN employee AS d2 ON (d1.EmployeeID = d2.EmployeeID) WHERE ProjectID = '".$projectid."' AND MemberProjectPosition = 'Project-Manager' ");
                    while ($rowjmana = $stjmanager->fetch()) {
              ?>
              <div class="card-block">
                <h4 class="project-option-title">หัวหน้าโครงการ</h4>
                <div class="media mt-0">
                  <div class="pr-20 text-middle">
                    <a href="javascript:void(0)" class="avatar">
                      <img src="assets/employee/<?php echo $rowjmana['EmployeePic'];?>">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="mt-0 mb-5 font-size-16"><?php echo $rowjmana['EmployeeFullName']; ?></h4>
                    <span><?php echo $rowjmana['EmployeePosition']; ?></span>
                  </div>
                </div>
              </div>
                <?php } ?>           
                <div class="card-block">
                <h4 class="project-option-title">สมาชิกโครงการ</h4>
                <?php
                    $stjmember = $conn->query("SELECT * FROM memberproject AS d1 INNER JOIN employee AS d2 ON (d1.EmployeeID = d2.EmployeeID) WHERE ProjectID = '".$projectid."' AND MemberProjectPosition = 'Project-Member' ");
                    while ($rowjmem = $stjmember->fetch()) {
                ?>
                <div class="media mt-0">
                  <div class="pr-20 text-middle">
                    <a href="javascript:void(0)" class="avatar">
                      <img src="assets/employee/<?php echo $rowjmem['EmployeePic'];?>">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="mt-0 mb-5 font-size-16"><?php echo $rowjmem['EmployeeFullName']; ?></h4>
                    <span><?php echo $rowjmem['EmployeePosition']; ?></span>
                  </div>
                </div>
                <?php } ?>          
              </div>
              <!-- <?php
                    $stpodate = $conn->query("SELECT * FROM projects WHERE ProjectID = '".$projectid."' ");
                    while ($rowpodate = $stpodate->fetch()) {
                ?>
              <div class="card-block project-dates">
              <h4 class="project-option-title">Dates</h4>
                <p class="mb-10">
                  <span>Created:</span>
                  <?php echo $rowpodate['ProjectCreateDate']; ?>
                </p>
                <p class="mb-10">
                  <span>DeadLine:</span>
                  <?php 
                  $datestart = $rowpodate['ProjectStartDate'];
                  $newStartDate = date("d/m/Y", strtotime($datestart));
                  $dateend = $rowpodate['ProjectEndDate'];
                  $newEndDate = date("d/m/Y", strtotime($dateend));
                  ?>
                  <?php echo $newStartDate .' -  '.$newEndDate ?>
                </p>
              </div>
              <?php } ?> -->
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="global/vendor/aspieprogress/jquery-asPieProgress.js"></script>
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
    <script src="global/js/Plugin/aspieprogress.js"></script>
        <script src="global/js/Plugin/asprogress.js"></script>
        <script src="global/js/Plugin/summernote.js"></script>
        <script src="assets/examples/js/charts/pie-progress.js"></script>
        <script src="assets/examples/js/pages/project.js"></script>
        <script src="assets/examples/js/uikit/progress-bars.js"></script>
    
  </body>
</html>
<?php } ?>