<?php include "../connect.php";
    $res_start_date = "";
    $res_end_date = "";
    $res_start_time = "";
    $res_end_time = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Classes | Tutor</title>
    <link rel="stylesheet" href="../../css/myclasses_tutor.css">
</head>
<body>
    <?php include "tutor_head.php"; ?>
    <!-- Operator Team Code Start -->
    <div class="container-fluid">
        <h2 class="mt-4">Modify Class</h2>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- BOX-1 START -->
                    <form class="myform" action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="inputEmail4" >Enter Class ID to Modify</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="ID" name="search_class_id" required>
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
                        $search_class_id = $_POST["search_class_id"];
                        $_SESSION["search_class_id"] = $search_class_id;
                        $qry_search_id = " SELECT * FROM classes WHERE class_id = $search_class_id ";
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

                                $res_start_date = $row["start_date"];
                                $res_end_date = $row["end_date"];
                                $res_start_time = $row["start_time"];
                                $res_end_time = $row["end_time"];
//                                            echo $res_tutor_name;
//                                            echo $res_tutor_pass;
                            }
                        }
                        else{
                            echo "Something wrong with Query";
                        }
                    }
                    ?>

                    <hr width="500px">
                    <h4>class Details</h4>
                    <form class="myform" action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="inputEmail4" >class Start Date</label>
                                <input type="date" class="form-control" id="inputEmail4" placeholder="Start Date" name="new_start_date" value="<?php echo "$res_start_date" ?>" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="inputEmail4" >class End Date</label>
                                <input type="date" class="form-control" id="inputEmail4" placeholder="End Date" name="new_end_date" value="<?php echo "$res_end_date" ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="inputEmail4" >class Start Time</label>
                                <input type="time" class="form-control" id="inputEmail4" placeholder="Start Time" name="new_start_time" value="<?php echo "$res_start_time" ?>" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="inputEmail4" >class End Time</label>
                                <input type="time" class="form-control" id="inputEmail4" placeholder="End Time" name="new_end_time" value="<?php echo "$res_end_time" ?>" required>
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
                        $c_id = $_SESSION["search_class_id"];
                        $qry_delete = " DELETE FROM classes WHERE class_id = $c_id ";
                        if($con->query($qry_delete))
                        {
                            echo "Deleted Successfully";
                        }
                    }

                    if(isset($_POST["btn_update"]))
                    {
                        $new_start_date = $_POST["new_start_date"];
                        $new_end_date = $_POST["new_end_date"];
                        $new_start_time = $_POST["new_start_time"];
                        $new_end_time = $_POST["new_end_time"];

                        $c_id = $_SESSION["search_class_id"];
                        $qry_update = " UPDATE classes SET start_date = '".$new_start_date."', end_date = '".$new_end_date."', start_time = '".$new_start_time."', end_time = '".$new_end_time."' WHERE class_id = $c_id ";

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


            </div>

        </div>

    </div>
    <!-- Operator Team Code End -->
<?php include "tutor_foot.php" ?>