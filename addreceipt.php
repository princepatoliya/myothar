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
  <link rel="stylesheet" href="css\mainAddreceipt.css" />
  <link rel="icon" href="logo/doc-logo-2.png" />
  <link rel="shortcut icon" href="logo/doc-logo-2.png"/>
  <script src="javascript\addreceipt.js" type="text/javascript"></script>

  <!-- jquery -->
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {

      $("#adddise").click(function () {
        var html =
          '<div class="form-group form-inline redi" style="width:100%;"><input type="text" class="form-control" id="diseaselist" placeholder="Disease" name="disease[]">';
          html += `&nbsp; <a class="remove_disease" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="darkred" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a></div>`;
        $(".disease_input").append(html);
      });

    $(this).on("click", ".remove_disease", function(){
      var target = $(this).parent();
      target.remove();
    });

  });
  </script>



  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- css -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



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

  <div class="main-class">

    <div class="row">
      <div class="page-header">
        <div><strong>New Life Hospital</div></h1>
        <h4><strong>Medical Receipt</strong></h4>
        <p><hr></p>
      </div>
    </div>


    <div class="form-div">
      <div><label class="date1">Date :</label> <label for="date & time" id="">22/22/22 12:34:35</label></div>

      <div class="row"><h4><strong>Patient Details :</strong><hr></h4></div>
        <div class="maindetails">

          <div class="maindetails1">
            <div class="pname"><label>Name : </label> <label>Prince Patoliya</label></div>
            <div class="gender"><label>Gender :</label> <label>Male</label></div>
            <div class="age"><label>Age :</label> <label>19</label></div>
            <div class="marital"><label>Marital status :</label> <label>Single</label></div><BR>
            <div class="content"><label>Content :</label> <label>6549836394</label></div>
            <div class="email"><label>Email :</label> <label>prince@gmail.com</label></div>
          </div>
          <div class="maindetails2">
            <div class="city"><label>City :</label> <label>Surat</label></div>
            <div class="state"><label>State :</label> <label>Gujarat</label></div>
            <div class="address"><label>Address :</label> <label>33, laxmibag soc, katargam</label></div>
          </div>

        </div>
        <br>
        <div class="medi">
          <form class="" action="#" method="post">
            <div class="row">
              <div class="col-md-4">
                <div class="disease_input"></div>
              </div>
            </div>
            <div class="row">
              <button type="button" class="btn btn-outline-primary" id="adddise"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
              </svg>&nbsp; &nbsp;Add Disease</button>
            </div>
            <BR>


            <div class="row">
              <div class="form-group col-md-10">
                <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="7" placeholder="Description or Medicine details"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-10">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Remark">
              </div>
            </div>
            <button type="submit" class="btn btn-outline-success">Submit </button>
          </form>


        </div>
      </div>


  </div>


</body>

</html>
