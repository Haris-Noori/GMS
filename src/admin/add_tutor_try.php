<?php

    include "../connect.php";

    $tutor_name = $_POST["tutor_name"];
    $tutor_pass = $_POST["tutor_pass"];

    $qry = " INSERT INTO tutors(tutor_name, tutor_pass) VALUES ('".$tutor_name."', '".$tutor_pass."') ";

    if($con->query($qry))
    {
        $msg = "Tutor Added Successfully!!";
        header("Location:add_tutor.php?GoodMessage=$msg");
    }
    else
    {
        $msg="Not Added!!";
        header("Location:add_tutor.php?BadMessage=$msg");
    }
?>