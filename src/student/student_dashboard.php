<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../../css/tutor_dashboard.css">
</head>

<body>
    <?php include "student_head.php" ?>
            <!-- Opertaor Team Code Start -->
            <div class="container-fluid">
                <h1 class="mt-4">Weclome, <?php echo $_SESSION["student"]; ?></h1>

                <div class="jumbotron">
                    <div class="container-fluid">
                        <h1 class="mt-4">Operator guide:</h1>
                        <ul>
                            <li>On your left side, there is a operator panel</li>
                            <li>You can hide and see the panel by clicking the <code>Operator Panel</code> button on Nav Bar</li>
                            <li>To change your password, click on your name at top-right of the Nav Bar. Then click on <code>change password</code></li>
                            <li>To search a participant, at operator panel click on <code>Search Participant</code>, enter the ticket number </li>
                            <li>To register a new participant, at operator panel click on <code>Register New Participant</code> and fill the form </li>
                            <li>To check the reports of registrations, click on <code>All Participants</code> </li>
                            <li>To logout, at top-right of Nav Bar, click on your name </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Opertaor Team Code End -->
        <?php include "student_foot.php" ?>