<?php
$servername = "localhost";
$username = "root";
$dbname = "skydroid";
$dbpass = "root";

// Create connection

$frname  = $_POST['fname'];
$laname  = $_POST['lname'];
$eid  = $_POST['EmailID'];
$usname = $_POST['usrname'];
$phno = $_POST['phNum'];
$pass  = $_POST['pass1'];
$pass2  = $_POST['pass2'];
$optSel  = $_POST['SelectOpt'];
$secAns  = $_POST['Sans'];

if($pass == $pass2){

  $conn = mysqli_connect($servername, $username, $dbpass, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$st = "who";
  switch ($optSel) {
    case 1:
        $st = "Who is Your Best Friend";
        break;
    case 2:
        $st = "What is your mother name";
        break;
    case 3:
        $st = "Which is your first school";
        break;
    case 4:
        $st = "What is your favourite hotel";
        break;
    case 5:
        $st = "What is your hoemTown";
        break;
}

  $sql = "INSERT INTO user_data (FirstName, lastName, EmailID, phoneNumber, username, SECURITYQUES, SECURITYANS)
  VALUES ('$frname', '$laname', '$eid', '$phno', '$usname', '$st', '$secAns')";

  $sq = "INSERT INTO login_data (username, password, userType) VALUES ('$usname', '$pass', '1')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  if (mysqli_query($conn, $sq)) {
    echo "New record created successfully";
    header("location: Home.php");
  } else {
    echo "Error: " . $sq . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
else{
  echo "Password mismatch<br>";
  echo "<a href=SignUp.php>re register here </a>";
}
?>
