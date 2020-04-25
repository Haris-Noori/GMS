<?php include "../connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Participant | Operator</title>
    <link rel="stylesheet" href="../../css/search_participant.css">
</head>

<body>
    <?php include "op_head.php"; ?>
    <!-- Operator Team Code Start -->
    <div class="container-fluid">
        <h1 class="mt-4">Search for a Participant</h1>

        <form class="myform" action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <input name="p_id" type="number" class="form-control" id="inputEmail4" placeholder="Ticket# 123">
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" name="btn_id" class="btn btn-success">Search 🔍</button>
                </div>
            </div>
        </form>
        
        <h3 class="head3">Participant Details</h3>
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
                    <th scope="col">Team</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php  
            if(isset($_POST["btn_id"]))
            {
                $p_id = $_POST["p_id"];
                // echo $p_id;

                $qry = " SELECT * FROM participants WHERE p_id = '".$p_id."' ";
                $res = $con->query($qry);
                $result = "";

                if($res->num_rows > 0)
                {
                    // echo "Query working";
                    // $result .= " <table class'table mytable'> ";
                    // $result .= " <thead class='thead-dark'> ";
                    // $result .= " <tr>
                    //                 <th scope='col'>Ticket Number</th>
                    //                 <th scope='col'>Participant Name</th>
                    //                 <th scope='col'>CNIC</th>
                    //                 <th scope='col'>Phone No.</th>
                    //                 <th scope='col'>Event Name</th>
                    //                 <th scope='col'>Fee Paid</th>
                    //                 <th scope='col'>Registered By</th> 
                    //             </tr>";
                    // $result .= " </thead> ";

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
                    <td><?php echo " ".$row["other_members"]." " ?></td>
                    <td><a href=<?php echo "printRecipt.php?p_id=".$row["p_id"]."&fee_paid=".$row["fee_paid"]."&regBy=".$row["registered_by"]."&event=".$row["event_name"]."&p_name=".$row["p_name"]."&other=".$row["other_members"]?> style="text-color: white; text-decoration: none;"> <button class="btn btn-success">Print</button> </a></td>
                </tr>

        <?php 
                    }
                }
                else{echo "No Results Found!!";} 
            }
        ?>
            </tbody>
        </table>
    </div>
    <!-- Operator Team Code End -->
    <?php include "tutor_foot.php" ?>


<!-- -->

<!-- <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Participant ID</th>
                    <th scope="col">Participant Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Event</th>
                    <th scope="col">Paid</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">5221</th>
                    <td>Haris Noori</td>
                    <td>1234567890123</td>
                    <td>03331234567</td>
                    <td>FIFA 19</td>
                    <td>Yes</td>
                </tr>
            </tbody>
        </table> -->