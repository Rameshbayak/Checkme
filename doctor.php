<!DOCTYPE HTML>
<html>
<head>
<title>Doctor's Profile</title>
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
<!-- Heading Part -->
  <div class="w3-container" style="padding: 0;">
    <div class="w3-bar  w3-border heading">
      <a href="index.php" class="w3-bar-item w3-button w3-mobile input"><img src="img/12.png" width="200" height="67" /></a>
      <input type="text" class="w3-bar-item w3-input w3-white w3-mobile w3-right input" placeholder="Search.." style="margin-top: 15px;"/>
    </div>
  </div>
<!-- /Heading Part -->  
  <div class="container" style="width: 100%;">
    <div class="imga">
      <img  src="img/govinda.jpg" alt="Avatar" style="width:100%; height: auto; pointer-events: none;">
    </div>
    <div style="padding: 0 10px 20px 10px;">
      <h2>Dr. Govinda K.C. </h2>
                  <p>Email: govinda@gmail.com</p>
                  <p>Contact Number: 9818050008</p>
                  <p>Porfolio: <a href="">Portfolio link</a></p>
                  <button class="btn-btn success" name="Save">SAVE</button>
                </div>
</div>
                <div class="col-sm-12" style="padding: 2px 0 10px 0; ">
                <div class="container" style="width: 100%; background-color:white; padding-bottom:10px;">
                <div class="card" style= width: 100%; "border-radius: 10px;" >
                <div class="card-body">
                  <h3 style="background-color: lavender;">Experiences</h3>
                  <?php
                  echo '<div class="table-responsive">';
                  echo '<table id ="tbl" class="table table-hover table table-bordered">';
                  echo '<thead>';
                  echo '<tr>';
                  echo'<th>Hospital Names</th>';
                  echo'<th colspan="2">Year</th>';
                  echo '</tr>';
                  echo'</thead>';
                  echo '<tbody>';
                  echo '<tr>';
                  echo'<td> Civil Hospital </td>';
                  echo'<td> From : </td>';
                  echo'<td> To: </td>';
                  echo '</tr>';
                  echo'</tbody>';
                  echo'</table>';
                  echo '</div>';
                  ?>
                  <h3 style="background-color: lavender;">Researches</h3>
                  <?php
                  echo '<div class="table-responsive">';
                  echo '<table id ="tbl" class="table table-hover table table-bordered">';
                  echo '<thead>';
                  echo '<tr>';
                  echo'<th>Topics</th>';
                  echo'<th>Details</th>';
                  echo '</tr>';
                  echo'</thead>';
                  echo '<tbody>';
                  echo '<tr>';
                  echo'<td>The rise of intermittent fasting diets</td>';
                  echo'<td>Suggests that intermittent fasting can actually bring numerous other health benefits.</td>';
                  echo '</tr>';
                  echo'</tbody>';
                  echo'</table>';
                  echo '</div>';
                  ?>
                </div>
                </div>
                </div>
                </div>
 </body>
</html>