<?php include "../connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Classes | Tutor</title>
    <link rel="stylesheet" href="../../css/myclasses_tutor.css">
</head>

<body>
    <?php include "tutor_head.php"; ?>
    <!-- Operator Team Code Start -->
    <div class="container-fluid">
        <h2 class="mt-4">My Classes</h2>

        
        <h4 class="head3">Your Class Schedules</h4>
        <!-- PHP CODE START -->
        
        <!-- PHP CODE END -->

        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Class No.</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Class Time</th>
                    <th scope="col">End Time</th>
                </tr>
            </thead>
            <?php

                $qry = " SELECT class_id, start_date, end_date, start_time, end_time FROM classes WHERE tutor_id = (SELECT tutor_id FROM tutors WHERE tutor_name = '".$_SESSION["tutor"]."' ) ";
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
                                <td><?php echo " ".$row["start_date"]." " ?></td>
                                <td><?php echo " ".$row["end_date"]." " ?></td>
                                <td><?php echo " ".$row["start_time"]." " ?></td>
                                <td><?php echo " ".$row["end_time"]." " ?></td>
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