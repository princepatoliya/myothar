<?php
  include 'php/conn.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_visit WHERE `id`='$id'";
    if(mysqli_query($conn,$sql)){
      $_SESSION['message'] = "Receipt has been deleted!";
      $_SESSION['msg_type'] = "success";
      echo "<script>window.location.href='welcome.php';</script>";
    }
    else{
      $_SESSION['message'] = "Receipt has been not deleted!";
      $_SESSION['msg_type'] = "danger";
      echo "<script>alert('Receipt has been not deleted!.')</script>";
      echo "<script>window.location.href='welcome.php';</script>";
    }
  }
?>
