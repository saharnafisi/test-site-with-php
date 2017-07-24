<?php
    session_start();
    include 'header.html'; 
    include 'register.html';
    echo $_SESSION["conn"];
    if(isset($_POST["sumbit"])){
        $name=$_POST["name"];
        $userName=$_POST["userName"];
        $password=$_POST["password"];
        if(isset($_POST["gender"])){
            if($_POST["gender"]=="female"){
            $gender=true;
            }
        elseif($_POST["gender"]=="male"){
            $gender=false;
            }
        }
        echo $_SESSION["conn"];
    }
    try{
            $command="INSERT INTO `user`(`name`, `userName`, `password`, `gender`)
            VALUES ('$name','$userName','$password',$gender)";
            $_SESSION["conn"]->exec($command);
            echo "کاربر با موفقیت افزوده شد";
        }
        catch(PDOException $ex){
            echo $command . "<br>" . $ex->getMessage();
        }
    
 ?>

