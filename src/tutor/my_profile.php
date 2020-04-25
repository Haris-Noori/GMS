<?php include "../connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile | Operator</title>
</head>

<body>
    <?php include "op_head.php" ?>
    <link rel="stylesheet" href="../../css/my_profile.css">
        <!-- Opertaor Team Code Start -->
        <div class="container-fluid">
            <h1 class="mt-4">My Profile</h1>
            <!-- <br> -->
            <a href="change_password.php"><button class="btn  btn-success" style="float:right">Change Password</button></a>
            <br>
        <!-- PHP CODE START -->
        
        <!-- PHP CODE END -->

        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Ticket No.</th>
                    <th scope="col">Participant Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Fee Paid</th>
                    <th scope="col">Registered By</th>
                </tr>
            </thead>
            <?php  
                $qry = " SELECT * FROM participants WHERE registered_by = '".$_SESSION["tutor"]."' ";
                $res = $con->query($qry);
                $result = "";

                if($res->num_rows > 0)
                {   echo "Total Registrations: ".$res->num_rows;
                    // echo "Query working";

                    while($row = $res->fetch_assoc())
                    {
                        ?>

            <tbody>
                <tr>
                    <th scope="row"> <?php echo " ".$row["p_id"]." " ?> </th>
                    <td><?php echo " ".$row["p_name"]." " ?></td>
                    <td><?php echo " ".$row["p_cnic"]." " ?></td>
                    <td><?php echo " ".$row["p_phone"]." " ?></td>
                    <td><?php echo " ".$row["event_name"]." " ?></td>
                    <td><?php echo " ".$row["fee_paid"]." " ?></td>
                    <td><?php echo " ".$row["registered_by"]." " ?></td>
                </tr>

        <?php 
                    }
                // else{echo "No Results Found!!";} 
            }     
        ?>
            </tbody>
        </table>

        </div>
        <!-- Opertaor Team Code End -->
    <?php include "tutor_foot.php" ?>