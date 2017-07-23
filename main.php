<?php
    session_start();
    include 'header.html';
    echo "<h3>این یک وبسایت تستی برای یادگیری php می باشد!</h3>";
    echo "باشد که یاد گیریم";
    echo "<br>connection: " .$_SESSION["conn"];
?>