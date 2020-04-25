<?php include "../connect.php";
    $res_student_name = "";
    $res_student_pass = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modify Student | Admin</title>

    <link rel="stylesheet" href="../../css/modify_student.css">
</head>
<body>
    <?php include "admin_header.php" ?>
        <!-- Admin Dashboard Code Start-->

            <div class="container-fluid">
                <h1 class="mt-4">Modify Student</h1>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- BOX-1 START -->
                            <form class="myform" action="" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="inputEmail4" >Enter Student ID to Modify</label>
                                        <input type="number" class="form-control" id="inputEmail4" placeholder="ID" name="search_student_id" required>
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
                                $search_student_id = $_POST["search_student_id"];
                                $_SESSION["search_student_id"] = $search_student_id;
                                $qry_search_id = " SELECT * FROM students WHERE student_id = $search_student_id ";
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

                                        $res_student_name = $row["student_name"];
                                        $res_student_pass = $row["student_pass"];
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
                            <h4>Student Details</h4>
                            <form class="myform" action="" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="inputEmail4" >Student Name</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="new_student_name" value="<?php echo "$res_student_name" ?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="inputEmail4" >Student Password</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Password" name="new_student_pass" value="<?php echo "$res_student_pass" ?>" required>
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
                                $s_id = $_SESSION["search_student_id"];
                                $qry_delete = " DELETE FROM students WHERE student_id = $s_id ";
                                if($con->query($qry_delete))
                                {
                                    echo "Deleted Successfully";
                                }
                            }

                            if(isset($_POST["btn_update"]))
                            {
                                $new_student_name = $_POST["new_student_name"];
                                $new_student_pass = $_POST["new_student_pass"];

                                $s_id = $_SESSION["search_student_id"];
                                $qry_update = " UPDATE students SET student_name = '".$new_student_name."', student_pass = '".$new_student_pass."' WHERE student_id = $s_id ";

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
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Student Name</th>
                                </tr>
                                </thead>
                                <?php
                                $qry = " SELECT * FROM students ";
                                $res = $con->query($qry);
                                $result = "";
                                if($res->num_rows > 0)
                                {
                                echo "Total Students: ".$res->num_rows;
                                while($row = $res->fetch_assoc())
                                {
                                ?>

                                <tbody>
                                <tr>
                                    <th scope="row"> <?php echo " ".$row["student_id"]." " ?> </th>
                                    <td><?php echo " ".$row["student_name"]." " ?></td>
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