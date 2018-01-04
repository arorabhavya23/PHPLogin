<?php
$servername = "localhost";
$username = "root";
$dbpass = "root";
$dbname = "skydroid";

$un = $_POST['username'];
$pass  = $_POST['pass1'];
$pass2  = $_POST['pass2'];

if($pass == $pass2){

  $conn = mysqli_connect($servername, $username, $dbpass, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sq = "UPDATE login_data SET password='$pass' WHERE username = '$un'";

  if (mysqli_query($conn, $sq)) {
    echo "password changed successfully";
    header("location: Home.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
else {
  echo"password mismatch";
}
 ?>
