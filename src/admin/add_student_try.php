<?php

    include "../connect.php";

    $student_name = $_POST["student_name"];
    $student_pass = $_POST["student_pass"];

    $qry = " INSERT INTO students(student_name, student_pass) VALUES ('".$student_name."', '".$student_pass."') ";

    if($con->query($qry))
    {
        $msg = "Student Added Successfully!!";
        header("Location:add_student.php?GoodMessage=$msg");
    }
    else
    {
        $msg="Not Added!!";
        header("Location:add_student.php?BadMessage=$msg");
    }
?>