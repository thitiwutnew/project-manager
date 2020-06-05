<?php
 session_start();
include('Connnect.php');
      $subject_id = isset($_GET['subject_id']) ? $_GET['subject_id'] : '';
      $pj = isset($_GET['pj']) ? $_GET['pj'] : '';
      $checkmm = isset($_GET['checkmm']) ? $_GET['checkmm'] : '';
     

      if($checkmm =="selectmm" ){
         $stpm = $conn->query("SELECT d3.EmployeeFullName,d1.MemberProjectID  FROM memberproject AS d1 
         INNER JOIN projects  AS d2 ON  (d1.ProjectID = d2.ProjectID) 
         INNER JOIN employee  AS d3 ON  (d1.EmployeeID = d3.EmployeeID) 
         WHERE d1.MemberProjectID !='{$subject_id}' AND d2.ProjectID ='{$pj}' ");
         $data = array();
         while ($rowpm = $stpm->fetch()) {
            array_push($data,$rowpm);
      }
      echo json_encode($data);
   }
       if($checkmm =="Check"){
         $stpm = $conn->query("SELECT employee.EmployeeID ,employee.EmployeeFullName,assigntaskproject.AssignTaskPoID FROM assigntaskproject
          INNER JOIN memberproject ON (assigntaskproject.MemberProjectID=memberproject.MemberProjectID)
          INNER JOIN employee ON (memberproject.EmployeeID=employee.EmployeeID) 
          WHERE assigntaskproject.TaskPoID='".$_GET['subject_id']."' AND assigntaskproject.AssignTaskPoID!='".$_GET['pj']."'");
         $data = array();
         while ($rowpm = $stpm->fetch()) {
            array_push($data,$rowpm);
         }
         echo json_encode($data);
      }
      if($checkmm =="Checkmmpj"){
         $stpm = $conn->query("SELECT d1.ProjectID,d3.EmployeeID,d3.EmployeeFullName,d3.EmployeePic,d2.ProjectID,d2.EmployeeID,d2.MemberProjectID,d2.MemberProjectPosition FROM projects AS d1 
         INNER JOIN memberproject AS d2 ON (d1.ProjectID = d2.ProjectID) 
         INNER JOIN  employee AS d3 ON (d2.EmployeeID=d3.EmployeeID)
         WHERE d1.ProjectID = '".$_GET['ProjectID']."'  AND  d2.MemberProjectID!='".$_GET['pj']."'");
         $datatpj = array();
         while ($rowpm = $stpm->fetch()) {
            array_push($datatpj,$rowpm);
         }

         echo json_encode($datatpj);

      }
      if($checkmm =="Checkmm"){
         $stpm = $conn->query("SELECT d1.ProjectID,d3.EmployeeID,d3.EmployeeFullName,d3.EmployeePic,d2.ProjectID,d2.EmployeeID,d2.MemberProjectID,d2.MemberProjectPosition FROM projects AS d1 
         INNER JOIN memberproject AS d2 ON (d1.ProjectID = d2.ProjectID) 
         INNER JOIN  employee AS d3 ON (d2.EmployeeID=d3.EmployeeID)
         WHERE d1.ProjectID = '".$_GET['pj']."'  AND  d2.MemberProjectID!='".$_GET['subject_id']."'");
         $datatpj = array();
         while ($rowpm = $stpm->fetch()) {
            array_push($datatpj,$rowpm);
         }

         echo json_encode($datatpj);

      }
?>