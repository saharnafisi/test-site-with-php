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
            echo "خوش امدید" .$username;
            $_SESSION["login"]=true;
            $_SESSION["username"]=$username;
            Redirect("main.php");
        }
        else{
            echo "نام کاربری یا رمز عبور صحیح نمیباشد";
            $_SESSION["login"]=false;
            $_SESSION["username"]="";
        }
    }
    catch(PDOException $ex){
        echo $command . "<br>" . $ex->getMessage();
    }
?>