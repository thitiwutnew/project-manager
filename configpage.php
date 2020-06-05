<?php 
   session_start();
   $statusmember='';
    date_default_timezone_set('UTC');
  $_SESSION["years"] =date('Y');
   if(isset( $_SESSION["statusmember"])){ $statusmember = $_SESSION["statusmember"]; }
  if($statusmember!=null || $_GET["LoginID"]!=null){
        if(isset( $_GET["idproject"] )){
        unset($_SESSION["ProjectID"]);
        unset($_SESSION["status"]);
        $_SESSION["ProjectID"] = $_GET["idproject"];
        if(isset( $_GET["status"])){ $_SESSION["status"] = $_GET["status"]; }
        session_write_close(); 
        echo '<script>window.location.href="Task_Total.php"</script>';
    }
    else if(isset( $_GET["myidproject"] )){
        unset($_SESSION["myProjectID"]);
        unset($_SESSION["statusproject"]);
        unset($_SESSION["myTasks"]);
        $_SESSION["myProjectID"] = $_GET["myidproject"];
        if(isset( $_GET["statusproject"])){ $_SESSION["statusproject"] = $_GET["statusproject"]; }
        session_write_close(); 
        echo '<script>window.location.href="MyTasks.php"</script>';
    }
    else if(isset( $_GET["addtask"] )){
        unset($_SESSION["idpraddtaskoject"]);
        $_SESSION["idpraddtaskoject"] = $_GET["addtask"];
        session_write_close(); 
        echo '<script>window.location.href="A_Task.php"</script>';
    }
    else if(isset( $_GET["myTasks"] )){
        unset($_SESSION["myTasks"]);
        $_SESSION["myTasks"] = $_GET["myTasks"];
        session_write_close(); 
        echo '<script>window.location.href="MyTasks.php"</script>';
    }
    else if(isset( $_GET["mysubTasks"] )){
        unset($_SESSION["mysubTasks"]);
        $_SESSION["mysubTasks"] = $_GET["mysubTasks"];
        session_write_close(); 
        echo '<script>window.location.href="MySubTasks.php"</script>';
    }
    else if(isset( $_GET["viewtasks"] )){
        unset($_SESSION["idtasks"]);
        $_SESSION["idtasks"] = $_GET["viewtasks"];
        session_write_close(); 
        echo '<script>window.location.href="viewtasks.php"</script>';
    }
    else if(isset( $_GET["viewtaskss"] )){
        unset($_SESSION["idtaskss"]);
        $_SESSION["idtaskss"] = $_GET["viewtaskss"];
        session_write_close(); 
        echo '<script>window.location.href="viewtask.php"</script>';
    }
    else if( isset( $_GET["editetasks"] )){
        unset($_SESSION["editetasks"]);
        $_SESSION["editetasks"] = $_GET["editetasks"];
        session_write_close(); 
        echo '<script>window.location.href="editeTasks.php"</script>';
    }
    else if( isset( $_GET["addtasks"] )){
        unset($_SESSION["addtasks"]);
        $_SESSION["addtasks"] = $_GET["addtasks"];
        session_write_close(); 
        echo '<script>window.location.href="Add_Tasks.php"</script>';
    }
    else if( isset( $_GET["TaskPoID"] )){
        unset($_SESSION["TaskPoID"]);
        unset($_SESSION["statustask"]);
        $_SESSION["TaskPoID"] = $_GET["TaskPoID"];
        if(isset( $_GET["statustask"])){ $_SESSION["statustask"] = $_GET["statustask"]; }
        session_write_close(); 
        echo '<script>window.location.href="SubTask_Total.php"</script>';
    }
    else if( isset( $_GET["myTaskPoID"] )){
        unset($_SESSION["myTaskPoID"]);
        unset($_SESSION["mysubTasks"]);
        unset($_SESSION["statustask"]);
        unset($_SESSION["Taskprogress"]);
        $statustask='';
        $_SESSION["myTaskPoID"] = $_GET["myTaskPoID"];
        $_SESSION["Taskprogress"] = $_GET["progress"];
        if(isset( $_GET["statustask"])){  $statustask= $_GET["statustask"]; }
         $_SESSION["statustask"]=   $statustask;
        session_write_close(); 
        echo '<script>window.location.href="MySubTasks.php"</script>';
    }
    else if( isset( $_GET["addsubtasks"] )){
        unset($_SESSION["addsubtasks"]);
        $_SESSION["addsubtasks"] = $_GET["addsubtasks"];
        session_write_close(); 
        echo '<script>window.location.href="Add_SubTasks.php"</script>';
    }
    else if( isset( $_GET["viewsubtasks"] )){
        unset($_SESSION["viewsubtasks"]);
        $_SESSION["viewsubtasks"] = $_GET["viewsubtasks"];
        session_write_close(); 
        echo '<script>window.location.href="viewsubtasks.php"</script>';
    }
    else if( isset( $_GET["viewsubtaskss"] )){
        unset($_SESSION["viewsubtaskss"]);
        $_SESSION["viewsubtaskss"] = $_GET["viewsubtaskss"];
        session_write_close(); 
        echo '<script>window.location.href="viewsubtask.php"</script>';
    }
    else if( isset( $_GET["editsubetasks"] )){
        unset($_SESSION["editsubetasks"]);
        unset($_SESSION["TaskPoID"]);
        $_SESSION["TaskPoID"] = $_GET["Taskpoid"]; 
        $_SESSION["editsubetasks"] = $_GET["editsubetasks"];
        session_write_close(); 
        echo '<script>window.location.href="editeSubTasks.php"</script>';
    }
     
    else if(isset( $_GET["idviewproject"] )){
        unset($_SESSION["ProjectIDview"]);
        $_SESSION["ProjectIDview"] = $_GET["idviewproject"];
        echo '<script>window.location.href="ViewProject.php"</script>';
    }
    else if(isset( $_GET["idviewprojects"] )){
        unset($_SESSION["ProjectIDview"]);
        $_SESSION["ProjectIDviews"] = $_GET["idviewprojects"];
        echo '<script>window.location.href="ViewProjects.php"</script>';
    }
    else if(isset( $_GET["ideditproject"] )){
        unset($_SESSION["ProjectIDedit"]);
        $_SESSION["ProjectIDedit"] = $_GET["ideditproject"];
        echo '<script>window.location.href="editeProject.php"</script>';
    }
    else if( isset( $_GET["iddelproject"] )){
        unset($_SESSION["ProjectIDdel"]);
        $_SESSION["ProjectIDdel"] = $_GET["iddelproject"];
        session_write_close(); 
        echo '<script>window.location.href="DeleteProject.php"</script>';
    }
    else if( isset( $_POST["years"] )){
        unset($_SESSION["years"]);
        $_SESSION["years"] = $_POST["years"];
         echo json_encode($_POST["years"]);
        session_write_close(); 
        
    }

    else if( isset( $_GET["Employee"] ) AND isset( $_GET["LoginID"] )){
        include('Connnect.php');
        $loginid=$_GET['LoginID'];
        $loginiden = $_GET['Employee'];
        $sql = "SELECT * FROM memberlogin  where LoginID =".$loginid." AND LoginIden=".$loginiden."";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    while ($row = $stmt->fetch()) { 
                        
                        $_SESSION["Employee"]=$row["LoginIden"];

                      if($row["LoginPermission"]==1){
                        $_SESSION["statusmember"] = "Super Admin";
                      }
                      else{
                        $_SESSION["statusmember"] = "Member";
                      }
                      session_write_close(); 
                      echo '<script>window.location.href="main.php"</script>';
                      exit;
                    }
                    session_write_close(); 
                    echo '<script>window.location.href="index.php"</script>';
                    exit;
    }
  }
  else{
       echo '<script>window.location.href="./index.php"</script>';
  }
  
?>
  