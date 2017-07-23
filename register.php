<?php
    session_start();
    include 'header.html'; 
    include 'register.html';
    echo $_POST["name"];
    /*$name=$_POST["name"];
    $userName=$_POST["userName"];
    $password=$_POST["password"];
    $gender=$_POST["gender"];
    try{
        $command= "INSERT INTO `user`(`name`, `userName`, `password`, `gender`) VALUES ('$name','$userName','$password',gender)";
        $_SESSION["conn"]->exec($command);
        echo "کاربر با موفقیت افزوده شد";
    }
    catch(PDOException $ex){
        echo $command . "<br>" . $ex->getMessage();
    }*/
    
 ?>

