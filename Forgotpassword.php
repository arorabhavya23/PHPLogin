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
        <title>Login</title>

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

    </head>
    <body>

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

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> User's Location</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Search</a></li> -->
        <form class="form-inline l">

    <!-- <button type="button" style="background-color:#337ab7;"class="btn btn-danger">Search</button>-->
  </form>
      </ul>
    </div>
  </div>
</nav>

                            <!--Login Form-->
 <div class="container" style="">
  <h2>Login</h2>
  <form action="forgot.php" method = "post" name="login_form">
    <!--<div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="emailID" placeholder="Enter email" required="" size = "10">
    </div>
    <div class="form-group">

      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password" size = "1" required="">
    </div>-->

	<div class="form-group col">
  <div class="col-xs-3">
    <label for="ex2">User Name</label>
      <input type=text class=form-control placeholder=Username name="usernm"  autofocus= required=true value=>
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
    <button type="submit" class="btn btn-default">Reset password</button>&nbsp &nbsp
  </form><br>
  <button type="submit" class="btn btn-default" onclick="location.href='login_.php';">Login</button>
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
