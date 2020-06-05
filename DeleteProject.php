<?php
session_start();
$isset = isset($_SESSION["ProjectIDdel"]);
	if($isset==null){
		echo '<script>window.location.href="index.php"</script>';
	}
	else{
        $projectid = $_SESSION["ProjectIDdel"];
       include('Connnect.php');
//  set status on delete
if(isset($projectid)){
      $ProjectSituation = "Stop proceed";
      $datapro = [
          'ProjectSituation' => $ProjectSituation,
          'ID' => $projectid
      ];
      $sqlpro = " UPDATE projects SET ProjectSituation=:ProjectSituation WHERE ProjectID=:ID ";
      $stmtpro= $conn->prepare($sqlpro);
       if ($stmtpro->execute($datapro)) { 

                            $sqltasks = "SELECT * FROM taskprojects  WHERE ProjectID='".$projectid."'";
                            $stmttasks = $conn->prepare($sqltasks);
                            $stmttasks->execute();
                            while ($rowtasks = $stmttasks->fetch()) 
                              {

                                   $datatasks = [
                                              'TaskPoSituation' => $ProjectSituation,
                                              'ID' => $rowtasks['TaskPoID']
                                              ];

                                   $sqlupdatetasks = " UPDATE taskprojects SET TaskPoSituation=:TaskPoSituation WHERE TaskPoID=:ID ";
                                   $stmtupdatetasks= $conn->prepare($sqlupdatetasks);
                                   if ($stmtupdatetasks->execute($datatasks)) 
                                   { 

                                        $sqlsubtasks = "SELECT * FROM task  WHERE TaskPoID='".$rowtasks['TaskPoID']."'";
                                        $stmtsubtasks = $conn->prepare($sqlsubtasks);
                                        $stmtsubtasks->execute();
                                        while ($rowsubtasks = $stmtsubtasks->fetch()) 
                                          {

                                             $datasubtasks = [
                                              'TaskSituation' => $ProjectSituation,
                                              'ID' => $rowsubtasks['TaskID']
                                              ];

                                              $sqlupdatesubtasks = " UPDATE task SET TaskSituation=:TaskSituation WHERE TaskID=:ID ";
                                              $stmtupdatesubtasks= $conn->prepare($sqlupdatesubtasks);
                                              $stmtupdatesubtasks->execute($datasubtasks);
                                          }
                                    }

                              }
                              echo '<script>window.location.href="MyProject.php"</script>';
        
       }
      
      }
} ?>