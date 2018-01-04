<?php

   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "root";
   $dbname = "skydroid";

   //Connect to MySQL Server
   mysql_connect($dbhost, $dbuser, $dbpass);

   //Select Database
   mysql_select_db($dbname) or die(mysql_error());

   // Retrieve data from Query String
   $name = $_GET['name'];

   // Escape User Input to help prevent SQL Injection
   $name = mysql_real_escape_string($name);

   //build query
   $query = "SELECT * FROM login_data WHERE username = '$name'";

   //Execute query
   $qry_result = mysql_query($query) or die(mysql_error());

   //check if there exist any user if exist there will be one row.
   $count = mysql_num_rows($qry_result);
   if ($count >= 1) {
   $display_string = "User Name Un available Try Another";
 } else {
   $display_string = "user Name available";
 }

   echo $display_string;
?>
