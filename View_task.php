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
        case 'deletetask': 

                    $datapj4 = array();      
                    if($_POST["taskid"] != null)
                    {        
                        $id =  $_POST["taskid"];   
                        $datadel = [
                            'TaskSituation'=>"Stop proceed",
                            'id' => $id
                        ];
                        $sqldel = "UPDATE taskprojects SET TaskPoSituation=:TaskSituation WHERE TaskPoID=:id";
                        $stmtdel = $conn->prepare($sqldel);
                        $stmtdel->execute($datadel);

                        $stpo = $conn->query("SELECT * FROM task WHERE TaskPoID='".$id."' AND TaskSituation='proceed'");
                        while ($rowpm = $stpo->fetch()) {

                            $datadelst = [
                                'TaskSituation'=>"Stop proceed",
                                'id' => $rowpm['TaskID']
                            ];

                            $sqldelst = "UPDATE task SET TaskSituation=:TaskSituation WHERE TaskID=:id";
                            $stmtdelst = $conn->prepare($sqldelst);
                            $stmtdelst->execute($datadelst);
                        }

                        
                    }
                    echo json_encode("Success");
                    break;
        case 'checkmm':     $stpo = $conn->query("SELECT employee.EmployeeFullName,employee.EmployeeID,task.TaskPoID,assigntask.*,assigntaskproject.AssignTaskPoID,memberproject.MemberProjectID,task.TaskName FROM task 
                                                    INNER JOIN assigntask ON ((task.TaskID=assigntask.TaskID) )
                                                    INNER JOIN assigntaskproject ON (assigntask.AssignTaskPoID=assigntaskproject.AssignTaskPoID)
                                                    INNER JOIN memberproject on (assigntaskproject.MemberProjectID=memberproject.MemberProjectID)
                                                    INNER JOIN employee on (memberproject.EmployeeID=employee.EmployeeID) 
                                                    WHERE task.TaskPoID='".$_POST['taskid']."' AND employee.EmployeeID='".$_POST['employeeID']."' AND task.TaskSituation='proceed' ");
                             $data = array();
                             while ($rowpm = $stpo->fetch()) {
                                $data[] = $rowpm;
                             }
                             if($data==null){$data="0";}
                                echo json_encode($data);
                             
                    break;
        case 'checkpj':   $stpo = $conn->query("SELECT * FROM taskprojects 
                                                INNER JOIN assigntaskproject ON (taskprojects.TaskPoID=assigntaskproject.TaskPoID) 
                                                INNER JOIN memberproject ON (assigntaskproject.MemberProjectID=memberproject.MemberProjectID)
                                                INNER JOIN employee ON (memberproject.EmployeeID=employee.EmployeeID) 
                                                WHERE taskprojects.ProjectID='".$_POST['taskid']."' AND memberproject.MemberProjectID='".$_POST['employeeID']."' AND taskprojects.TaskPoSituation='proceed'");
                    $data = array();
                    $datatpj = array();
                    while ($rowpm = $stpo->fetch()) {
                        array_push($datatpj,$rowpm);

                                $stpmts = $conn->query("SELECT employee.EmployeeFullName,employee.EmployeeID,task.TaskPoID,assigntask.*,assigntaskproject.AssignTaskPoID,memberproject.MemberProjectID,task.TaskName,task.TaskSituation FROM task 
                                INNER JOIN assigntask ON ((task.TaskID=assigntask.TaskID) )
                                INNER JOIN assigntaskproject ON (assigntask.AssignTaskPoID=assigntaskproject.AssignTaskPoID)
                                INNER JOIN memberproject on (assigntaskproject.MemberProjectID=memberproject.MemberProjectID)
                                INNER JOIN employee on (memberproject.EmployeeID=employee.EmployeeID) 
                                WHERE task.TaskPoID='".$rowpm['TaskPoID']."' AND employee.EmployeeID='".$rowpm['EmployeeID']."' AND task.TaskSituation='proceed' ");
                        
                              while ($rowpmts = $stpmts->fetch()) {

                                 array_push($datatpj,$rowpmts);
                              }

                    }
                    if($datatpj==null){$datatpj="0";}
                    echo json_encode($datatpj);

                    break;
        case 'deletetaskPM':   
                    
                        $id =  $_POST["AssignTaskPoID"];   
                        $datadel = [
                            'id' => $id
                        ];
                        $sqldel = "DELETE FROM assigntaskproject WHERE AssignTaskPoID=:id ";
                        $stmtdel = $conn->prepare($sqldel);
                        $stmtdel->execute($datadel);

                        date_default_timezone_set("Asia/Bangkok");
                        $dateActi = date("Y-m-d H:i:s");
                        $Action = "ลบสมาชิกงานออกจากทีม";
                          $dataActi = [
                            'ActivitiesName' =>$Action,
                            'ActivitiesDate' =>  $dateActi,
                            'ActivitiesTaskPoID' =>$_POST['taskid'],
                            'AssignTaskPoID' => $_SESSION["Employee"]
                        ];
                        $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                         VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                        $stmtpm= $conn->prepare($sqlActi);
                        $stmtpm->execute($dataActi);
                    
                    echo json_encode("success");
                    break;       
        case 'deletetmmpj':   
                    
                    $id =  $_POST["AssignTaskPoID"];   
                    $datadel = [
                        'id' => $id
                    ];
                    $sqldel = "DELETE FROM memberproject WHERE MemberProjectID=:id ";
                    $stmtdel = $conn->prepare($sqldel);
                    $stmtdel->execute($datadel);

                    date_default_timezone_set("Asia/Bangkok");
                    $dateActi = date("Y-m-d H:i:s");
                    $Action = "ลบสมาชิกงานออกจากโครงการ";
                      $dataActi = [
                        'ActivitiesName' =>$Action,
                        'ActivitiesDate' =>  $dateActi,
                        'ActivitiesTaskPoID' =>$_POST['taskid'],
                        'AssignTaskPoID' => $_SESSION["Employee"]
                    ];
                    $sqlActi = "INSERT INTO activitiestaskproject (ActivitiesName, ActivitiesDate, ActivitiesTaskPoID,AssignTaskPoID)
                     VALUES (:ActivitiesName, :ActivitiesDate, :ActivitiesTaskPoID,:AssignTaskPoID)";
                    $stmtpm= $conn->prepare($sqlActi);
                    $stmtpm->execute($dataActi);
                
                echo json_encode("success");
                break; 
    }
 }  
 ?>