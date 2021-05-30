  <?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location : signin.php");
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
  <link rel="stylesheet" href="css/mainWelcome.css" />
  <link rel="shortcut icon" href="logo/doc-logo-2.png"/>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
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
        <div>Welcome - <?php echo $_SESSION['username'] ?></div>
      </span>
    </div>
  </div>
  </nav>
  <?php require_once 'delete_visit.php'; ?>

  <?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php endif  ?>

  <main class="main">
    <div class="update">
      <div class = "cust1"><strong>Patient :</strong><hr></div>
      <div>
        <div id="upbtn">
          <button type="button" id="updateinfo" name="updateinfo">Update Patient</button>
        </div>
        <div id="vibtn">
          <button type="button" id="viewinfo" name="viewinfo">View Details</button>
        </div>
      </div>
    </div>

    <div class="inform">
      <div class = "cust1"><strong>Content Information :</strong><hr></div>
      <div>
        <div class="info1">
          <label id="infomail">Email :</label> <label id="emailinfo">----------------</label>
        </div>
        <div class="info1">
          <label id="infophone">Phone :</label> <label id="phoneinfo">---------------</label>
        </div>
      </div>
    </div>

    <div class="visit">
      <div class = "cust1"><strong>Total Visit :</strong><hr></div>
      <div>
        <div class="visit1">
          <label id="visitinfo">--</label>
        </div>
      </div>
    </div>

    <div class="search">
      <div class="searchbar">
        <div>
          <form class="form-inline my-2 my-lg-0" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="form-control mr-sm-2" type="search" name="search" aria-label="Search" value="">
            <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
          </form>
        </div>
      <div>
        <button class="btn btn-outline-primary" type="button" name="addnewrec">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
            <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
          </svg>
          New receipt
        </button>
      </div>
      </div>
    </div>



  <div class="data">
    <div class="container-fluid div-table">
      <table class="table table-hover table-scroll">
        <thead>
          <tr>
            <th scope="col" style="width: 5%;">Visit</th>
            <th scope="col" style="width: 13%;">Date & Time</th>
            <th scope="col" style="width: 20%;">Name</th>
            <th scope="col" style="width: 26%;">Disease</th>
            <th scope="col" style="width: 34%;">Remark</th>
            <th scope="col" style="width: 1%;"></th>
            <th scope="col" style="width: 1%;"></th>
          </tr>
        </thead>
        <tbody>

          <?php
            include 'php/conn.php';

            if(isset($_POST['submit'])){
              if(empty($_POST['search'])){
                unset($_SESSION['searchname']);
                $sql_query = "SELECT tbl_visit.id, tbl_visit.dt, tbl_patient.p_first_name, tbl_patient.p_last_name, tbl_visit.disease, tbl_visit.remark FROM tbl_visit INNER JOIN tbl_patient ON tbl_visit.p_id = tbl_patient.p_id ORDER BY tbl_visit.id DESC";
                $result = mysqli_query($conn, $sql_query);
                while ($rows = mysqli_fetch_assoc($result)) {

                 echo '<tr>
                   <td>'.$rows["id"].'</td>
                   <td>'.$rows["dt"].'</td>
                   <td>'.$rows['p_first_name']." ".$rows['p_last_name'].'</td>
                   <td>'.$rows["disease"].'</td>
                   <td>'.$rows["remark"].'</td>
                   <td class="row-data" data-id="'.$rows["id"].'">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0A79DF" class="bi bi-pip" viewBox="0 0 16 16">
                       <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                       <path d="M8 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3z"/>
                     </svg>
                   </a></td>
                   <td><a href="delete_visit.php?id='.$rows["id"].'">
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="darkred" xmlns="http://www.w3.org/2000/svg">
                       <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                       <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                     </svg>
                   </td>
                 </tr>';

                }
              }
              else{
                $search = $_POST['search'];
                $_SESSION['searchname'] = $search;
                $sql_query = "SELECT * FROM tbl_patient WHERE `p_first_name` = '$search'";
                $res = mysqli_query($conn, $sql_query);
                $rr = mysqli_fetch_assoc($res);
                $id = $rr['p_id'];
                $sql = "SELECT * FROM tbl_visit WHERE `p_id` = '$id'";
                $result = mysqli_query($conn, $sql);
                while ($rows = mysqli_fetch_assoc($result)) {

                 echo '<tr class="row-data" data-id="'.$rows["id"].'">
                   <td>'.$rows["id"].'</td>
                   <td>'.$rows["dt"].'</td>
                   <td>'.$rr['p_first_name']." ".$rr['p_last_name'].'</td>
                   <td>'.$rows["disease"].'</td>
                   <td>'.$rows["remark"].'</td>
                   <td  class="row-data" data-id="'.$rows["id"].'">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0A79DF" class="bi bi-pip" viewBox="0 0 16 16">
                       <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                       <path d="M8 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3z"/>
                     </svg>
                   </td>
                   <td><a href="delete_visit.php?id='.$rows["id"].'">
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="darkred" xmlns="http://www.w3.org/2000/svg">
                       <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                       <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                     </svg>
                   </a></td>
                 </tr>';

                }
              }


            }
            else{
              unset($_SESSION['searchname']);
              $sql_query = "SELECT tbl_visit.id, tbl_visit.dt, tbl_patient.p_first_name, tbl_patient.p_last_name, tbl_visit.disease, tbl_visit.remark FROM tbl_visit INNER JOIN tbl_patient ON tbl_visit.p_id = tbl_patient.p_id ORDER BY tbl_visit.id DESC";
              $result = mysqli_query($conn, $sql_query);
              while ($rows = mysqli_fetch_assoc($result)) {

               echo '<tr>
                 <td>'.$rows["id"].'</td>
                 <td>'.$rows["dt"].'</td>
                 <td>'.$rows['p_first_name']." ".$rows['p_last_name'].'</td>
                 <td>'.$rows["disease"].'</td>
                 <td>'.$rows["remark"].'</td>
                 <td  class="row-data" data-id="'.$rows["id"].'" >
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0A79DF" class="bi bi-pip" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                     <path d="M8 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3z"/>
                   </svg>
                 </td>
                 <td><a href="delete_visit.php?id='.$rows["id"].'">
                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="darkred" xmlns="http://www.w3.org/2000/svg">
                     <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                     <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                   </svg>
                 </a></td>
               </tr>';

              }

            }

          ?>

        </tbody>
      </table>

    </div>
  </div>
  </main>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $( ".row-data" ).click(function() {
    window.location.href = "data.php?name="+$(this).attr('data-id');
  });
</script>

</body>

</html>
