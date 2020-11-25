<?php
    // Database credentials
    $servername = "den1.mysql6.gear.host";
    $username   = "tc1004gmo01";
    $password   = "Ry74-Z_r9G2n";
    $dbname     = "tc1004gmo01";
    $tbname     = "sensor";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>