<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Participant | Operator</title>
    
    <!-- <link type="text/css" rel="stylesheet" href="../../css/register_participant.css"> -->
</head>

<body>
    <?php include "tutor_head.php"; ?>
    <link type="text/css" rel="stylesheet" href="../../css/register_participant.css">
    <!-- Register Participant Code Start -->
    <div class="container-fluid">
        <h1 class="mt-4">Participant Registration Form</h1>


        <form class="myform" action="qr-generator/get_data.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Participant Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" name="content">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">CNIC Number (Must Be 13 Digits)</label>
                    <input type="number" name="cnic" class="form-control" id="inputPassword4"
                        placeholder="Must be 13 Digits">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Contact Number</label>
                    <input type="number" name="phone_no" class="form-control" id="inputPassword4" placeholder="03xxxx 11-Digits">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Select Event</label>

                    <select class="custom-select" id="game_options" name="event_name">
                        <option value="Free">Free</option>
                        <option value="Visitor">Visitor</option>
                        <option value="PUBG">PUBG - Squad</option>
                        <option value="Tekken">Tekken</option>
                        <option value="COD">COD - Squad</option>
                        <option value="FIFA">FIFA</option>
                        <option value="NFS">NFS</option>
                        <option value="DOTA">DOTA - Squad</option>
                        <option value="CS-GO">CS-GO Squad</option>
                        <option value="Ludo 1 Player">Ludo 1 Player</option>
                        <option value="Cards 1 Player">Cards 1 Player</option>
                        <option value="Chess 1 Player">Chess 1 Player</option>
                        <option value="Little Artist 1 Player">Little Artist 1 Player</option>
                        <option value="Spelling Bee 1 Player">Spelling Bee 1 Player</option>
                        <option value="Henna 1 Player">Henna 1 Player</option>
                        <option value="Singing 1 Player">Singing 1 Player</option>
                        <option value="Painting 1 Player">Painting 1 Player</option>
                    </select>
                </div>
            </div>

            <div id="other_members" style="display:none"> 
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Participant Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Member One" name="mem1">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Participant Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Member Two" name="mem2">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Participant Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Member Three" name="mem3">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Participant Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Member Four" name="mem4">
                </div>
            </div>
            </div>
           <!--NEW BUTTON START-->
            <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModalCenter">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Yes</button>
      </div>
    </div>
  </div>
</div>
            <!--NEW BUTTON END-->
        </form>

        <center>


        <h3 class="head3">For Visitors</h3>
        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Visitor</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>

        <h3 class="head3">E-Gaming Events</h3>
        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>PUBG Squad</td>
                    <td>1200</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Tekken</td>
                    <td>350</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>COD Squad</td>
                    <td>1500</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>NFS</td>
                    <td>350</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>FIFA</td>
                    <td>350</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>DOTA Squad</td>
                    <td>1500</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>CS-GO Squad</td>
                    <td>1500</td>
                </tr>
            </tbody>
        </table>

        <h3 class="head3">Indoor Gaming</h3>
        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ludo 1 Player</td>
                    <td>200</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Cards 1 Player</td>
                    <td>200</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Chess 1 Player</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>

        <h3 class="head3">Kids Modules</h3>
        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Little Artist 1 Player</td>
                    <td>200</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Spelling Bee 1 Player</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>

        <h3 class="head3">Female Modules</h3>
        <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Henna 1 Player</td>
                    <td>100</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Singing 1 Player</td>
                    <td>100</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Painting 1 Player</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
        </center>

    </div>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script>
        
        $(function(){
            $("#game_options").on("change",function(event)
            {
                var opt = this.options[this.selectedIndex].text;
                // console.log(opt);
                var squad_games = ["PUBG - Squad","COD - Squad","DOTA - Squad","CS-GO Squad"];
                var check = squad_games.includes(opt);
                // console.log(check);
                if(check)
                {
                    $("#other_members").show();
                }
                else{
                    $("#other_members").hide();
                }
               

            })
        })

    </script>
    <!-- Operator Team Code End -->
    <?php include "tutor_foot.php" ?>