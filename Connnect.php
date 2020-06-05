<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
);

try {
    $conn = new PDO("mysql:host=$servername;dbname=pm_system", $username, $password,$option);
    // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conn->exec("set names utf8");
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>