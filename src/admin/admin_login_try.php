<?php
    session_start();
    include "../connect.php";

    
    $in_name = $_POST["input_name"];
    $in_pass = $_POST["input_pass"];

    $qry = "SELECT * FROM admins WHERE admin_name = '".$in_name."' ";

    // ----------------------- check if query working
    if($con->query($qry))
    {
        echo "Query run success"; 
    }
    else
    {
        echo "Query didn't run";
    }
    //---------------------------------------

    $res = $con->query($qry);    //storing result from query in this variable
    $msg = "";

    if($res->num_rows > 0)
    {   //admin exists
        $row = $res->fetch_assoc();

        if($row["admin_pass"] == $in_pass)
        {   //password is correct
            $_SESSION["admin"] = $in_name;
            //echo $SESSION["user"];
            header("Location:admin_dashboard.php");    //give admin the access to dashboard
        }
        else
        {   //password is incorrect
            $msg = "Invalid Password";
            header("Location:admin_login.php?Message=$msg");
        }
    }
    else
    {   //admin does not exist
        $msg = " ".$in_name." does not exist";
        header("Location:admin_login.php?Message=$msg");
    }
    
?>