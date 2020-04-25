<?php include "../connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Students | Tutor</title>
    <link rel="stylesheet" href="../../css/myclasses_tutor.css">
</head>

<body>
<?php include "tutor_head.php"; ?>
    <!-- Operator Team Code Start -->
    <div class="container-fluid">
        <h2 class="mt-4">View My Students</h2>


        <h4 class="head3">Students In My Classes</h4>
        <!-- PHP CODE START -->

        <!-- PHP CODE END -->

        <table class="table mytable">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Class No.</th>
                <th scope="col">Student Name</th>
            </tr>
            </thead>
            <?php

            $qry = " SELECT class_id, student_name FROM classes,students WHERE classes.student_id=students.student_id AND tutor_id = (SELECT tutor_id FROM tutors WHERE tutor_name = '".$_SESSION["tutor"]."') ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {
            while($row = $res->fetch_assoc())
            {
            ?>

            <tbody>
            <tr>
                <th scope="row"> <?php echo " ".$row["class_id"]." " ?> </th>
                <td><?php echo " ".$row["student_name"]." " ?></td>
            </tr>

            <?php
            }
            }
            else{echo "No Results Found!!";}

            ?>
            </tbody>
        </table>
    </div>
    <!-- Operator Team Code End -->
<?php include "tutor_foot.php" ?>