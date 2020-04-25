<?php include "../connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Participants | Admin</title>

    <link rel="stylesheet" href="../../css/registered_participants.css">
</head>

<body>
    <?php include "admin_header.php" ?>
    <!-- Admin Dashboard Code Start-->

    <div class="container-fluid">
        <h1 class="mt-4">Participants</h1>

        <!--long code start here-->
        <h3 class="head3">Tutor Details</h3>

        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tutor ID</th>
                    <th scope="col">Tutor Name</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
                $qry = " SELECT * FROM tutors ";
                $res = $con->query($qry);
                $result = "";
                if($res->num_rows > 0)
                {
                    echo "Total Tutors: ".$res->num_rows;
                    while($row = $res->fetch_assoc())
                    {
                        ?>

                <tbody>
                    <tr>
                        <th scope="row"> <?php echo " ".$row["tutor_id"]." " ?> </th>
                        <td><?php echo " ".$row["tutor_name"]." " ?></td>
                        <td><?php echo " <button>EDIT</button> " ?></td>
                        <td><?php echo " <button>DELETE</button> " ?></td>

                    </tr>

                <?php
                    }
                }
                else{echo "No Results Found!!";}

                //bss yahan tak    
            ?>
            </tbody>
        </table>
        <!--long code end here-->
    </div>
    <!-- Admin Dashboard Code End-->
    <?php include "admin_foot.php" ?>