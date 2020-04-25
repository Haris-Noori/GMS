<?php include "../connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Participant | Admin</title>

    <link rel="stylesheet" href="../../css/admin-dashboard.css">
</head>
<body>
    <?php include "admin_header.php" ?>
        <!-- Admin Dashboard Code Start-->

            <div class="container-fluid">
                <h1 class="mt-4">Delete Registration</h1>
                
                <form class="myform" action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input name="p_id" type="number" class="form-control" id="inputEmail4" placeholder="Ticket# 123">
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" name="btn_id" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </form>

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

                        if(isset($_POST["btn_id"]))
                        {
                            $p_id = $_POST["p_id"];
                            $_SESSION["del_id"] = $p_id;
                            $qry = " SELECT * FROM participants WHERE p_id = '".$p_id."' ";
                            $res = $con->query($qry);
                            $result = "";
                            if($res->num_rows > 0)
                            {
                                echo "Total Rows: ".$res->num_rows;
                                while($row = $res->fetch_assoc())
                                { ?>
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
                                    </tbody>
                                    <?php
                                }
                            }
                            else{echo "No Results Found!!";}
                        }
                    ?>
                </table>
                <!-- <br> -->
                <center>
                <form action="" method="POST">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Delete this Registration
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-success btn-lg" name="btn_del" type="submit" >Yes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
                </center>
                
                <?php 
                    if(isset($_POST["btn_del"]))
                    {
                        $qry = " DELETE FROM participants WHERE p_id = '".$_SESSION['del_id']."' ";
                        if($con->query($qry))
                        {
                            echo "Deleted";
                        }
                        else{
                            echo "Not Deleted";
                        }
                    }
                ?>

            </div>    
        <!-- Admin Dashboard Code End-->
    <?php include "admin_foot.php" ?>