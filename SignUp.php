<?php
session_start();
if(isset($_SESSION['uname'])){
  header("location: Home.php");
}
if(isset($_SESSION['aname'])){
header("location: AdminHome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/font-awesome.min.css">
  <link rel="stylesheet" href="CSS/simple-sidebar.css">
  <script type="text/javascript" src="JS/jquery-3.1.1.min.js" ></script>
  <script type="text/javascript" src="JS/bootstrap.min.js"></script>
  <title>NEW USER</title>

  <style>


  .affix {
    top: 0;
    width: 100%;
  }
  .affix + .container-fluid {
    padding-top: 70px;
  }
  .navbar {
    margin-bottom: 0px;
    border-radius: 0;
  }
  .l {
    margin-top:10px;
  }
  .dropdown-menu {
    min-width: 200px;
  }
  .dropdown-menu.columns-2 {
    min-width: 400px;
  }
  .dropdown-menu.columns-3 {
    min-width: 600px;
  }
  .dropdown-menu li a {
    padding: 5px 15px;
    font-weight: 300;
  }
  .multi-column-dropdown {
    list-style: none;
  }
  .multi-column-dropdown li a {
    display: block;
    clear: both;
    line-height: 1.428571429;
    color: #333;
    white-space: normal;
  }
  .multi-column-dropdown li a:hover {
    text-decoration: none;
    color: #262626;
    background-color: #f5f5f5;
  }

  @media (max-width: 767px) {
    .dropdown-menu.multi-column {
      min-width: 240px !important;
      overflow-x: hidden;
    }
  }

  /*#actactive{
  background-color:black;
  color:white;
  }*/
  </style>
  <script type="text/javascript">
  var countred = 0;
  var countgreen = 0;
  function passVal() {
    var pass1 =  document.forms["Signup_form"]["pass1"].value;
    var Perra = document.getElementById('PASSDIV1');
    var pe = "Paasword Must be ";
    var c = 0;
    if(pass1.length < 6){
      pe += ("atlest 6 character");
      Perra.style.color = "RED";
      countred++;
    }
    else{
      countgreen++;
      //alert ((pass1.match(/^[^a-zA-Z0-9]+$/) ? true : false));
      c+=  (pass1.match(/^[^a-z]+$/) ? 1 : 0);
      c+=  (pass1.match(/^[^A-Z]+$/) ? 1 : 0);
      c+=  (pass1.match(/^[^0-9]+$/) ? 1 : 0);
      c+=  (pass1.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/) ? 0 : 1);
      if(c == 0){
        Perra.style.color = "Green";
        pe = "Strong Password";
        //alert("strong password");
      }
      else if (c == 1) {
        Perra.style.color = "orange";
        pe = "Moderate Password";
      }
      else if (c == 2) {
        Perra.style.color = "OrangeRed";
        pe = "Weak Password";
      }
      else if (c == 3) {
        Perra.style.color = "red";
        pe = "VeryWeak Password";
      }
    }
    //alert(counterr);
    Perra.innerHTML = pe;
  }

  function Validate() {
    var pass1 =  document.forms["Signup_form"]["pass1"].value;
    var pass2 = document.forms["Signup_form"]["pass2"].value;
    var ok = true;
    var Perr = document.getElementById('PASSDIV');

    var ps = "";
    if (pass1 != pass2) {
      //alert("Passwords Do not match");
      Perr.style.color = "RED";
      ok = false;
      countred++;
      ps = "Password mismatch<br>";
      //document.getElementsByName("pass1").innerHTML = "renter the value";
      //  alert("Password mismatch");
    }
    else {
      Perr.style.color = "Green";
      ps = "Password Match<br>";
      countgreen++;
    }
    Perr.innerHTML = ps;
    return ok;
  }

  function ajaxonmail(){
    var ajaxRequest;  // The variable that makes Ajax possible!

    try {
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
    }catch (e) {
      // Internet Explorer Browsers
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
        try{
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }catch (e){
          // Something went wrong
          alert("Your browser broke!");
          return false;
        }
      }
    }

    // Create a function that will receive data
    // sent from the server and will update
    // div section in the same page.

    ajaxRequest.onreadystatechange = function(){
      if(ajaxRequest.readyState == 4){
        var ajaxDisplay = document.getElementById('ajaxDivmail');
        if(ajaxRequest.responseText == "Welcome User"){
          ajaxDisplay.style.color = "Green";
          countgreen++;
        }
        else {
          countred++;
          ajaxDisplay.style.color = "RED";
        }
        ajaxDisplay.innerHTML = ajaxRequest.responseText;
      }
    }

    // Now get the value from user and pass it to
    // server script.

    var mail = document.forms["Signup_form"]["EmailID"].value;
    var queryString = "?mail=" + mail;
    ajaxRequest.open("GET", "CheckUserMail.php" + queryString, true);
    ajaxRequest.send(null);
  }

  //Browser Support Code
  function ajaxon(){
    var ajaxRequest;  // The variable that makes Ajax possible!

    try {
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
    }catch (e) {
      // Internet Explorer Browsers
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
        try{
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }catch (e){
          // Something went wrong
          alert("Your browser broke!");
          return false;
        }
      }
    }

    // Create a function that will receive data
    // sent from the server and will update
    // div section in the same page.

    ajaxRequest.onreadystatechange = function(){
      if(ajaxRequest.readyState == 4){
        var ajaxDisplay = document.getElementById('ajaxDiv');
        if(ajaxRequest.responseText == "user Name available"){
          ajaxDisplay.style.color = "Green";
          countgreen++;
        }
        else {
          countred++;
          ajaxDisplay.style.color = "RED";
        }
        ajaxDisplay.innerHTML = ajaxRequest.responseText;
      }
    }

    // Now get the value from user and pass it to
    // server script.

    var name = document.forms["Signup_form"]["usrname"].value;
    var queryString = "?name=" + name;
    ajaxRequest.open("GET", "SignUpAjax.php" + queryString, true);
    ajaxRequest.send(null);
  }
  function verify() {
    alert("heyy verify");
    var x = document.getElementsByTagName("div");
    document.getElementById("demo").innerHTML = x[11].innerHTML;
    var em = getElementsByTagName("ajaxDivmail").innerHTML;
    var un = getElementsByTagName("ajaxDiv").innerHTML;
    var ps = getElementsByTagName("PASSDIV").innerHTML;
    alert(em);
    alert(un);
    alert(ps);
  }
  </script>
</head>
<body>
<p id="demo"></p>
  <div class="container-fluid" style="background-color:#F3F1F1;z-index:25;color:#000000;height:200px;">
    <div class="row text-center" style="padding-top:20px;">
      <a id= "up"href="#"><!--<picture>
        <!--[if IE 9]><video style="display: none;"><![endif]
        <source srcset="img/1024.jpg" media="(min-width: 768px)">
        <!--[if IE 9]></video><![endif]
        <img src="images/logo11.png" alt="Image">
      </picture>-->
      <picture>
        <!--[if IE 9]><video style="display: none;"><![endif]-->
        <source srcset="images/drawing.svg.png" media="(max-width: 770px)" >
          <!--[if IE 9]></video><![endif]-->
          <img src="Images/banner.jpg" style="width:100%;"alt="Image">
        </picture></a>
      </div>
    </div>



    <nav class="navbar navbar-inverse bg-primary" data-spy="affix" data-offset-top="197" style="z-index:100">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">


            <li><a href="login_.php">Login</a></li>


            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> User's Location</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Search</a></li> -->

          </ul>
        </div>
      </div>
    </nav>

    <!--Login Form-->
    <div class="container" style="">
      <h2>Login</h2>
    <!--  <form action="signupuser.php" onsubmit="return Validate()" method = "post" name="Signup_form">-->
    <form  action="SignUp.php"onsubmit="verify()" method = "post" name="Signup_form">
        <div class="form-group col">
          <div class="col-xs-3">
            <label for="ex2">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" name="fname" required="true" autofocus="" >

          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" name="lname" required="true" >

          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2">Email id</label>
            <input type="Email" class="form-control" placeholder="Email Address" name="EmailID" required="true" onchange="ajaxonmail()">
            <div id = 'ajaxDivmail'></div>
          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2">Phone Number</label>
            <input type="number" class="form-control" placeholder="Mobile Number" name="phNum" required="true" min="7000000001" max = "9999999999" >

          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2">UserName</label>
            <input type="text" class="form-control" placeholder="Choose avatar Name" name="usrname" required="true" onchange="ajaxon()">
            <div id = 'ajaxDiv'></div>
          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2" >Password</label><!--<p id = 'PASSDIV1'></p>-->
            <input type="password" class="form-control" placeholder="Password" name="pass1" required="true" onchange="passVal()">

          <div id = 'PASSDIV1'></div>
          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2">ReEnter Password</label>
            <input type="password" class="form-control" placeholder="Password" name="pass2" required="true" onchange="Validate()">
            <div id = 'PASSDIV'></div>
          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2">Security Question</label><!--create drop down -->
            <select class="form-control" id="optSelect" name ="SelectOpt">
      <!--<option value="">--Select--</option>-->
            <option value = " 1" >Who is Your Best Friend?</option>
            <option value = " 2" >What is your mother's name?</option>
            <option value = " 3" >Which is your first school?</option>
            <option value = " 4" >What is your favourite hotel?</option>
            <option value = " 5" >What is your hoemTown?</option>

  </select>
          </div></br></br></br></br>
          <div class="col-xs-3">
            <label for="ex2">Securtiy Answere</label>
            <input type="Text" class="form-control" placeholder="Security answere" name="Sans" required="true">

          </div></br></br></br></br>
        </div>

        <button type="submit" class="btn btn-default">Sign up</button>
      </form>
    </div>


    <hr>

    <div class="container-fluid ">
      <footer>
        <div class="row" >
          <div class="col-lg-6">
            <p>Copyright &copy 2017 </p>
          </div>
          <div class="col-lg-6">
            <h3><strong>made by BhavyaDroid </strong></h3>
          </div>
        </div>
      </footer>
    </div>


    <script src="JS/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="JS/bootstrap.min.js"></script>

    <script>

    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    function navForm(i){
      document.getElementById("navActId").value =i;
      document.getElementById("nav_form").submit();

    }
    </script>
  </body>
  </html>
