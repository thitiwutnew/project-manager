<?php 
    include('./Connnect.php');
            if($_GET['name']="nameproject"){
                   $data = array();
                              $sqlselect = "SELECT ProjectName,ProjectStartDate FROM projects WHERE ProjectStartDate LIKE '2019%' ";
                              $stmtselect = $conn->prepare($sqlselect);
                              $stmtselect->execute();
                              while ($rowselect = $stmtselect->fetch()) 
                              { 
                               $data[] = $rowselect;
                              }
                              echo json_encode($data);
            }
            if($_GET['name']==null){

            }
?>