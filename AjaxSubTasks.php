<?php
 session_start();
include('Connnect.php');
      $subject_id = isset($_GET['subject_id']) ? $_GET['subject_id'] : '';
      $pj = isset($_GET['pj']) ? $_GET['pj'] : '';
 
     

      if( $pj !=null ){
         $stpm = $conn->query("SELECT *  FROM  assigntaskproject AS sub1
         INNER JOIN memberproject  AS sub2  ON (sub1.MemberProjectID = sub2.MemberProjectID)
         INNER JOIN employee  AS sub3 ON  (sub2.EmployeeID = sub3.EmployeeID) 
         WHERE sub1.TaskPoID ='".$pj."'  AND  sub1.AssignTaskPoID !='".$subject_id ."' ");
         $data = array();
         while ($rowpm = $stpm->fetch()) {
            $data[] = $rowpm;
         }
         echo json_encode($data);
      }
      else{
        
      }
?>