<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Versi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="style.css" type="text/css" rel="stylesheet"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar navbar-default navbar-fixed-top" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="versi_event_page.php">Events</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Topic
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="versi_topic_page.php">Euthanasia</a></li>
          <li><a href="versi_education_page.php">Education</a></li>
          <li><a href="versi_abortion_page.php">Abortion</a></li> 
          <li><a href="versi_healthcare_page.php">Healthcare</a></li>
          <li><a href="versi_refugee_page.php">Refugees</a></li> 
          <li><a href="versi_disability_page.php">Disability Care</a></li> 
        </ul>
      </li>
        <li><a href="versi_debate_landing_page.php">Debates</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['username'])){ ?>
          <li><a href="versi_event_page.php"> <?php echo $_SESSION["username"] ?></a> </li>
          <li><a href="#" data-toggle="modal" data-target="#logoutModal">logout</a></li>
        <?php }else{ ?>
          <li><a href="#" data-toggle="modal" data-target="#basicModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
          <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Register</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<div id="events" class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <h3>My Profile</h3>
        <img src="pfpic.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        <div>
          <h4>Username:</h4>
          <p>freespeaker101</p><br>
          <hr>
          <h4>My Events</h4>
        <ul>
           <li>US Leader effect</li>
          <li>Refugee camps</li>
          <li>Refugee security</li>
          <li>Border security</li>
          <li>Euthanasia laws country comparison</li>
          <li>Are abortions murder?</li>
          <li>Hygiene education</li>
        </ul>
      </div>
        </div>
      </div>
    <div class="col-sm-7 text-center">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <h2>Current Events</h2>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="yoga.jpeg" height="100" width="100" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Which potential US leader is going to do the most right by the country?</p>
            <button>Join</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="sewing.jpeg" height="100" width="100" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Do you know the conditions of refugees camps?</p>
            <button>Join</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="sailing.jpeg" height="100" width="100" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Is security more important than other things in refugee camps</p>
            <button>Join</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="painting.jpeg" height="100" width="100" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Euthanasia laws country comparison</p>
            <button>"Join"</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2 well">
      <div class="outcomes">
        <h4>Past event outcomes</h4>
      
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="basicModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
          <img src="image.png" height="200" width="400" alt="Avatar">
        </div>
        <div class="modal-body">
			<form class="form-horizontal" id="loginform" action="login.php" method="POST">
				<table Class="form">
					<tr>
						<td Class="l">Username:</td>
						<td Class="r"><input type="text" id="name" name="lusername"></td>
					</tr>
					<tr>
						<td Class="l">Password:</td>
						<td Class="r"><input type="text" id="pass" name="lpassword"></td>
					</tr>
				</table>
					<input type="submit" value="Submit">
					<input type="reset"  value="Reset">
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
          <img src="image.png" height="200" width="400" alt="Avatar">
        </div>
        <div class="modal-body">
         <form id="registerform" action="register.php" method="POST">
				<table class="form">
					<tr>
						<td class="l">Username:</td>
						<td class="r"><input type="text" id="username" name="username"></td>
						<td>*</td>
					</tr>
					
					<tr>
						<td class="l">Password:</td>
						<td class="r"><input type="text" id="password" name="password"></td>
						<td>*</td>
					</tr>

					<tr>
						<td class="l">Email:</td>
						<td class="r"><input type="text" id="email" name="email"></td>
						<td>*</td>
					</tr>
			</table>
					<input type="submit" value="Submit">
					<input type="reset"  value="Reset">
         
				</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="logoutModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Logout</h4>
        </div>
        <div class="modal-body text-center">
          <h4> Are you sure you want to Logout?</h4>
          <form action="logout.php" method="get" float="left">
            <input class="btn btn-default" type="submit" value="yes">
          </form>
          <button type=button class="btn btn-default" data-dismiss="modal">No</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<footer class="container-fluid text-center">
  <p>Copyright Versi 2016</p>
</footer>

</body>
</html>
