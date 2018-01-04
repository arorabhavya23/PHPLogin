<?php
// Start the session
session_start();
//set the cookie

//if((isset($_COOKIE['user'])) && (isset($_COOKIE['pass']))) {
//	$name = $_COOKIE['user'];
//	$pass = $_COOKIE['pass'];
//}
//else{
	$name  = $_POST['username'];
	$pass  = $_POST['password'];
//}
$remember = $_POST['rememberME'];
// echo $name ;
// echo $pass;

if (!$link = mysql_connect('localhost', 'root', 'root','skydroid')) {
	echo 'Could not connect to mysql';
	exit;
}

if (!mysql_select_db('skydroid', $link)) {
	echo 'Could not select database';
	exit;
}
$sql    = "SELECT * FROM login_data WHERE username = '$name'";
$result = mysql_query($sql, $link);
//	$sql    = "SELECT * FROM login_data WHERE username = '$name' and password = '$pass'";
//$result = mysql_query($sql, $link);
$count = mysql_num_rows($result);
$row = mysql_fetch_array($result, MYSQL_ASSOC);
if ($count >= 1) {
	//$row = mysql_fetch_assoc($result);
	if($pass == $row['password']){
		echo "Sucessfull  login";
		//session and cookie code from here
			// Set session variables
			$_SESSION["uname"] = $name;
			if(isset($_SESSION["uname"])){
				echo "<br>Session variables are set.";
			}
				echo $remember;
				if($remember == "reber"){
					$cookie_name = "user";
					$cookie_value = $name;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
					$cookie_name = "pass";
					$cookie_value = $pass;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
				}
				if($row['userType'] == 1) {
					$_SESSION["uname"] = $name;
					if(isset($_SESSION["uname"])){
						echo "<br>Session variables are set.";
					}
				header("location: Home.php");
			}
			elseif($row['userType'] == 2) {
				$_SESSION["aname"] = $name;
				if(isset($_SESSION["aname"])){
					echo "<br>Session variables are set.";
				}
				header("location: AdminHome.php");
			}
				if(!isset($_COOKIE[$cookie_name])) {
					echo "Cookie named '" . $cookie_name . "' is not set!";
				} else {
					echo "Cookie '" . $cookie_name . "' is set!<br>";
					echo "Value is: " . $_COOKIE[$cookie_name];
				}

			//return to simple login code.
		}
		else{
			echo "Wrong password ";
			header("location: login_.php?pe=$name");
		}

	}else{
		echo "Incorrect username";
		header("location: login_.php?ue=on");
	}
	/*



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
}
*/
?>
