<?php 
   session_start();
    if(isset( $_GET["idproject"] )){
        unset($_SESSION["ProjectID"]);
        $_SESSION["ProjectID"] = $_GET["idproject"];
        echo '<script>window.location.href="Task_Total.php"</script>';
    }
    else if(isset( $_GET["idviewproject"] )){
        unset($_SESSION["ProjectIDview"]);
        $_SESSION["ProjectIDview"] = $_GET["idviewproject"];
        echo '<script>window.location.href="ViewProject.php"</script>';
    }
    else if(isset( $_GET["ideditproject"] )){
        unset($_SESSION["ProjectIDedit"]);
        $_SESSION["ProjectIDedit"] = $_GET["ideditproject"];
        echo '<script>window.location.href="B_Project.php"</script>';
    }
    else if( isset( $_GET["iddelproject"] )){
        unset($_SESSION["ProjectIDdel"]);
        $_SESSION["ProjectIDdel"] = $_GET["iddelproject"];
        echo '<script>window.location.href="DeleteProject.php"</script>';
    }
  
?>