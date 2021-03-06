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

<div class="jumbotron">
  <div class="container-fluid text-center">
    <h1>Let's Debate</h1>
    <img id="debate" src="debate.jpg" alt="Image">
    <p>Welcome to today's Versi debate. By entering the debate you agree to the rules listed below. Any breach of these rules will result in a negative flag on your account and also a ban from all debates for a 4 week period.</p>
    <a href="versi_debate_page.php" class="btn btn-default">Go to Debate</a>

  </div>
</div>
  
<div class="container-fluid">
  <div class="row ">
    <div class="col-sm-2 sidenav"></div>
    <div class="col-sm-8 sidenav">
    <div class="container">
  
      <div class="row">
        <div class="col-sm-8">
          <h3>Rules</h3>
          <ol>
            <li>There are two teams, each consisting of a most 5 speakers. Each team has the same amount of speakers.</li>
            <li>Each team has two or three constructive speeches, and two to three rebuttal speeches. The affirmative gives the first constructive speech, and the rebuttals alternate: negative, affirmative, negative, affirmative. The affirmative has both the first and last speeches of the debate.</li>
            <li>Then worded as a proposition of policy, the topic requires the affirmative to support some specified action by some particular individual or group. The affirmative has the right to make any reasonable definition of each of the terms of the proposition. If the negative challenges the reasonableness of a definition by the affirmative, the judge must accept the definition of the team that shows better grounds for its interpretation of the term.</li>
            <li>The affirmative must advocate everything required by the topic itself. No revision of position of a team is permitted during the debate.</li>
            <li>He who asserts must prove. In order to establish an assertion, the team must support it with enough evidence and logic to convince an intelligent but previously uninformed person that it is more reasonable to believe the assertion than to disbelieve it. Facts must be accurate. Visual materials are permissible, and once introduced, they become available for the opponents' use if desired.</li>
            <li>No trolling!!</li>
            <li>In the questioning period, the questioner may ask any fair, clear question that has a direct bearing on the debate. The questioner may use the period to build up any part of his own case, to tear down any part of his opposition's case, or to ascertain facts, such as the opposition's position on a certain issue, that can be used later in the debate. The questioner must confine himself to questions and not make statements, comments, or ask rhetorical questions.</li>
            <li> Each speaker is questioned as soon as he concludes his constructive speech. The witness must answer the questions without consulting his colleagues.</li>
            <li>No new constructive arguments may be introduced in the rebuttal period. The affirmative must, if possible, reply to the major negative arguments before the last rebuttal.</li>
            <li>The judge must base his decision entirely on the material presented, without regard for other material which he may happen to possess.</li>
            <li>Any gains made outside of the established procedure are disallowed.</li>
          

          </ol>
        </div>
        <div class="col-sm-2">
          <h3>Teams</h3>
          <h4>Team For</h4>
          <ul>
            <li>Reid</li>
            <li>Lachie</li>
            <li>Tan</li>
            <li>Latesha</li>
            <li>Marnie</li>
            <li>Guest</li>
          </ul>

          <h4>Team Against</h4>
          <ul>
            <li>Alison</li>
            <li>Sean</li>
            <li>Tom</li>
            <li>Lee</li>
            <li>Kat</li>
            <li>Guest</li>
          </ul>
        </div>
      </div>
    </div><br>
    </div>

    
      <div class="col-sm-2 sidenav"></div>
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