<?php
    include 'header.html'; 
    include 'register.html';
    /*if(isset($_POST["sumbit"])){
        echo "sahaarrr";
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
        try{
            $command="insert into `user`(`name`, `userName`, `password`, `gender`)
            VALUES ('$name','$userName','$password',$gender)";
            $conn->exec($command);
            echo "کاربر با موفقیت افزوده شد";
        }
        catch(PDOException $ex){
            echo $command . "<br>" . $ex->getMessage();
        }
    }*/
    
    
 ?>

