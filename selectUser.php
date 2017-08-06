<?php
    require 'config.php';
    session_start();
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }
    Redirect("http://localhost/mini_project/main.php");
    $username=$_POST["userName"];
    $password=$_POST["password"];
    try{
        $stmt=$conn->prepare("SELECT * FROM `user` WHERE `userName`='$username' and `password`='$password';");
        $stmt->execute();
    }
    catch(PDOException $ex){
        echo $command . "<br>" . $ex->getMessage();
    }
    /*Redirect("http://localhost/mini_project/main.php");
    echo "کاربر با موفقیت افزوده شد";
    $_SESSION["login"]=true;
    $_SESSION["username"]=$userName;
    echo $_SESSION["login"];
    echo $_SESSION["username"];*/
?>