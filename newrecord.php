<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'php/conn.php';

  $gender_value = array("Male"=>"1", "Female"=>"2", "Other"=>"3");
  $marital_value = array("Married"=>"1", "Single"=>"2", "Divorce"=>"3", "Widowed"=>"4");

  $p_fname = $_POST['pfname'];
  $p_lname = $_POST['plname'];
  $p_gender = $gender_value[$_POST['gender']];
  $p_marital = $marital_value[$_POST['marital']];
  $p_age = $_POST['age'];
  $p_city = $_POST['city'];
  $p_state = $_POST['state'];
  $p_address = $_POST['address'];
  $p_cnumber = $_POST['cnumber'];
  $p_emailid = $_POST['emailid'];


  $sql = "INSERT INTO tbl_patient (p_first_name, p_last_name, p_gender, p_marital, p_age, p_city, p_state, p_address, p_cnumber, p_email, p_date) VALUES ('$p_fname', '$p_lname', '$p_gender', '$p_marital', '$p_age', '$p_city', '$p_state',
  '$p_address' ,'$p_cnumber', '$p_emailid', current_timestamp() )";

  $result = mysqli_query($conn, $sql);

  if($result){
    $showAlert = true;
  }
  else{
    $showError = true;
  }

}
 ?>


<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location : login.php");
  exit;
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>MyOthar | A Complete Storage for patient information</title>
  <link rel="stylesheet" href="css\mainNewrecord.css" />
  <link rel="shortcut icon" href="logo/doc-logo-2.png"/>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="logo/doc-logo-2.png">
      <img src="logo/doc-logo-2.png" width="50" height="50" class="d-inline-block align-top" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" id="navbarText">
      <a class="nav-item nav-link active" href="welcome.php">Master <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="addreceipt.php">Add Medicine receipt</a>
      <a class="nav-item nav-link" href="newrecord.php">New Record</a>
      <a class="nav-item nav-link" href="php/logout.php">LogOut</a>
    </div>
    <div class = "navbar-nav ml-auto">
      <span class="navbar-text">
        <div>Welcome - <?php echo $_SESSION['username'] ?><div>
      </span>
    </div>
  </div>
  </nav>

  <?php
  if($showAlert){
    echo '<script>swal({
      title: "Gotcha!",
      text: "New patient record saved successfully."
    });</script>';
  }
  ?>

  <?php
  if($showError){
    echo '<script>swal({
      title: "Ups! Server error",
      text: "Something went wrong while saving patient details,  Please Try again."
    });</script>';
  }
  ?>


  <div class="main-class">

    <div class="row">
      <h4 class="pagehead"><strong>New Patient registration :</strong><hr></h4>
    </div>
    <BR>

      <form class="" action="newrecord.php" method="post">
        <div class="row">
          <div class="col-3">
            <input type="text" placeholder="First name" name="pfname" required oninvalid="this.setCustomValidity('Invalid name')"
            oninput="setCustomValidity('')">
          </div>
          <div class="col-3">
            <input type="text" placeholder="Last name" name="plname" required oninvalid="this.setCustomValidity('Invalid name')"
            oninput="setCustomValidity('')">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-4">
            <select name="gender" required>
              <option value="">------</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="col-4">
            <select name="marital" required oninvalid="this.setCustomValidity('Select marital status')"
            oninput="setCustomValidity('')">
              <option value="">------</option>
              <option value="Married">Married</option>
              <option value="Single">Single</option>
              <option value="Divorced">Divorced</option>
              <option value="Widowed">Widowed</option>
            </select>
          </div>
          <div class="col-4">
            <input type="text" name="age" placeholder="Age" required oninvalid="this.setCustomValidity('Invalid age')"
            oninput="setCustomValidity('')">
          </div>
        </div>
        <BR>
        <div class="row">
          <div class="col-6">
            <input type="text" name="city" placeholder="City"  required oninvalid="this.setCustomValidity('Select city')"
            oninput="setCustomValidity('')">
          </div>
          <div class="col-6">
            <input type="text" name="state" placeholder="State" required oninvalid="this.setCustomValidity('Select state')"
            oninput="setCustomValidity('')">
          </div>
        </div>
        <BR>
        <div class="row">
          <div class="col-12 form-group">
            <textarea id="exampleFormControlTextarea1" name="address" rows="3" placeholder="Address" required oninvalid="this.setCustomValidity('Invalid address')"
            oninput="setCustomValidity('')"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <input type="tel" pattern="\d{10}" name="cnumber" placeholder="Contect number" required oninvalid="this.setCustomValidity('Invalid phone number')"
            oninput="setCustomValidity('')">
          </div>
          <div class="col-6">
            <input type="email" name="emailid" placeholder="Email Id">
          </div>
        </div>
        <BR>

        <button type="submit" class="btn btn-outline-success">Save New-Record</button>

        </div>
      </form>
  </div>

  <!-- <div class="main-class">
    <div class="fname">Fname</div>
    <div class="lname">Lname</div>
    <div class="gender">Gender</div>
    <div class="marital">Marital</div>
    <div class="age">Age</div>
    <div class="city">City</div>
    <div class="state">State</div>
    <div class="address">Address</div>
    <div class="email">Email</div>
    <div class="phone">Phone</div>
  </div> -->


</body>

</html>
