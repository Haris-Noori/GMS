<?php include "../connect.php";
    $res_tutor_name = "";
    $res_tutor_pass = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modify Tutor | Admin</title>

    <link rel="stylesheet" href="../../css/modify_tutor.css">
</head>
<body>
    <?php include "admin_header.php" ?>
        <!-- Admin Dashboard Code Start-->
            <div class="container-fluid">
                <h1 class="mt-4">Modify Tutor</h1>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- BOX-1 START -->
                            <form class="myform" action="" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="inputEmail4" >Enter Tutor ID to Modify</label>
                                        <input type="number" class="form-control" id="inputEmail4" placeholder="ID" name="search_tutor_id" required>
                                    </div>
                                    <div class="form-group col-sm-3" style="margin-top: 32px">
                                        <label for="inputEmail4" ></label>
                                        <button name="search_id" type="submit" class="btn col-sm-6 btn-success">Search</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST["search_id"]))
                                {
                                    $search_tutor_id = $_POST["search_tutor_id"];
                                    $_SESSION["search_tutor_id"] = $search_tutor_id;
                                    $qry_search_id = " SELECT * FROM tutors WHERE tutor_id = $search_tutor_id ";
                                    if($con->query($qry_search_id))
                                    {
                                        $res = $con->query($qry_search_id);

                                        if($res->num_rows == 0)
                                        {
                                            echo "NO Match Found";
                                        }
                                        else
                                        {
                                            $row = $res->fetch_assoc();

                                            $res_tutor_name = $row["tutor_name"];
                                            $res_tutor_pass = $row["tutor_pass"];
//                                            echo $res_tutor_name;
//                                            echo $res_tutor_pass;
                                        }
                                    }
                                    else{
                                        echo "Something wrong with Query";
                                    }
                                }
                            ?>

                            <hr width="300px">
                            <h4>Tutor Details</h4>
                            <form class="myform" action="" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="inputEmail4" >Tutor Name</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="new_tutor_name" value="<?php echo "$res_tutor_name" ?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="inputEmail4" >Tutor Password</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Password" name="new_tutor_pass" value="<?php echo "$res_tutor_pass" ?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-danger" name="btn_delete">Delete</button>
                                    <button type="submit" class="btn btn-success" name="btn_update" style="margin-left: 20px">Update</button>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST["btn_delete"]))
                                {
                                    $t_id = $_SESSION["search_tutor_id"];
                                    $qry_delete = " DELETE FROM tutors WHERE tutor_id = $t_id ";
                                    if($con->query($qry_delete))
                                    {
                                        echo "Deleted Successfully";
                                    }
//                                    echo "DELETE BUTTON PRESSED";
                                }

                                if(isset($_POST["btn_update"]))
                                {
                                    $new_tutor_name = $_POST["new_tutor_name"];
                                    $new_tutor_pass = $_POST["new_tutor_pass"];

                                    $t_id = $_SESSION["search_tutor_id"];
                                    $qry_update = " UPDATE tutors SET tutor_name = '".$new_tutor_name."', tutor_pass = '".$new_tutor_pass."' WHERE tutor_id = $t_id ";

                                    if($con->query($qry_update))
                                    {
                                        echo "Updated Successfully";
                                    }
                                    else
                                    {
                                        echo "Updation Failed";
                                    }
                                }
                            ?>
                        <!-- BOX END -->
                        </div>

                        <div class="col-sm-6">
                        <!-- BOX2 START -->
                            <table class="table mytable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Tutor ID</th>
                                        <th scope="col">Tutor Name</th>
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
                        <!-- BOX END -->
                        </div>
                        

                        
                    </div>

                    
                </div>
                
                
            </div>
        <!-- Admin Dashboard Code End-->
    <?php include "admin_foot.php" ?>