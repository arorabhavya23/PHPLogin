<?php
session_start();
if($_SESSION["uname"] == '') {
  header("location: LOGIN_.php");
}
elseif(isset($_SESSION['aname'])){
header("location: AdminHome.php");
}
  $wel = "Welcome" . $_SESSION['uname'];

?>
<!--
<!doctype HTML>
<HTML>
<Head>
<title>
User Home
</title>
</head>

<body>
<br>
<a href = "one.php">one</a>
<br>
<h1>
User Homepage
</h1>
<form action="logout.php" method="post">
<button type="submit">LogOut</button>
</form>
</html>
-->
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery-3.1.1.min.js" ></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <title>Home</title>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
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
  </style>

</head>
<body>
  <div class="container-fluid " style="background-color:#F3F1F1;color:#000000;height:200px;">
    <div class="row text-center" style="padding-top:20px;">
      <a id= "up"href="Home.php"><!--<picture>
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
    <nav class="navbar navbar-inverse bg-primary" data-spy="affix" data-offset-top="10" style="z-index:100">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="Home.php">NCPCR</a>-->
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="AboutUs.php">About US</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acts <b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <form action="ACT.php" method="post" id="nav_form"name="nav_form">
                  <input id="navActId"type="text" name="navActId" style="display:none;" />
                  <div class="row">
                    <div class='col-sm-4'>
                      <ul class='multi-column-dropdown'>
                        <li><a type='submit' onclick='navForm("1 ")'href='#'>one</a></li>

                      </ul></div>
                      <div class='col-sm-4'>
                        <ul class='multi-column-dropdown'>
                          <li><a type='submit' onclick='navForm("2 ")'href='#'>two</a></li>

                        </ul></div>
                        <div class='col-sm-4'>
                          <ul class='multi-column-dropdown'>
                            <li><a type='submit' onclick='navForm("3")'href='#'>three</a></li>

                          </ul></div>
                          <div class='col-sm-4'>
                            <ul class='multi-column-dropdown'>
                              <li><a type='submit' onclick='navForm("4")'href='#'>four</a></li>

                            </ul></div>
                          </div>
                        </form>
                      </ul>
                    </li>
                    <li><a href="ComplaintUs.php">Complaint US</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> User's Location</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Search</a></li> -->
                    <form class="form-inline l">
                      <input type="" class="form-control" size="20" disabled="true" placeholder="Search"value = <?php echo $wel; ?> required="true">
                      <!--<p class="form-control"><?php //echo "Welcome "; echo $_SESSION['uname'] ?></p>-->
                      <a href="logout.php"><button type="button" class="btn btn-info" style="background-color:#337ab7;border-color: #337ab7;">
                        Logout
                      </button></a>
                      <!-- <button type="button" style="background-color:#337ab7;"class="btn btn-danger">Search</button>-->
                    </form>
                  </ul>
                </div>
              </div>
            </nav>

            <!--
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000" >
            <!-- Indicators -->
            <!--    <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000" >
          <!-- Indicators -->
          <!--<ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <!--<div class="carousel-inner" role="listbox" >
        <div class="item active">
        <img src="images/crousel/13620807.jpg" width="100%"style="height: 370px ;" alt="childAct">
        <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
    <img src="images/crousel/rysk (1).jpg"  width="100%" style="height: 370px ;"alt="Childact">
    <div class="carousel-caption">
    ...
  </div>
</div>
<div class="item">
<img src="images/crousel/81512746.png" width="100%" style="height: 370px ;"alt="Childact">
<div class="carousel-caption">
...
</div>
</div>
<div class="item">
<img src="images/crousel/33649877.png" width="100%" style="height: 370px ;"alt="childact">
<div class="carousel-caption">
...
</div>
</div>
<div class="item">
<img src="images/crousel/87109884.png" width="100%" style="height: 370px ;"alt="childact">
<div class="carousel-caption">
...
</div>
</div>
</div>

<!-- Controls -->
<!--  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

-->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading">At Your Service</h2>
      <hr class="primary">
    </div>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 1</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 2</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 3</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 4</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 5</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 6</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 7</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
    <form action="ACT.php" method="post" name="myForm">
      <input type="text" name="actId" id="actId" style="display:none"/>
      <div class='col-md-3 col-sm-6'>
        <div class='panel panel-default text-center'>
          <div class='panel-heading'>
            <span class='fa-stack fa-5x'>
              <i class='fa fa-circle fa-stack-2x text-primary'></i>
              <i class='fa  fa-stack-1x fa-inverse'><img src = '' width='100' height='100'></i>
            </span>
          </div>
          <div class='panel-body'>
            <h4>Data 8</h4>
            <p>Any data information</p>
            <input type='submit' class='btn btn-primary' onclick='myfun( rs.getInt(1)+")' value='Learn more'>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Footer -->
<hr>
<div class="container-fluid ">
  <footer >
    <div class="row" >
      <div class="col-lg-6">
        <p>Copyright &copy; 2017</p>
      </div>
      <div class="col-lg-6">
        <h3><strong>made by BhavyaDROID</strong></h3>
      </div>
    </div>
  </footer>
</div>

<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
//sending act id using body form
function myfun(j){

  document.getElementById("actId").value=j;
  document.getElementById("myForm").submit();
}
//sending act id using navbar form
function navForm(i){
  document.getElementById("navActId").value =i;
  document.getElementById("nav_form").submit();

}
</script>
</body>
</html>
