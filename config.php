<?php
session_start();
$_SESSION["test"]="sahar";
$server_name="localhost";
$user_name="root";
$password="";
try{
    $conn=new PDO("mysql:host=$server_name;dbname=test_site", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $_SESSION["conn"]=true;
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
$_SESSION["conn"]=false;
}

?>