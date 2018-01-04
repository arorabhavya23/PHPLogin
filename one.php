<?php
session_start();
if($_SESSION["uname"] == '') {
  header("location: LOGIN_.php");
}
?>
<!DOCTYPE html>

<html>
  <head>
	<title>login</title>
  </head>


  <body>




<?php

if (!$link = mysql_connect('localhost', '', '','test')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('test', $link)) {
    echo 'Could not select database';
    exit;
}
$sql    = 'SELECT * FROM login_data';
$result = mysql_query($sql, $link);

if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        echo "username: " . $row["username"]. " - password: " . $row["password"]. " <br>";
    }
} else {
    echo "0 results";
}/*
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['username'];
}*/
?>
<?php
if(!isset($_COOKIE['user'])) {
    echo "Cookie named '" . 'user' . "' is not set!";
} else {
    echo "Cookie '" . 'user' . "' is set!<br>";
    echo "Value is: " . $_COOKIE['user'];
    echo "<br>Cookie '" . 'pass' . "' is set!<br>";
    echo "<br>Value is: " . $_COOKIE['pass'];
}
?>
<br>

<?php
// Echo session variables that were set on previous page
echo "UserName is " . $_SESSION["uname"] . ".<br>";
?>
<form action="logout.php" method="post">
  <button type="submit">LogOut</button>
</form>

  </body>
</html>
