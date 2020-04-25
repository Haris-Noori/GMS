<?php
    include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" href="../../css/admin-dashboard.css">
</head>
<body>
    <?php include "admin_header.php" ?>
        <!-- Admin Dashboard Code Start-->

            <div class="container-fluid">
                <h1 class="mt-4">My Profile</h1>
                <br>
                <h5 class="mt-4">You can change your password here</h5>

                <form class="myform" action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-4">

                            <input name="input_pass" type="password" class="form-control" id="inputEmail4" placeholder="***">

                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" name="btn_id" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>

                <?php
                if(isset($_POST["btn_id"]))
                {
                    $in_pass = $_POST["input_pass"];

                    $qry = " UPDATE admins SET admin_pass='".$in_pass."' WHERE admin_name='".$_SESSION["admin"]."' ";

                    if($con->query($qry))
                    {
                        // echo "Password changed";
                        $msg = "hello";
                        echo "<div class='col-sm-4 alert alert-success'>";
                        echo "Password changed successfully";
                        echo "</div>";
                    }
                }
                ?>
                
            </div>
    
        <!-- Admin Dashboard Code End-->
    <?php include "admin_foot.php" ?>