<?php 
  session_start();
$isTouch = isset( $_SESSION["ProjectID"] );
	if($isTouch==null){
		 echo '<script>window.location.href="main.php"</script>';
	}
	else{
        $checkstatus='';
       $ProjectID= $_SESSION["ProjectID"];
       if(isset( $_SESSION["status"])){ $checkstatus =$_SESSION["status"]; }
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
    
    <title>งานทั้งหมด || PROJECT MANAGEMENT</title>
    
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
    <link rel="stylesheet" href="global/vendor/Timeline/style.css" />
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
      <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="assets/js/controller/Task_Total.js"></script>
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
                    $idtasks='';
                    include('Connnect.php');
                    $sql = "SELECT * FROM projects where ProjectID = '".$ProjectID."'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    while ($row = $stmt->fetch()) { 
                      $idtasks= $row["ProjectID"]
                ?>
            <h1 class="page-title">โครงการ : <?php echo $row["ProjectName"];?></h1>
            <?php }?>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
              <li class="breadcrumb-item"><a href="Project_Total.php">โครงการทั้งหมด</a></li>
              <li class="breadcrumb-item active">งานทั้งหมด</li>
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
              <p>
                  <?php 
                      $totalEmphasis=0;
                      $sqlEmphasis = "SELECT TaskPoEmphasis FROM taskprojects where ProjectID = '".$ProjectID."'  AND TaskPoSituation='proceed'";
                      $stmtEmphasis = $conn->prepare($sqlEmphasis);
                      $stmtEmphasis->execute();
                          while ($rowEmphasis = $stmtEmphasis->fetch()) 
                             { 
                                $totalEmphasis+= $rowEmphasis["TaskPoEmphasis"];
                             }
                           $totalEmphasis =100-$totalEmphasis ;
                           if($totalEmphasis >0 && $checkstatus !="viewproject"){?>  <a href="configpage.php?addtasks=<?php echo  $idtasks;?>" style="color:#fff;" class="btn btn-primary">เพิ่มงาน  <i class="fa fa-plus"></i></a><?php }
                           else { if($checkstatus =="viewproject"){} else{?>  <button class="btn btn-danger">ไม่สามารถเพิ่มงานได้แล้ว</button><?php } }
                  ?>
              </p>
              <div class="example-wrap">
                  <div class="nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs nav-tabs-reverse" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active show" data-toggle="tab" href="#exampleTabsReverseOne" aria-controls="exampleTabsReverseOne" role="tab" aria-selected="true">แสดงงานทั้งหมด</a></li>
                      <li class="nav-item exampleTabsReverseTwo" role="presentation" style=""><a class="nav-link" data-toggle="tab" href="#exampleTabsReverseTwo" aria-controls="exampleTabsReverseTwo" role="tab" aria-selected="false">แสดงไทม์ไลน์</a></li>
                      <li class="dropdown nav-item" role="presentation" style="display: none;">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Dropdown </a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" data-toggle="tab" href="exampleTabsReverseOne" aria-controls="exampleTabsReverseOne" role="tab" style="display: none;">แสดงงานทั้งหมด</a>
                          <a class="dropdown-item" data-toggle="tab" href="#exampleTabsReverseTwo" aria-controls="exampleTabsReverseTwo" role="tab">แสดงไทม์ไลน์</a>
                        </div>
                      </li>
                    </ul>
                    <div class="tab-content pt-20">
                      <div class="tab-pane active show" id="exampleTabsReverseOne" role="tabpanel">
                      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ชื่องาน</th>
                      <th>สถานะ</th>
                      <th>ความคืบหน้า</th>
                      <th class="text-center">วันที่</th>
                      <th class="text-center">ความสำคัญ</th>
                      <th class="text-center">หัวหน้างาน</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                          $sql = "SELECT * FROM taskprojects where ProjectID = '".$ProjectID."' AND TaskPoSituation='proceed'";
                          $stmt = $conn->prepare($sql);
                          $stmt->execute();
                          while ($row = $stmt->fetch()) {
                      ?>
                    <tr>
					  	        <td>
                        <div class="imageWrapper">
                          <span>
                              <?php if($checkstatus =="viewproject"){?>
                                    <a href="configpage.php?TaskPoID=<?php echo $row['TaskPoID']; ?>&statustask=viewtask" class="btn-links text-title"  value="<?php echo $row['TaskPoID']; ?>" style="text-decoration: none;" ><?php echo $row['TaskPoName']; ?>  ( <?php echo $row['TaskPoEmphasis']; ?>% )</a>
                              <?php }
                              else{?>
                                    <a href="configpage.php?TaskPoID=<?php echo $row['TaskPoID']; ?>" class="btn-links text-title"  value="<?php echo $row['TaskPoID']; ?>" style="text-decoration: none;" ><?php echo $row['TaskPoName']; ?>  ( <?php echo $row['TaskPoEmphasis']; ?>% )</a>
                            <?php } ?>
                          </span>
                              <span class="cornerLink">
                                <?php if($checkstatus =="viewproject"){ ?>
                                          <a href="configpage.php?viewtaskss=<?php echo $row['TaskPoID'];?>" class="btn btn-info  btn-xs viewdata" name="ดูข้อมูล">ดูข้อมูล</a>
                                <?php } 
                                else {?>
                                          <a href="configpage.php?viewtasks=<?php echo $row['TaskPoID'];?>" class="btn btn-info  btn-xs viewdata" name="ดูข้อมูล">ดูข้อมูล</a>
                                          <a href="configpage.php?editetasks=<?php echo $row['TaskPoID'];?>"  class="btn btn-warning  btn-xs edite" id="<?php echo $row['TaskPoID']; ?>"  name="แก้ไขข้อมูล">แก้ไขข้อมูล</i></a>
                                          <a herf=""  class="btn btn-danger btn-xs delete" id="<?php echo $row['TaskPoID']; ?>"  name="<?php echo $row['TaskPoName']; ?>" data-target="#examplePositionCenter" data-toggle="modal">ลบข้อมูล</a>
                                <?php }?>
                          </span>
                        </div>
											</td>
											<td><p class="text-top"><?php echo $row['TaskPoStatus']; ?></p></td>
											<td class="text-center">
                          <?php 
                            if($row['TaskPoProgress']==0){
                              $percen =  $row['TaskPoProgress'].''."%"; 
                              ?>
                              <div class="progress progress-lg progress-half-rounded m-md">
                              <div class="progress-bar-success" role="progressbar" aria-valuenow="<?php echo $percen;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percen;?>; color: white;    margin-left: 45%;">
                              <?php 
                              echo $percen; 
                              ?>					
                              </div></div><?php
                            }
                              else{
                                $percen =  $row['TaskPoProgress'].''."%"; 
                                ?>
                                <div class="progress progress-lg progress-half-rounded m-md ">
                                <div class="progress-bar-success" role="progressbar" aria-valuenow="<?php echo $percen;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percen;?>; color: white;">
                                <?php 
                                echo $percen; 
                                ?>					
                                </div></div><?php 
                              }
                          ?>		
											</td>
									        <?php 
                            $taskStartDate = $row['TaskPoStartDate'];
                            $taskEndDate = $row['TaskPoEndDate'];
                            $newStartDate = date("d/m/Y", strtotime($taskStartDate));
                            $newEndDate = date("d/m/Y", strtotime($taskEndDate));
                          ?>
											<td class="text-center"><p class="text-top "><?php echo $newStartDate.' ถึง '.$newEndDate; ?></p></td>
											<td class="text-center">
                        <p class="text-top">
                          <?php 
                            if($row['TaskPoPiority']==='สูง'){ ?>
                                <span class="badge badge-danger badge-lg piority" role="progressbar"><?php echo $row['TaskPoPiority']; ?> </span>
                          <?php }
                            else if($row['TaskPoPiority']=="กลาง"){ ?>
                                <span class="badge badge-warning badge-lg piority" role="progressbar"><?php echo $row['TaskPoPiority']; ?> </span>
                          <?php }
                            else if($row['TaskPoPiority']=="ต่ำ"){ ?>
                                <span class="badge badge-success badge-lg piority" role="progressbar"><?php echo $row['TaskPoPiority']; ?> </span>
                          <?php } ?>
                        </p>
                      </td>
											<td class="text-center">
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
                          <span class="avatar avatar-online">
                            <img src="assets/employee/<?php echo $rowpm['EmployeePic']; ?>" style="width: 128px;" title="<?php echo $rowpm['EmployeeFullName']; ?>">
                          </span>
                          <?php }?>                  
											</td>
										</tr>
										<?php } ?>		
                  </tbody>
                </table>
                </div>
                <div class="tab-pane" id="exampleTabsReverseTwo" role="tabpanel">
                  <div id="gantt"></div>
                  <br>
                  <div class="text-center">  
                        <span class="badge" style="background-color:#100f5f;">&nbsp;&nbsp;&nbsp;</span> : ชื่องาน  
                        <span class="badge ml-10" style="background-color:#00ff3a;">&nbsp;&nbsp;&nbsp;</span> : ความคืบหน้างาน  
                        <span class="badge ml-10" style="background-color:#ff0202;">&nbsp;&nbsp;&nbsp;</span> : ความสำคัญ สูง   
                        <span class="badge ml-10" style="background-color:#fb8c00;">&nbsp;&nbsp;&nbsp;</span> : ความสำคัญ ปานกลาง  
                        <span class="badge ml-10" style="background-color:#007bff;">&nbsp;&nbsp;&nbsp;</span> : ความสำคัญ ต่ำ  
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
      <!-- Modaldelete -->
      <div class="modal fade modal-danger modal-md" id="madaldelete" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1">
          <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
              <div class="modal-header madal-title">
                <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
              </div>
              <div class="modal-body">
               <center> <h3>คุณแน่ใจต้องการที่จะลบงานนี้</h3></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-success deletetask">ยืนยัน</button>
              </div>
            </div>
          </div>
      </div>
      <!-- End Modaldelete -->
      <!-- Modaldelete ok -->
      <div class="modal fade modal-success" id="madaldeleteok" aria-hidden="true" aria-labelledby="examplePositionCenter"  role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-sm modal-center">
          <div class="modal-content">
            <div class="modal-header madal-title">
              <h4 class="modal-title modal-title-text">ข้อความแจ้งเตือน</h4>
            </div>
            <div class="modal-body">
               <p><center><h3>ลบข้อมูลงานสำเร็จ!!!</h3></center></p>
            </div>
            <div class="modal-footer modal-center">
              <button type="button" class="btn btn-success btn-floating btn-lg hideok" data-dismiss="modal" style="font-size: 25px;">
                <i class="icon fa-check" aria-hidden="true" style="font-size: 38px;"></i>
              </button>
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
              <p>   
                <center>
                  <h4>ยืนยันการออกจากระบบ</h4>
                </center>
              </p>
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
    <!-- function -->
  <script src="global/vendor/Timeline/jquery.fn.gantt.js?v=2.3.5"></script>
  <script type="text/javascript">
				jq12 = jQuery.noConflict(true);
  </script>
  <script>
      $(document).on('click', '.exampleTabsReverseTwo', function(){  
                jq12(document).ready(function (){
                  "use strict";
                var app = {};
                    app.months_json1 = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
                    var gantt_data1 = [
                    <?php  include('Connnect.php');
                                $sql = "SELECT * FROM taskprojects  where ProjectID = '".$ProjectID."' AND TaskPoSituation='proceed'";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                $count =0;
                                while ($row = $stmt->fetch()) {
                                  $count +=1;
                                      $start_date = $row['TaskPoStartDate'];
                                      $start_date = date_create($start_date);
                                      $start_date = date_format($start_date, 'd-m-Y');
                                      $start_date = strtotime($start_date);
                                      $start_date = $start_date * 1000;
                                      $end_date = $row['TaskPoEndDate'];
                                      $end_date = date_create($end_date);
                                      $end_date = date_format($end_date, 'd-m-Y');
                                      $end_date = strtotime($end_date);
                                      $end_date = $end_date * 1000;
                              ?>
                    { name: "<?php echo $count;?>. <?php echo $row['TaskPoName']?>",
                      desc: " ",
                      values: [{
                        from: <?php echo $start_date;?>,
                        to: <?php echo $end_date;?>,
                        label: "<?php echo $row['TaskPoName']?>", 
                        customClass: "ganttGreen"
                      }]
                    },<?php
                        $mindate ='';
                        $maxdate ='';
                        $sqlqq = "SELECT * FROM activitiestaskproject as t1
                             INNER JOIN task AS t2 ON (t1.ActivitiesTaskPoID = t2.TaskID)
                             INNER JOIN taskprojects AS t3 ON (t2.TaskPoID=t3.TaskPoID) 
                            WHERE t3.TaskPoID='".$row['TaskPoID']."' AND t1.ActivitiesName='แก้ไขความคืบหน้างานย่อย'
                             GROUP BY ActivitiesDate ASC LIMIT 1";
                        $stmtqq = $conn->prepare($sqlqq);
                        $stmtqq->execute();
                        while ($rowww = $stmtqq->fetch()) {
                           $mindate= $rowww['ActivitiesDate'];
                           } 
                            $sqlqqq = "SELECT * FROM activitiestaskproject as t1
                             INNER JOIN task AS t2 ON (t1.ActivitiesTaskPoID = t2.TaskID)
                             INNER JOIN taskprojects AS t3 ON (t2.TaskPoID=t3.TaskPoID) 
                            WHERE t3.TaskPoID='".$row['TaskPoID']."' AND t1.ActivitiesName='แก้ไขความคืบหน้างานย่อย'
                             GROUP BY ActivitiesDate DESC LIMIT 1";
                        $stmtqqq = $conn->prepare($sqlqqq);
                        $stmtqqq->execute();
                        while ($rowwww = $stmtqqq->fetch()) {
                           $maxdate = $rowwww['ActivitiesDate'];
                           } 
                           if($maxdate==null){
                            $sqlqqq = "SELECT * FROM activitiestaskproject 
                            WHERE ActivitiesTaskPoID='".$row['TaskPoID']."' AND ActivitiesName='แก้ไขความคืบหน้างาน'
                             GROUP BY ActivitiesDate DESC LIMIT 1";
                            $stmtqqq = $conn->prepare($sqlqqq);
                            $stmtqqq->execute();
                            while ($rowwww = $stmtqqq->fetch()) {
                              $maxdate = $rowwww['ActivitiesDate'];
                              } 
                          }
                          if( $mindate==null){
                            $sqlqq = "SELECT * FROM activitiestaskproject 
                            WHERE ActivitiesTaskPoID='".$row['TaskPoID']."' AND ActivitiesName='แก้ไขความคืบหน้างาน'
                            GROUP BY ActivitiesDate ASC LIMIT 1";
                            $stmtqq = $conn->prepare($sqlqq);
                            $stmtqq->execute();
                            while ($rowww = $stmtqq->fetch()) {
                                $mindate= $rowww['ActivitiesDate'];
                                } 
                          }
                             $start_dateqq =   $mindate;
                          $start_dateqq = date_create($start_dateqq);
                          $start_dateqq = date_format($start_dateqq, 'd-m-Y');
                          $start_dateqq = strtotime($start_dateqq);
                          $start_dateqq = $start_dateqq * 1000;
                          $end_dateqq =  $maxdate;
                          $end_dateqq = date_create($end_dateqq);
                          $end_dateqq = date_format($end_dateqq, 'd-m-Y');
                          $end_dateqq = strtotime($end_dateqq);
                          $end_dateqq = $end_dateqq * 1000;
                    ?>
                     { name: "ความคืบหน้างาน",
                      desc: " ",
                      values: [{
                        from: <?php echo $start_dateqq;?>,
                        to: <?php echo $end_dateqq;?>,
                        label: "<?php echo $row['TaskPoProgress']?>%", 
                        customClass: "gantttimeline"
                      }]
                    },
                    <?php 
                        $sqlqq = "SELECT * FROM task where TaskPoID = '".$row['TaskPoID']."' AND TaskSituation='proceed'";
                        $stmtqq = $conn->prepare($sqlqq);
                        $stmtqq->execute();
                        $countqq =0;
                        while ($rowww = $stmtqq->fetch()) {
                          $countqq +=1;
                          $colorsubtask='';
                          $start_dateqq = $rowww['TaskStartDate'];
                          $start_dateqq = date_create($start_dateqq);
                          $start_dateqq = date_format($start_dateqq, 'd-m-Y');
                          $start_dateqq = strtotime($start_dateqq);
                          $start_dateqq = $start_dateqq * 1000;
                          $end_dateqq = $rowww['TaskEndDate'];
                          $end_dateqq = date_create($end_dateqq);
                          $end_dateqq = date_format($end_dateqq, 'd-m-Y');
                          $end_dateqq = strtotime($end_dateqq);
                          $end_dateqq = $end_dateqq * 1000;
                    ?>
                    { name: " ",
                      desc: "<?php echo $count;?>.<?php echo $countqq;?> <?php echo $rowww['TaskName']?>",
                      values: [{
                        from: <?php echo $start_dateqq;?>,
                        to: <?php echo $end_dateqq;?>,
                        label: "งานย่อย : <?php echo $rowww['TaskName']?> ", 
                      <?php 
                              if($rowww['TaskPiority']=="สูง"){ $colorsubtask="ganttRed";}
                              if($rowww['TaskPiority']=="กลาง"){ $colorsubtask="ganttOrange";}
                              if($rowww['TaskPiority']=="ต่ำ"){ $colorsubtask="ganttBlue";}
                        ?>
                        customClass: "<?php echo $colorsubtask;?>"
                      }]
                    },
                    <?php
                        $mindate ='';
                        $maxdate ='';
                        $sqlminsubtask = "SELECT * FROM activitiestaskproject as t1
                             INNER JOIN task AS t2 ON (t1.ActivitiesTaskPoID = t2.TaskID)
                            WHERE t2.TaskID='".$rowww['TaskID']."' AND t1.ActivitiesName='แก้ไขความคืบหน้างานย่อย'
                             GROUP BY ActivitiesDate ASC LIMIT 1";
                        $stmtminsubtask = $conn->prepare($sqlminsubtask);
                        $stmtminsubtask->execute();
                        while ($rowmin= $stmtminsubtask->fetch()) {
                           $mindate= $rowmin['ActivitiesDate'];
                           } 
                            $sqlmaxsubtask = "SELECT * FROM activitiestaskproject as t1
                             INNER JOIN task AS t2 ON (t1.ActivitiesTaskPoID = t2.TaskID)
                            WHERE t2.TaskID='".$rowww['TaskID']."' AND t1.ActivitiesName='แก้ไขความคืบหน้างานย่อย'
                             GROUP BY ActivitiesDate DESC LIMIT 1";
                        $stmtmaxsubtask = $conn->prepare($sqlmaxsubtask);
                        $stmtmaxsubtask->execute();
                        while ($rowmax = $stmtmaxsubtask->fetch()) {
                           $maxdate = $rowmax['ActivitiesDate'];
                           } 
                             $start_datemin =   $mindate;
                          $start_datemin = date_create($start_datemin);
                          $start_datemin = date_format($start_datemin, 'd-m-Y');
                          $start_datemin = strtotime($start_datemin);
                          $start_datemin = $start_datemin * 1000;
                          $end_datemax =  $maxdate;
                          $end_datemax = date_create($end_datemax);
                          $end_datemax = date_format($end_datemax, 'd-m-Y');
                          $end_datemax = strtotime($end_datemax);
                          $end_datemax = $end_datemax * 1000;
                    
                          if($maxdate=='' && $mindate=='')
                            { ?>
                              { name: " ",
                                desc: "ไม่มีความคืบหน้า",
                                values: [{
                                  from: " ",
                                  to: " ",
                                  label: " ", 
                                  customClass: " "
                                }]
                              },
                        <?php 
                            }
                          else if($maxdate=='')
                             { ?>
                              { name: " ",
                                desc: "ความคืบหน้างาน",
                                values: [{
                                  from: <?php echo $start_datemin;?>,
                                  to: <?php echo $start_datemin;?>,
                                  label: "<?php echo $rowww['TaskProgress']?>%", 
                                  customClass: "gantttimeline"
                                }]
                              },
                      <?php }
                          else if($mindate=='')
                             { ?>
                              { name: " ",
                                desc: "ความคืบหน้างาน",
                                values: [{
                                  from: <?php echo $end_datemax;?>,
                                  to: <?php echo $end_datemax;?>,
                                  label: "<?php echo $rowww['TaskProgress']?>%", 
                                  customClass: "gantttimeline"
                                }]
                              },
                      <?php }
                          else{ ?>
                              { name: " ",
                                desc: "ความคืบหน้างาน",
                                values: [{
                                  from: <?php echo $start_datemin;?>,
                                  to: <?php echo $end_datemax;?>,
                                  label: "<?php echo $rowww['TaskProgress']?>%", 
                                  customClass: "gantttimeline"
                                }]
                              },
                        <?php  } }  ?>

                         {
                            name: " ",
                            desc: " ",
                         },
                    <?php }?>];	
                        jq12("#gantt").gantt({
                          source: gantt_data1,
                          itemsPerPage: 25,
                          months: app.months_json1,
                          navigate: 'scroll',
                          onRender: function() {
                            jq12('#gantt .leftPanel .name .fn-label:empty').parents('.name').css('background', '#fff');
                          },
                      });
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
        <script src="global/js/Plugin/responsive-tabs.js"></script>
        <script src="global/js/Plugin/closeable-tabs.js"></script>
        <script src="global/js/Plugin/tabs.js"></script>
    <script src="assets/examples/js/tables/datatable.js"></script>
    <script src="assets/examples/js/uikit/icon.js"></script>
  </body>
</html>
<?php } ?>