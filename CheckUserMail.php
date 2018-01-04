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
   $mail = $_GET['mail'];

   // Escape User Input to help prevent SQL Injection
   $mail = mysql_real_escape_string($mail);

   //build query
   $query = "SELECT * FROM user_data WHERE EmailID = '$mail'";

   //Execute query
   $qry_result = mysql_query($query) or die(mysql_error());

   //check if there exist any user if exist there will be one row.
   $count = mysql_num_rows($qry_result);
   if ($count >= 1) {
   $display_string = "Email Id already Registered";
 } else {
   $display_string = "Welcome User";
 }

   echo $display_string;
?>
