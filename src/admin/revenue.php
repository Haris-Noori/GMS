<?php include "../connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Revenue | Dashboard</title>

    <link rel="stylesheet" href="../../css/admin-dashboard.css">
</head>
<body>
    <?php include "admin_header.php" ?>
        <!-- Admin Dashboard Code Start-->

            <div class="container-fluid">

                <?php
                    $total = 0;
                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Visitor' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $visitors_sales = $row["SUM(fee_paid)"];
                    // echo $visitors_sales;
                    // echo $res->num_rows;
                    $total+=$visitors_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='PUBG' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $pubg_sales = $row["SUM(fee_paid)"];
                    // echo $pubg_sales;
                    $total+=$pubg_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Tekken' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $tekken_sales = $row["SUM(fee_paid)"];
                    // echo $tekken_sales;
                    $total+=$tekken_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='COD' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $cod_sales = $row["SUM(fee_paid)"];
                    // echo $cod_sales;
                    $total+=$cod_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='NFS' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $nfs_sales = $row["SUM(fee_paid)"];
                    // echo $nfs_sales;
                    $total+=$nfs_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='FIFA' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $fifa_sales = $row["SUM(fee_paid)"];
                    // echo $fifa_sales;
                    $total+=$fifa_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='DOTA' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $dota_sales = $row["SUM(fee_paid)"];
                    // echo $dota_sales;
                    $total+=$dota_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='CS-GO' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $csgo_sales = $row["SUM(fee_paid)"];
                    // echo $csgo_sales;
                    $total+=$csgo_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Ludo 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $ludo_sales = $row["SUM(fee_paid)"];
                    // echo $ludo_sales;
                    $total+=$ludo_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Cards 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $cards_sales = $row["SUM(fee_paid)"];
                    // echo $cards_sales;
                    $total+=$cards_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Chess 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $chess_sales = $row["SUM(fee_paid)"];
                    // echo $chess_sales;
                    $total+=$chess_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Little Artist 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $little_sales = $row["SUM(fee_paid)"];
                    // echo $little_sales;
                    $total+=$little_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Spelling Bee 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $spelling_sales = $row["SUM(fee_paid)"];
                    // echo $spelling_sales;
                    $total+=$spelling_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Henna 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $henna_sales = $row["SUM(fee_paid)"];
                    // echo $henna_sales;
                    $total+=$henna_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Singing 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $singing_sales = $row["SUM(fee_paid)"];
                    // echo $singing_sales;
                    $total+=$singing_sales;
                    // echo "<br>";

                    $qry = " SELECT SUM(fee_paid) FROM participants WHERE event_name='Painting 1 Player' ";
                    $res = $con->query($qry);
                    $row = $res->fetch_assoc();
                    $painting_sales = $row["SUM(fee_paid)"];
                    // echo $painting_sales;
                    $total+=$painting_sales;
                    // echo "<br>";

                    // $qry = " SELECT SUM(fee_paid) FROM participants ";
                    // $res = $con->query($qry);
                    // $row = $res->fetch_assoc();
                    // $total_sales = $row["SUM(fee_paid)"];
                    // echo $total_sales;
                    // echo "<br>";
                    // echo $total;
                            
                ?>

                <h1 class="mt-4">Revenue</h1>

                <h5 class="head3">Total Sales: <?php echo $total ?></h5>
                <table class="table mytable col-lg-4">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="col-lg-1">Event Name</th>
                            <th scope="col">Sales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Visitor</td>
                            <td><?php echo $visitors_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>PUBG Squad</td>
                            <td><?php echo $pubg_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Tekken</td>
                            <td><?php echo $tekken_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>COD Squad</td>
                            <td><?php echo $cod_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>NFS</td>
                            <td><?php echo $nfs_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>FIFA</td>
                            <td><?php echo $fifa_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>DOTA Squad</td>
                            <td><?php echo $dota_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>CS-GO Squad</td>
                            <td><?php echo $csgo_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Ludo 1 Player</td>
                            <td><?php echo $ludo_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Cards 1 Player</td>
                            <td><?php echo $cards_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Chess 1 Player</td>
                            <td><?php echo $chess_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Little Artist 1 Player</td>
                            <td><?php echo $little_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>Spelling Bee 1 Player</td>
                            <td><?php echo $spelling_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>Henna 1 Player</td>
                            <td><?php echo $henna_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>Singing 1 Player</td>
                            <td><?php echo $singing_sales ?></td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>Painting 1 Player</td>
                            <td><?php echo $painting_sales ?></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
    
        <!-- Admin Dashboard Code End-->
    <?php include "admin_foot.php" ?>