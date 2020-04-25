<?php include "../connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Tutor | Admin</title>

    <link rel="stylesheet" href="../../css/admin-dashboard.css">
</head>
<body>
    <?php include "admin_header.php" ?>
        <!-- Admin Dashboard Code Start-->

            <div class="container-fluid">
                <h1 class="mt-4">Add New Tutor</h1>
                
                <form class="myform" action="add_tutor_try.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Tutor Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" name="tutor_name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Tutor Password</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="123" name="tutor_pass"  required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Add</button>
                    <br>
                    <br>
                    <div class="form group-row">
                        <?php
                            if(isset($_GET["BadMessage"]))
                            {
                                echo "<div class='col-sm-4 alert alert-danger'>";
                                echo $_GET["BadMessage"];
                                echo "</div>";
                            }
                            if(isset($_GET["GoodMessage"]))
                            {
                                echo "<div class='col-sm-4 alert alert-success'>";
                                echo $_GET["GoodMessage"];
                                echo "</div>";
                            }
                        ?>
                    </div>
                </form>

                    <div class="container">
                        <h3 class="head3">Existing Tutors</h3>

                        <table class="table mytable">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width: 100px">Tutor ID</th>
                                <th scope="col" style="width: 400px">Tutor Name</th>
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
                            </tr>

                            <?php
                            }
                            }
                            else{echo "No Results Found!!";}

                            //bss yahan tak
                            ?>
                            </tbody>
                        </table>
                    </div>

            </div>
        <!-- Admin Dashboard Code End-->
    <?php include "admin_foot.php" ?>