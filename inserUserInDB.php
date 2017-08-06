<?php
require 'config.php';
    session_start();
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }
    $name=$_POST["name"];
    echo $name;
    $userName=$_POST["userName"];
    $password=$_POST["password"];
    $gender=false;
    if(isset($_POST["gender"])){
        if($_POST["gender"]=="female"){
        $gender=1;
        }
        elseif($_POST["gender"]=="male"){
            $gender=0;
        }
    }
    try{
        $command="insert into `user`(`name`, `userName`, `password`, `gender`)
            VALUES ('$name','$userName','$password',$gender)";
        $conn->exec($command);
        Redirect("http://localhost/mini_project/main.php");
        echo "کاربر با موفقیت افزوده شد";
        $_SESSION["login"]=true;
        $_SESSION["username"]=$userName;
        echo $_SESSION["login"];
        echo $_SESSION["username"];
    }
    catch(PDOException $ex){
        echo $command . "<br>" . $ex->getMessage();
    }
?>