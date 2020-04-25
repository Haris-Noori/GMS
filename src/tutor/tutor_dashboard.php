<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tutor Dashboard</title>
    <link rel="stylesheet" href="../../css/tutor_dashboard.css">
</head>

<body>
    <?php include "tutor_head.php" ?>
            <!-- Opertaor Team Code Start -->
            <div class="container-fluid">
                <h1 class="mt-4">Weclome, <?php echo $_SESSION["tutor"]; ?></h1>

                <div class="jumbotron">
                    <div class="container-fluid">
                        <h1 class="mt-4">Tutor guide:</h1>
                        <ul>
                            <li>On your left side, there is a tutor panel</li>
                            <li>You can hide and see the panel by clicking the <code>Tutor Panel</code> button on Nav Bar</li>
                            <li>To change your password, click on your name at top-right of the Nav Bar. Then click on <code>change password</code></li>
                            <li>To logout, at top-right of Nav Bar, click on your name </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Opertaor Team Code End -->
        <?php include "tutor_foot.php" ?>