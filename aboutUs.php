<?php
session_start();
include 'header.html';
function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }
if($_SESSION["login"]==true){
    include 'aboutUs.html';
}
else{
    Redirect("login.php");
}
?>