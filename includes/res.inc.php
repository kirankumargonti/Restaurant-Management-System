<?php
if (isset($_POST['reservation-submit'])){
  require "dbh.inc.php";
  $rname = $_POST['rname'];
  $rdate = $_POST['rdate'];
  $rtime = $_POST['rtime'];
  $rchairs = $_POST['rchairs'];
  $remail = $_POST['remail'];
  $rphone = $_POST['rphone'];

  if (empty($rname) || empty($rdate) || empty($rtime) || empty($rchairs) || empty($remail) || empty($rphone)) {
       header("Locaton:../Reservation.php?error=emptyfields&rname=".$rname."rdate=".$rdate);
       exit();
    }
  else {
    $sql = "INSERT INTO reservation (rName, rDate, rTime, rChairs, rEmail, rPhone)
      VALUES ('$rname', '$rdate','$rtime','$rchairs','$remail','$rphone')";

    if (mysqli_query($conn, $sql)) {
       header("Location:../booking.php");
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

  }
}

else {
  header("Location:../Reservation.php");
  exit();
}  

