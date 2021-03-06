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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="abortion.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Abortion</h3>
          <p>Abortion is the ending of pregnancy by removing a fetus or embryo before it can survive outside the uterus.[note 1] An abortion which occurs spontaneously is also known as a miscarriage. An abortion may be caused purposely and is then called an induced abortion, or less frequently, "induced miscarriage". The word abortion is often used to mean only induced abortions. A similar procedure after the fetus could potentially survive outside the womb is known as a "late termination of pregnancy".</p>
        </div>
      </div>

      <div class="item">
        <img src="a.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Protests</h3>
          <p> Proposed laws to remove abortion from the Queensland Criminal Code could breach the constitution, a lawyer has argued.</br>
			The Health (Abortion Law Reform) Amendment Bill 2016 would penalise people for "prohibited behaviour" which would include a protest, by any means, during declared times – or 7am to 6pm if not declared – relating to the performance of abortions in the facility.</br>
          Abortion has been illegal in Queensland since 1899.</br>
          http://www.brisbanetimes.com.au/queensland/proposed-abortion-laws-in-queensland-could-breach-constitution-20161027-gscgak.html
          </p>
        </div>
      </div>

      <div class="item">
        <img src="a3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>US election debate</h3>
          <p>HILLARY Clinton and Donald Trump were finally asked about abortion in their final face-to-face showdown ahead of Election Day on Wednesday night.</br>
          The Republican candidate simply said that he was “pro-life” and reiterated that the issue of abortion would return to the states under his presidency.</br>
          Clinton doubled down on her commitment to defending reproductive rights, vowing to fight for a woman’s right to choose.</br>
          </p>
        </div>
      </div>

      <div class="item">
        <img src="a4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Polish abortion ban</h3>
          <p>Up to 6 million women all over Poland went on strike, dressed in black and took to the streets on Monday to protest against the government's plans for a total ban on abortions.</br>
          Poland's abortion laws are already among Europe's strictest. Women are allowed to have an abortion only if the pregnancy is due to incest or rape, or if the life of the pregnant woman or the fetus is under threat.</br>
          Under the proposed bill, written by an organisation called Stop Abortion, even those exceptions would no longer exist. Women choosing an abortion illegally would face five years behind bars. </br>
          Doctors could be sentenced to prison if found guilty of helping with or performing abortions.
          </p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div id="comments-section" class="container-comments text-center">
  
  <div class="row">
<h3>Discussion</h3><br>
    <div id="profile" class="col-sm-3">
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
   
    <div class="col-sm-6">
      
        <h4>Comments</h4>
         <section class="comment-list">
          <!-- Comment -->
          <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">Kat27</figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i>Katrina</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>

					I wouldn't want the government to be in control of my family decisions, especially if this happened against my will. 
                                        </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
          </article>
          <!-- Reply -->
          <article class="row">
            <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">MDawg</figcaption>
              </figure>
            </div>
            <div class="col-md-9 col-sm-9">
              <div class="panel panel-default arrow left">
                <div class="panel-heading right">Reply</div>
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i>Marni</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
					Just imagine
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
            <!--Add Comment-->
          </article>
           <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">username</figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  
                  <div class="comment-post">
                    <textarea rows="10" cols="74"></textarea>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i>Post</a></p>
                </div>
              </div>
            </div>
          </article>
        </section>
      </div>
    <div id="allEvents" class="col-sm-3">
        <h4>All Events</h4>
        <div class="well">
        <h3>My Profile</h3>
        <img src="UserIcon.png" class="img-circle" height="65" width="65" alt="Avatar">
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
     
  </div>
</div><br>

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