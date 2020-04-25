<?php include "../connect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Participants | DOOMSDAY</title>
    <link rel="stylesheet" href="../../css/all_participants.css">
</head>

<body>
    <?php include "student_head.php" ?>

    <!-- All Participants Code Start -->
    <div class="container-fluid">
        <h1 class="mt-4">All Participants</h1>

        <center>
        <form class="myform" action="" method="POST">
            <div class="row">
                <button type="submit" name="Visitor" class="btn btn-success btn-mybtn">Visitors</button>
                <button type="submit" name="PUBG" class="btn btn-success btn-mybtn">PUBG</button>
                <button type="submit" name="Tekken" class="btn btn-success btn-mybtn">Tekken</button>
                <button type="submit" name="COD" class="btn btn-success btn-mybtn">COD</button>
                <button type="submit" name="NFS" class="btn btn-success btn-mybtn">NFS</button>
                <button type="submit" name="FIFA" class="btn btn-success btn-mybtn">FIFA</button>
                <button type="submit" name="DOTA" class="btn btn-success btn-mybtn">DOTA</button>
                <button type="submit" name="CS-GO" class="btn btn-success btn-mybtn">CS-GO</button>
                <button type="submit" name="Ludo" class="btn btn-success btn-mybtn">Ludo</button>
                <button type="submit" name="Cards" class="btn btn-success btn-mybtn">Cards</button>
                <button type="submit" name="Chess" class="btn btn-success btn-mybtn">Chess</button>
                <button type="submit" name="Little" class="btn btn-success btn-mybtn">Little Artist</button>
                <button type="submit" name="Spell" class="btn btn-success btn-mybtn">Spelling Bee</button>
                <button type="submit" name="Henna" class="btn btn-success btn-mybtn">Henna</button>
                <button type="submit" name="Singing" class="btn btn-success btn-mybtn">Singing</button>
                <button type="submit" name="Paint" class="btn btn-success btn-mybtn">Painting</button>
            </div>
        </form>
        </center>


        <h3 class="head3">Participant Details</h3>

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
                </tr>
            </thead>
            <?php  
                //checks yahan se start kro

                //visitors
                if(isset($_POST["Visitor"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Visitor' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //pubg
                elseif(isset($_POST["PUBG"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='PUBG' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }
                
                //tekken    
                elseif(isset($_POST["Tekken"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Tekken' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //cod
                elseif(isset($_POST["COD"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='COD' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }
                
                //nfs
                elseif(isset($_POST["NFS"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='NFS' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //fifa
                elseif(isset($_POST["FIFA"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='FIFA' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //dota
                elseif(isset($_POST["DOTA"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='DOTA' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //csgo
                elseif(isset($_POST["CS-GO"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='CS-GO' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //ludo
                elseif(isset($_POST["Ludo"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Ludo 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //cards
                elseif(isset($_POST["Cards"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Cards 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //chess
                elseif(isset($_POST["Chess"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Chess 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //little artist
                elseif(isset($_POST["Little"]))
                {
                    // echo "<script>alert('Pressed')</script>";
                    $qry = " SELECT * FROM participants WHERE event_name='Little Artist 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //spelling bee
                elseif(isset($_POST["Spell"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Spelling Bee 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //henna
                elseif(isset($_POST["Henna"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Henna 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //singing
                elseif(isset($_POST["Singing"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Singing 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //painting
                elseif(isset($_POST["Paint"]))
                {
                    $qry = " SELECT * FROM participants WHERE event_name='Painting 1 Player' ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }

                //for all participants
                else
                {
                    $qry = " SELECT * FROM participants ";
                    $res = $con->query($qry);
                    $result = "";

                    if($res->num_rows > 0)
                    {
                        echo "Total Registrations: ".$res->num_rows;
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
                        </tr>

                    <?php 
                        }
                    }
                    else{echo "No Results Found!!";}
                }
                //bss yahan tak    
            ?>
            </tbody>
        </table>
    </div>
    <!-- All Participants Code End -->
    <?php include "student_foot.php" ?>