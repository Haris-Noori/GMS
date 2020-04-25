<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "gms_db";

    $con = new MySQLi($server, $user, $pass, $dbname);

    if($con->connect_error)
    {
        echo "<script>alert('not connected')</script>";
        echo "Error: ".$con->connect_error;
    }
    else
    {
        // echo "<script> alert('Successfully connected to database')</script>";
    }
?>
