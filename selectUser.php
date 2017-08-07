<?php
    require 'config.php';
    session_start();
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }

    $username=$_POST["userName"];
    $password=$_POST["password"];
    try{
        //$stmt=$conn->prepare("SELECT * FROM `user` WHERE `userName`='$username' and `password`='$password';");
        $stmt=$conn->query("SELECT * FROM `user` WHERE `userName`='$username' and `password`='$password';");
        $result=$stmt->fetch();
        if($result["name"]!=""){
            echo "خوش امدید";
            $_SESSION["login"]=true;
            $_SESSION["username"]=$username;
        }
        else{
            echo "نام کاربری یا رمز عبور صحیح نمیباشد";
        }
    }
    catch(PDOException $ex){
        echo $command . "<br>" . $ex->getMessage();
    }
    /*Redirect("http://localhost/mini_project/main.php");
    $_SESSION["login"]=true;
    $_SESSION["username"]=$userName;
    echo $_SESSION["login"];
    echo $_SESSION["username"];*/
?>