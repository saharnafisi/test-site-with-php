<?php
session_start();
function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }
$_SESSION["login"]=false;
$_SESSION["username"]="";
Redirect("main.php");

?>