<?php
    session_start();
    include "../connect.php";

    
    $in_name = $_POST["input_name"];
    $in_pass = $_POST["input_pass"];

    $qry = "SELECT * FROM students WHERE student_name = '".$in_name."' ";

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

        if($row["student_pass"] == $in_pass)
        {   //password is correct
            $_SESSION["student"] = $in_name;
            //echo $SESSION["user"];
            header("Location:student_dashboard.php");    //give student the access to dashboard
        }
        else
        {   //password is incorrect
            $msg = "Invalid Password";
            header("Location:student_login.php?Message=$msg");
        }
    }
    else
    {   //admin does not exist
        $msg = " ".$in_name." does not exist";
        header("Location:student_login.php?Message=$msg");
    }
    
?>