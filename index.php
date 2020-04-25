<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym Management System</title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Baloo+Bhaina+2&family=Press+Start+2P&family=Russo+One&display=swap" rel="stylesheet">
</head>

<body>


    <nav class="navbar mynav">
        <div class="mydiv">
            <a id="techvalley" href="index.php">
                GYM
            </a>
            <ul>
                <li>Home</li>
                <li>Team</li>
                <li>About</li>
            </ul>
        </div>

    </nav>

    <div class="container mcontainer">
        <div class="row main-card">

            <div class="col-sm-6 col-md-3 cards" id="card1">
                <div class="card" style="width: 18rem;">
                    <img src="img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Admin Login</h5>
                        <p class="card-text">This is for admins only</p>
                        <a href="src/admin/admin_login.php" class="btn btn-dark">Login</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 cards" id="card2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tutor Login</h5>
                        <p class="card-text">This is for Tutors Login</p>
                        <a href="src/tutor/tutor_login.php" class="btn btn-dark">Login</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 cards" id="card2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Student Login</h5>
                        <p class="card-text">Thus is for Student Login</p>
                        <a href="src/student/student_login.php" class="btn btn-dark">Login</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <footer class="foot" style="background: #020002">
        <div class="row align-center copyright">
            <div class="col-sm-12" align="center" style="color:whitesmoke">
                <br>
                <h3>&copy;GYM2020 </a> </h3>
                <!-- <p><img src="../images/footer.png" id ="img_footer"></span></p> -->
            </div>
        </div>
    </footer>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>