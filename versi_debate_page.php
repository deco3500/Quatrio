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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" type="text/css" rel="stylesheet"/>
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

<div class="jumbotron text-center">
  
  <div class="container-fluid text-center">
    <h1>Welcome to the Debate</h1>
    <p>Remember breeching the rules gets you a penalty. Have fun and debate clean!</p>
  </div>
</div>
  
<div class="container-fluid text-center">
  <div class="row ">
    <div id="For" class="col-sm-2 sidenav">
      <h2>For</h2>
      <hr>
      <h4>Reid</h4>
      <br>
      <h4>Lachie</h4>
      <br>
      <h4>Tan</h4>
      <br>
      <h4>Latesha</h4>
      <br>
      <h4>Marnie</h4>
    </div>
    <div class="col-sm-8 text-center">
      
      <div class="col-sm-12 text-center">
      <h2>Date: 09/09/09 Time: 12 Noon AEST</h2>
    
      <hr>
    </div>
      <div class="col-sm-6 text-center">
        <h2>Opening Arguments: FOR</h2>
        <textarea class="form-control" rows="5" id="for"></textarea>
         <hr>

      </div>
      <div class="col-sm-6 text-center">
        <h2>Opening Arguments: AGAINST</h2>
        <textarea class="form-control" rows="5" id="against"></textarea>
         <hr>

      </div>
      <div id="live-debate" class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <span class="glyphicon glyphicon-comment"></span> Live Debate
          </div>
          <div class="panel-body">
            <ul class="chat">
              <li class="left">
                <span class="chat-img pull-left">
                  <img src="http://placehold.it/50/567E35/fff&amp;text=F" alt="For User" class="img-circle">
                </span>
                <div class="chat-body">
                  <div class="header">
                    <strong class="primary-font">freespeech101</strong> 
                    <small class="pull-right">
                      <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</p>
                </div>
                </li>
                <li class="right"><span class="chat-img pull-right">
                  <img src="http://placehold.it/50/FA6F57/fff&amp;text=A" alt="Against User" class="img-circle">
                    </span>
                    <div class="chat-body clearfix">
                      <div class="header">
                        <small><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                        <strong class="pull-right primary-font">hearmeroar</strong>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</p>
                    </div>
                </li>
                <li class="left">
                  <span class="chat-img pull-left">
                    <img src="http://placehold.it/50/567E35/fff&amp;text=F" alt="For User" class="img-circle">
                  </span>
                  <div class="chat-body clearfix">
                    <div class="header">
                      <strong class="primary-font">freespeech101</strong> <small class="pull-right">
                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</p>
                  </div>
                </li>
                <li class="right">
                  <span class="chat-img pull-right">
                    <img src="http://placehold.it/50/FA6F57/fff&amp;text=A" alt="Against User" class="img-circle">
                  </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <small><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                    <strong class="pull-right primary-font">hearmeraor</strong>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales. </p>
                </div>
                </li>
              </ul>
            </div>
            <div class="panel-footer">
              <div class="input-group">
                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Respond here">
                  <span class="input-group-btn">
                    <button class="btn btn-warning btn-sm" id="btn-chat"> Send</button>
                  </span>
              </div>
            </div>
          </div>
      </div>
   
      </div>
    
      <div id="Against" class="col-sm-2 sidenav">
      <h2>Against</h2>
      <hr>
      <h4>Alison</h4>
      <br>
      <h4>Sean</h4>
      <br>
      <h4>Tom</h4>
      <br>
      <h4>Lee</h4>
      <br>
      <h4>Kat</h4>
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