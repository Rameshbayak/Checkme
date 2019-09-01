<!DOCTYPE HTML>
<html>
<head>
	<title>Clinic home page</title>
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
    <nav>
    <ul>
    <li>
    <a href = "clinicIndex.php">
    <div style="width: 100%; padding: 30px 0 30px 0;">
      <img src = "img/home-icon.png">
      <span class = "navText">&nbsp; Home</span>
    </div>
    </a>
    </li>

    <li>
    <a href="">
    <div style="width: 100%; padding: 30px 0 30px 0;">
      <img src = "img/clinic-info.png">
      <span class = "navText" >&nbsp; About Me</span>
    </div>
     </a>
</li>

<li>
  <a style="cursor: default;">
    <div style="width: 100%;">
       <div data-toggle="collapse" data-target="#servicesBtn">
        <img src = "img/services.png">
      <span class = "navText" action="post">&nbsp; Services</span>
      </div>
      <div id="servicesBtn" class="collapse">
        <ul class="nav flex-column">
    <li>
        <a data-toggle="modal" href="#addForm1" style="text-decoration: none; color: black;">
    <div style="width: 100%; padding-top:0">
      <img src = "img/service-add.png">
      <span class = "navText">&nbsp; Add</span>
    </div>
  </a>
  <div class="modal fade" id="addForm1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content" style="padding: 0; text-align: left;">
            <div class="modal-header mdlHead">
              <h3 class="modal-title mdlTitle" style="text-align: left;" >ADD SERVICES</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
              <div class="modal-body mdlBody">
                  <?php

                  $con = mysqli_connect('localhost','root','','clinic');

                  if(isset($_POST['done'])){

                        $A = $_POST['services'];
                        $B = $_POST['contents'];

                    $q = " INSERT INTO `services`(`services`, `contents`) VALUES ('$A', '$B')";

                    $query = mysqli_query($con, $q);

                  }

                ?>
            <form method="post">
              
              <label> Clinic Name</label>
  <input type="text" placeholder disabled="company" name="cid" class="form-control" required="100">

  <label>Services</label>
  <input type="text" name="services" class="form-control" required="100">

  <label style="padding-top: 10px;">Details</label>
   <input type="text" name="contents" class="form-control" required="100" style="width: 50%;">
    <input type="text" name="contents" class="form-control" required="100" style="width: 50%;">
     <input type="text" name="contents" class="form-control" required="100" style="width: 50%;">
  <input type="text" name="contents" class="form-control" required="100" style="width: 50%;">
  </div>
  <div class="modal-footer mdlFoot">
           <button class="btn btn-success" type="submit" name="done"> Submit </button>
          </div>
            </form>
          </div>
        </div>
      </div>    
</li>
    <li style="border: none;">
   <a data-toggle="modal" href="#display1" style="text-decoration: none; color: black;">
    <div style="width: 100%; padding-bottom: 0;">
      <img src = "/GroupProject/public/resources/images/dashboardicon.png">
      <span class = "navText">&nbsp; Edit/Delete</span>
    </div>
  </a>
  <div class="modal fade" id="display1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content" style="padding: 0; text-align: left;">
            <div class="modal-header mdlHead">
              <h3 class="modal-title mdlTitle" style="text-align: left;" >SERVICES' INFORMATION</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
              <div class="modal-body mdlBody">
           <div class="table-responsive">
          <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
               <tr>
               
               <th> Cid </th>
               <th> Services </th>
               <th> Contents </th>
               <th> Actions </th>

                </tr >

                <?php

                include 'conn.php'; 
               $q = "select * from services ";

                $query = mysqli_query($con,$q);

                while($res = mysqli_fetch_array($query)){
               ?>
               <tr class="text-center">
               <td> <?php echo $res['cid'];  ?> </td>
               <td> <?php echo $res['services'];  ?> </td>
               <td> <?php echo $res['contents'];  ?> </td>

               <td> <button class="btn-danger btn"> <a href="delete.php?cid=<?php echo $res['cid']; ?>" class="text-white"> Delete </a>  </button><br><br>
               <button class="btn-primary btn"> <a href="update.php?cid=<?php echo $res['cid']; ?>" class="text-white"> Update </a> </button> 
              </td>

                </tr>

                <?php 
               }
                ?>
 
 </table> 
 </div>
            </div>
          </div>
        </div>
      </div>
  
</li>
  </ul>
    
  </div>
    </div>
  </a>
</li>

<li>
  <a style="cursor: default;">
    <div style="width: 100%; height: 100%;">
    <div data-toggle="collapse" data-target="#doctorBtn">
        <img src = "img/doctors.png">
      <span class = "navText">&nbsp; Doctors</span>
      </div>
      <div id="doctorBtn" class="collapse">
        <ul class="nav flex-column">
    <li>
        <a data-toggle="modal" href="#addForm2" style="text-decoration: none; color: black;">
    <div style="width: 100%; padding-top: 0;">
      <img src = "img/doctor-add.png">
      <span class = "navText">&nbsp; Add</span>
    </div>
  </a>
  <div class="modal fade" id="addForm2">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content" style="padding: 0; text-align: left;">
            <div class="modal-header mdlHead">
              <h3 class="modal-title mdlTitle" style="text-align: left;" >ADD DOCTOR'S INFORMATION</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
              <div class="modal-body mdlBody">
            <form action="/action_page.php" method="POST">
              <label> Doctor Name:</label>
  <input type="text" name="dname" class="form-control" required="100">

  <label>Specialist:</label>
  <input type="text" name="specialist" class="form-control" required="100">

  <label>NMC NO:</label>
  <input type="text" name="nmcno" class="form-control" required="100">

  <label>Hospital:</label>
  <input type="text" name="hospital" class="form-control" required="100">

  <label>Research Interest/s:</label>
  <input type="text" name="rtopic" class="form-control" required="100">

  <label>Experinece/s:</label>
  <input type="text" name="experince" class="form-control">

  <label>From:</label>
  <input type="date" name="fdate" class="form-control" required="100" >

  <label style="padding-top: 10px;">To:</label>
  <input type="date" name="todate" class="form-control" required="100">
  </div>
  <div class="modal-footer mdlFoot">
           <button class="btn btn-success" type="submit" name="done"> Submit </button>
          </div>
            </form>
          </div>
        </div>
      </div>
</li>

    <li style="border: none;">
 <a data-toggle="modal" href="#display2" style="text-decoration: none; color: black;">
    <div style="width: 100%;padding-bottom: 0;">
      <img src = "/GroupProject/public/resources/images/dashboardicon.png">
      <span class = "navText">&nbsp; Edit/Delete</span>
    </div>
  </a>
  <div class="modal fade" id="display2">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content" style="padding: 0; text-align: left;">
            <div class="modal-header mdlHead">
              <h3 class="modal-title mdlTitle" style="text-align: left;" >DOCTOR'S INFORMATION</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
              <div class="modal-body mdlBody">
           <div class="table-responsive">
                <table id ="tbl" class="table table-hover table table-bordered">
                <thead>
                <tr>
 
 
 <th> Doctor's Name </th>
 <th> Specialist </th>
 <th> Hospital </th>
 <th> Experience/s </th>
 <th> Actions </th>

  </tr >
  </thead>
  <tbody>
  
  </tbody>
 
 </table> 
 </div>
            </div>
          </div>
        </div>
      </div>
  
</li>
  </ul>
    
  </div>
    </div>
  </a>
  
</li>

</ul>
</nav>

<section>

</section>

</body>
</html>