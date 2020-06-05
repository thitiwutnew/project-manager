<?php  
 session_start();
include('Connnect.php');
 if(isset($_POST["taskid"]))  
 {  
    $Typeaction = isset($_POST['taskaction']) ? $_POST['taskaction'] : '';
    switch($Typeaction) {
        case 'ดูข้อมูล':
                    $dataTask= array();
                    $stpm = $conn->query("SELECT *  FROM  taskprojects  AS d2 
                    INNER JOIN projects AS d5 ON (d2.ProjectID=d5.ProjectID)
                    WHERE d2.TaskID ='".$_POST["dtd_id"]."'");
                    $data = "";
                    $data2 = "";
                    while ($rowpm = $stpm->fetch()) {
                        $data= $rowpm;
                        array_push($dataTask, $data);
                    }
                    $stp2 = $conn->query("SELECT d3.EmployeeFullName,d2.AssignPosition,d4.MemberProjectID  FROM  taskprojects AS d1 
                    INNER JOIN assign  AS d2 ON  (d1.TaskID = d2.TaskID) 
                    INNER JOIN memberproject  AS d4 ON  (d2.MemberProjectID = d4.MemberProjectID) 
                    INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                    WHERE d1.TaskID ='".$_POST["dtd_id"]."'");
                   
                    while ($rowpm2 = $stp2->fetch()) {
                        $data2 =$rowpm2;
                        array_push($dataTask, $data2);
                    }
                    echo json_encode($dataTask);
                    break;
        case 'แก้ไขข้อมูล':
                    $dataTask= array();
                    $stpm = $conn->query("SELECT *  FROM  taskprojects  AS d2 
                    INNER JOIN projects AS d5 ON (d2.ProjectID=d5.ProjectID)
                    WHERE d2.TaskID ='".$_POST["dtd_id"]."'");
                    $data = "";
                    $data2 = "";
                    while ($rowpm = $stpm->fetch()) {
                        $data= $rowpm;
                        array_push($dataTask, $data);
                    }
                    $stp2 = $conn->query("SELECT d3.EmployeeFullName,d2.AssignPosition,d4.MemberProjectID,d2.AssignID  FROM  taskprojects AS d1 
                    INNER JOIN assign  AS d2 ON  (d1.TaskID = d2.TaskID) 
                    INNER JOIN memberproject  AS d4 ON  (d2.MemberProjectID = d4.MemberProjectID) 
                    INNER JOIN employee  AS d3 ON  (d4.EmployeeID = d3.EmployeeID) 
                    WHERE d1.TaskID ='".$_POST["dtd_id"]."'");
                
                    while ($rowpm2 = $stp2->fetch()) {
                        $data2 =$rowpm2;
                        array_push($dataTask, $data2);
                    }
                    echo json_encode($dataTask);
                    break;
        case 'deletesubtask': 

                    $datapj4 = array();      
                    if($_POST["taskid"] != null)
                    {        
                        $id =  $_POST["taskid"];   
                        $datadel = [
                            'TaskSituation'=>"Stop proceed",
                            'id' => $id
                        ];
                        $sqldel = "UPDATE task SET TaskSituation=:TaskSituation WHERE TaskID=:id";
                        $stmtdel = $conn->prepare($sqldel);
                        $stmtdel->execute($datadel);

                    }
                    echo json_encode("Success");
                    break;
        case 'deletemembersubtask': 

                    $datapj4 = array();      
                     
                        $id =  $_POST["taskid"];   
                        $datadel = [
                            'id' => $id
                        ];
                        $sqldel = "DELETE FROM assigntask WHERE AssignTaskID=:id ";
                        $stmtdel = $conn->prepare($sqldel);
                        $stmtdel->execute($datadel);

                        
                        date_default_timezone_set("Asia/Bangkok");
                        $dateActi = date("Y-m-d H:i:s");
                        $Action = "ลบสมาชิกงาน ชื่อ ".$_POST['AssignTaskPoName']."  ออกจากทีม";
                          $dataActi = [
                            'ActivitiesName' =>$Action,
                            'ActivitiesDate' =>  $dateActi,
                            'ActivitiesTaskPoID' =>$_POST['AssignTaskPoID'],
                            'AssignTaskPoID' => $_SESSION["Employee"]
                        ];
                        $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                         VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                        $stmtpm= $conn->prepare($sqlActi);
                        $stmtpm->execute($dataActi);

                    
                    echo json_encode("Success");
                    break;       
    }
 }  
 ?>