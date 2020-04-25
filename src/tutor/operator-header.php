
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Dashboard - Tech Valley</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/student-dashboard.css">
    <link rel="stylesheet" href="../../css/simple-sidebar.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,400i&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Lobster Two', cursive
        }
    </style>
</head>

<body>


    <!-- Image and text -->
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <a class="navbar-brand" href="">
                    <img src="../../img/nuceslogo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                    DOOMSDAY
                </a> </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">My Profile</a>
                <a href="search-participant.html" class="list-group-item list-group-item-action bg-light">Search
                    Participant</a>
                <a href="register-participant.html" class="list-group-item list-group-item-action bg-light">Register New
                    Participant</a>
                <a href="all-participants.html" class="list-group-item list-group-item-action bg-light">All Participants</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Team</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Feedback/Suggestions</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light border-bottom mynavbar">
                <button class="btn btn-success mybtn" id="menu-toggle">Dashboard</button>

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
                                Operator Name
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Student Dashboard</h1>

                <div class="jumbotron">
                    <h1 class="display-4">Welcome, Student</h1>
                    <p class="lead">This is a simple hero unit, This is Tech Valley, you can learn here from industry
                        professionals</p>
                    <img src="../../img/pic.png" width="80" height="80">
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger
                        container.</p>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>





    <footer class="foot" style="background: #020002">
        <div class="row align-center copyright">
            <div class="col-sm-12" align="center" style="color:whitesmoke">
                <br>
                <h3>&copy;DOOMSDAY 2019 - All Rights Reserved</h3>
                <!-- <p><img src="../images/footer.png" id ="img_footer"></span></p> -->
            </div>
        </div>
    </footer>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>