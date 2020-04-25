<?php

    include "../connect.php";

    $tutor_id = $_POST["tutor_id"];

    $qry = " DELETE FROM tutors WHERE tutor_id = '".$tutor_id."' ";

    if($con->query($qry))
    {
        $msg = "Tutor Removed !!";
        header("Location:modify_tutor.php?GoodMessage=$msg");
    }
    else
    {
        $msg="Not Removed!!";
        header("Location:modify_tutor.php?BadMessage=$msg");
    }
?>