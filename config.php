<?php
$server_name="localhost";
$user_name="root";
$password="";
try{
    $conn=new PDO("mysql:host=$server_name;dbname=test_site", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>