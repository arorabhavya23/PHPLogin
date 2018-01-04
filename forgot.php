<html>
<head>
  <title>Change password</title>
  <script>
  function verify(){
    var pass1 =  document.forms["change_form"]["pass1"].value;
    var pass2 = document.forms["change_form"]["pass2"].value;
    var ok = true;
    var Perr = document.getElementById('PASSDIV');
    var ps = "";
    if (pass1 != pass2) {
      Perr.style.color = "RED";
      ok = false;
      ps = "Password mismatch<br>";
    }
    else {
      Perr.style.color = "Green";
      ps = "Password Match<br>";

    }
    Perr.innerHTML = ps;
return ok;
  }
  </script>
  <head>
    <body>
      <?php
    $servername = "localhost";
    $username = "root";
    $dbpass = "root";
    $dbname = "skydroid";

    // Create connection

    $uname  = $_POST['usernm'];
    $optSel  = $_POST['SelectOpt'];
    $secAns  = $_POST['Sans'];
    if (!$link = mysql_connect('localhost', 'root', 'root','skydroid')) {
      echo 'Could not connect to mysql';
      exit;
    }

    if (!mysql_select_db('skydroid', $link)) {
      echo 'Could not select database';
      exit;
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

    $query = "SELECT SECURITYQUES, SECURITYANS FROM user_data WHERE username = '$uname'";

    //Execute query
    $qry_result = mysql_query($query) or die(mysql_error());

    //check if there exist any user if exist there will be one row.
    $count = mysql_num_rows($qry_result);
    $row = mysql_fetch_array($qry_result, MYSQL_ASSOC);
    if($st == $row['SECURITYQUES'] && $secAns == $row['SECURITYANS']){?>
      <form onsubmit="return verify()" action="changepass.php" method ="post" name="change_form">
      <?php
      echo "<input type = hidden name=username value =  $uname >"?>
      <P>verified can change the password</p><br>
      <div id =PASSDIV></div>
      <input type="password" placeholder="Password" name="pass1"  autofocus="" required="true">
      <br>Verify password<br>
      <input type="password" placeholder="Password" name="pass2"  autofocus="" required="true">
      <button type="submit" class="btn btn-default">Change Password</button>
      </form>
<?php
    }
    else{
      echo "Soething wrong<br>";
      echo $st;
      echo $row['SECURITYQUES'];
      echo "<br>";
      echo $secAns;
    }

    //echo $display_string;
    ?>

  </body>
  </html>
