<?php
    session_start();
    if(!isset($_SESSION["tutor"]))
    { //if login in session is not set
        header("Location:../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/tutor_header.css">
    <link rel="stylesheet" href="../../css/simple-sidebar.css" rel="stylesheet">

    <!--FONT LINK-->
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text&display=swap" rel="stylesheet">
</head>
<body>  
    <!-- Image and text -->
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <a class="navbar-brand" href="operator_dashboard.php">
                    <img src="../../img/doomslogo.png" width="70" height="50" class="d-inline-block align-top" alt="">
                    DOOMSDAY 2019
                </a> </div>
            <div class="list-group list-group-flush">
                <a href="my_profile.php" class="list-group-item list-group-item-action bg-light">My Profile</a>
                <a href="search_participant.php" class="list-group-item list-group-item-action bg-light">Search
                    Participant</a>
                <a href="register_participant.php" class="list-group-item list-group-item-action bg-light">Register New
                    Participant</a>
                <a href="all_participants.php" class="list-group-item list-group-item-action bg-light">All Participants</a>
                <a href="operator_team.php" class="list-group-item list-group-item-action bg-light">Operators Team</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Feedback/Suggestions</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light border-bottom mynavbar">
                <button class="btn btn-success mybtn" id="menu-toggle">Operator Panel</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Welcome,<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION["tutor"]; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="my_profile.php">My Profile</a>
                                <a class="dropdown-item" href="change_password.php">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="operator_logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

