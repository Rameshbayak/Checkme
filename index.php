<!DOCTYPE HTML>
<html>
<head>
  <title>Check Me</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Grenze&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet"/>
<!-- Css -->
  <link rel="stylesheet" href="css/Design.css"/>
  <link rel="stylesheet" href="css/Animation.css"/>
</head>
<body>
  <div class="w3-container" style="padding: 0;">
    <div class="w3-bar  w3-border heading">
      <a href="index.php" class="w3-bar-item w3-button w3-mobile input"><img src="img/12.png" width="200" height="67" /></a>
      <input type="text" class="w3-bar-item w3-input w3-white w3-mobile w3-right input" placeholder="Search.." style="margin-top: 15px;"/>
    </div>
  </div>
    
  <div class="container-fluid" style="padding-top: 30px;">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" style="padding: 0; ">
         <a data-toggle="modal" href="#doctorMdl" style="text-decoration: none; color: black;">
          <div class="container" style="width: 100%; background-color:lavender; border:none;">
            <div class="card text-center" >
              <div class="ch-item">
                <div class="ch-info">
                  <div class="ch-info-front">
                    <img class="cdimg" src="img/doctor.png" alt="Doctor">
                  </div>
                  <div class="ch-info-back">
                    <img class="cdimg" src="img/doctor.png" alt="Doctor">
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h4 class="card-title">My Doctor/s</h4>
                <p class="card-text cardtxt">Some example text some example text. John Doe is an architect and engineer</p>
              </div>
            </div>
            <br/>
          </div>
        </a>
        <div class="modal fade" id="doctorMdl">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
              <div class="modal-header mdlHead">
                <h3 class="modal-title mdlTitle" >YOUR SAVED DOCTORS</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body mdlBody">
                <?php
                echo '<div class="table-responsive">';
                echo '<table id ="tbl" class="table table-hover table table-bordered" tbl>';
                echo '<thead>';
                echo '<tr>';
                echo'<th>S.No.</th>';
                echo'<th>Doctor Names</th>';
                echo'<th>Specialist</th>';
                echo'<th>Hospital Names</th>';
                echo'<th>NMC No.</th>';
                echo'<th>Clinic Names</th>';
                echo'<th>Saved Date</th>';
                echo '</tr>';
                echo'</thead>';
                echo '<tbody>';
                echo '<tr>';
                echo '<td>1</td>';
                echo '<td>Dr Govinda K.C.</td>';
                echo '<td>Cardiologist</td>';
                echo '<td>Bir Hospital</td>';
                echo '<td>010228</td>';
                echo '<td>Nepal Health Clinic</td>';
                echo '<td>08/19/2019</td>';
                echo '</tr>';
                echo'</tbody>';
                echo'</table>';
                echo '</div>';
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-4" style="padding: 0;">
        <a data-toggle="modal" href="#clinicMdl" style="text-decoration: none; color: black;">
         <div class="container" style="width: 100%; background-color:lavender; border:none;">
            <div class="card text-center" style="width:100%">
              <div class="ch-item">
                <div class="ch-info">
                  <div class="ch-info-front">
                    <img class="cdimg" src="img/clinic.png" alt="Clinic">
                  </div>
                  <div class="ch-info-back">
                    <img class="cdimg" src="img/clinic.png" alt="Clinic">
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h4 class="card-title">My Clinic/s</h4>
                <p class="card-text cardtxt">Some example text some example text. John Doe is an architect and engineer</p>
              </div>
            </div>
            <br/>
          </div>
        </a>
        <div class="modal fade" id="clinicMdl">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
              <div class="modal-header mdlHead">
                <h3 class="modal-title mdlTitle" >YOUR SAVED CLINICS</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body mdlBody">
                <?php
                echo '<div class="table-responsive">';
                echo '<table id ="tbl" class="table table-hover table table-bordered">';
                echo '<thead>';
                echo '<tr>';
                echo'<th>S.No.</th>';
                echo'<th>Clinic Names</th>';
                echo'<th>Specialist</th>';
                echo'<th>Address</th>';
                echo'<th>Contact Number</th>';
                echo'<th>Saved Date</th>';
                echo '</tr>';
                echo'</thead>';
                echo '<tbody>';
                echo '<tr>';
                echo '<td>1</td>';
                echo '<td>Nepal Heart Clinic</td>';
                echo '<td>Cardiology</td>';
                echo '<td>Maharajgunj</td>';
                echo '<td>01-4312323</td>';
                echo '<td>08/19/2019</td>';
                echo '</tr>';
                echo'</tbody>';
                echo'</table>';
                echo '</div>';
                ?>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>

    <div class="container-fluid" style="padding-top: 10px;">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" style="padding: 0;">
          <a data-toggle="modal" href="#findDoctorMdl" style="text-decoration: none; color: black;">
            <div class="container" style="width: 100%; background-color:lavender; border:none;">
              <div class="card text-center" style="width:100%">
                <div class="ch-item">
                  <div class="ch-info">
                    <div class="ch-info-front">
                      <img class="cdimg" src="img/searchdoctor.png" alt=" Search Doctor">
                    </div>
                    <div class="ch-info-back">
                      <img class="cdimg" src="img/searchdoctor.png" alt=" Search Doctor">
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Find Doctor</h4>
                  <p class="card-text cardtxt">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
              </div>
              <br/>
            </div>
          </a>
          <div class="modal fade" id="findDoctorMdl">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header mdlHead">
                  <h3 class="modal-title mdlTitle" >SEARCH FILTERS</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body mdlBody">
                  <input type="text" placeholder="Name of the doctor" name="doctorName" required>
                  <input type="text" placeholder="Name of the clinic" name="clinicName" required>
                  <input type="text" placeholder="Location" name="location" required>
                  <input type="text" placeholder="Specialist" name="doctorSpecialist" required>
                </div>
                <div class="modal-footer mdlFoot">
                  <button type="button" class="btn btn-success">APPLY</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-4" style="padding: 0;">
          <a data-toggle="modal" href="#findClinicMdl" style="text-decoration: none; color: black;">
            <div class="container" style="width: 100%; background-color:lavender; border:none;">
              <div class="card text-center" style="width:100%">
                <div class="ch-item">
                  <div class="ch-info">
                    <div class="ch-info-front">
                      <img class="cdimg" src="img/searchclinic.png" alt="Search clinic">
                    </div>
                    <div class="ch-info-back">
                      <img class="cdimg" src="img/searchclinic.png" alt="Search clinic">
                    </div>  
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Find Clinic</h4>
                  <p class="card-text cardtxt">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
              </div>
              <br/>
            </div>
          </a>
          <div class="modal fade" id="findClinicMdl">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header mdlHead">
                  <h3 class="modal-title mdlTitle" >SEARCH FILTERS</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body mdlBody">
                  <input type="text" placeholder="Name of the clinic" name="clinicName" required>
                  <input type="text" placeholder="Clinic/s near me" name="clinicNearMe" required>
                  <input type="text" placeholder="Location" name="location" required>
                  <input type="text" placeholder="Specialist" name="clinicSpecialist" required>
                </div>
                <div class="modal-footer mdlFoot">
                  <button type="button" class="btn btn-success">APPLY</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-1" style="background-color:lavender;"></div>
      </div>
    </div>

<div class="container-fluid" style="padding-top: 10px;">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4" style="padding: 0;">
      <a data-toggle="modal" href="#findPharmacyMdl" style="text-decoration: none; color: black;">
        <div class="container" style="width: 100%; background-color:lavender; border:none;">
          <div class="card text-center" style="width:100%">
            <div class="ch-item">       
              <div class="ch-info">
                <div class="ch-info-front">
                  <img class="cdimg" src="img/searchpharmacy.png" alt="Pharmacy">
                </div>
                <div class="ch-info-back">
                  <img class="cdimg" src="img/searchpharmacy.png" alt="Pharmacy">
                </div>  
              </div>
            </div>
          <div class="card-body">
            <h4 class="card-title">Find Pharmacy</h4>
            <p class="card-text cardtxt">Some example text some example text. John Doe is an architect and engineer</p>
          </div>
        </div>
        <br/>
      </div>
    </a>
    <div class="modal fade" id="findPharmacyMdl">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header mdlHead">
            <h3 class="modal-title mdlTitle" >SEARCH FILTERS</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body mdlBody">
            <input type="text" placeholder="Name of the pharmacy" name="pharmacyName" required>
            <input type="text" placeholder="Pharmacy near me" name="pharmacyNearMe" required>
            <input type="text" placeholder="Location" name="location" required>
          </div>
          <div class="modal-footer mdlFoot">
            <button type="button" class="btn btn-success">APPLY</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-4" style="padding: 0;">
      <a data-toggle="modal" href="#loginMdl" style="text-decoration: none; color: black;">
       <div class="container" style="width: 100%; background-color:lavender; border:none;">
          <div class="card text-center" style="width:100%">
            <div class="ch-item">       
              <div class="ch-info">
                <div class="ch-info-front">
                  <img class="cdimg" src="img/login.png" alt="Login">
                </div>
                <div class="ch-info-back">
                  <img class="cdimg" src="img/login.png" alt="Login">
                </div>  
              </div>
            </div>
            <div class="card-body">
              <h4 class="card-title" style="">Be a Part</h4>
              <p class="card-text cardtxt">Some example text some example text. John Doe is an architect and engineer</p>
            </div>
          </div>
          <br/>
        </div>
      </a>
      <div class="modal fade" id="loginMdl">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header mdlHead">
              <h3 class="modal-title mdlTitle" >REGISTRATION FORM</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="regForm" action="/action_page.php" method="POST">
              <div class="tab">
                <h3>NAME</h3>
                <p><input type="text" placeholder="First name" oninput="this.className = ''" name="fname"></p>
                <p><input type="text" placeholder="Last name" oninput="this.className = ''" name="lname"></p>
                <h3>BIRTHDAY</h3>
                <p><input type="date" oninput="this.className = ''" name="date"  min="1920-12-31"  max="2001-01-01"></p>
              </div>
              <div class="tab">
                <h3>CONTACT INFO</h3>
                <p><input type="email" placeholder="E-mail Address" oninput="this.className = ''" name="email"></p>
                <p><input type="text" placeholder="Phone Number" oninput="this.className = ''" name="phone"></p>
              </div>
              <div class="tab">
                <h3>LOGIN INFO</h3>
                <p><input type="text" placeholder="Username" oninput="this.className = ''" name="uname"></p>
                <p><input type="text" placeholder="Password" oninput="this.className = ''" name="pword" type="password"></p>
              </div>
              <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
              </div>
              <div style="text-align:center;margin-top:10px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<script src="js/checkMe.js"> </script>
</body>
</html>