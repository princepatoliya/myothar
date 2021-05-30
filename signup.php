<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'php/conn.php';

  $uname = $_POST['username'];
  $email = $_POST['emailid'];
  $pass = $_POST['password'];
  $hosname = $_POST['hosname'];


  $sql = "INSERT INTO user (uname, email, pass, hosname, dt) VALUES ('$uname', '$email', '$pass', '$hosname', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  if($result){
    $showAlert = true;
  }
  else{
    $showError = true;
  }
}
 ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>MyOthar</title>
  <link rel="stylesheet" href="css\mainSignup.css" />
  <link rel="shortcut icon" href="logo/doc-logo-2.png"/>
  <script src="javascript\signupvalid.js" type="text/javascript"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  <?php
  if($showAlert){
    echo '<script>swal({
      title: "Success!",
      text: "You are logged in.",
      icon: "success",
    });</script>';
  }
  ?>

  <?php
  if($showError){
    echo '<script>swal({
      title: "Somethig went wrong.",
      text: "Try Again",
      icon: "warning",
    });</script>';
  }
  ?>

    <div class="gotosignup">
      <button type="submit" id="gotosignin" onclick="window.location.href='signin.php'">SIGN IN</button>
    </div>


  <div class="main">
    <div class="logo">
      <img src="logo\doc-logo-2.png" alt="MyOthar" />
    </div>
    <div class="regi">
      <form class="" onsubmit="return valid();" action="signup.php" method="post">
        <main>
          <div class="username">
            <input type="text" id="username" name="username" placeholder="Username" />
            <label id="labuser"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg></label>
          </div>
          <div class="password">
            <input type="password" id="password" name="password" placeholder="Password" />
            <label id="labpass"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg></label>
          </div>
          <div class="conpassword">
            <input type="password" id="conpassword" name="conpassword" placeholder="Confirm password" />
            <label id="labcpass"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg></label>
          </div>
          <div class="email-id">
            <input type="email" id="emailid" name="emailid" placeholder="Email" />
            <label id="labemail"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg></label>
          </div>
          <div class="hos-name">
            <input type="text" id="hospitalname" name="hosname" placeholder="Hospital name" />
            <label id="hosname"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg></label>
          </div>
          <div>
            <button type="submit" class="signup btn1">SIGN UP</button>
          </div>
        </main>
      </form>
    </div>
  </div>
</body>

</html>
