<?php
    // Database credentials
    $servername = "den1.mysql5.gear.host";
    $username   = "tc1004bluis";
    $password   = "Jv3XPz9~Wc5!";
    $dbname     = "tc1004bluis";
    $tbname     = "sensor";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>