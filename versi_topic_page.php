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
        <img src="euthanasia_1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Euthanasia</h3>
          <p>Euthanasia (from Greek: εὐθανασία; "good death": εὖ, eu; "well" or "good" – θάνατος, thanatos; "death") is the practice of intentionally ending a life in order to relieve pain and suffering. There are different euthanasia laws in each country. The British House of Lords Select Committee on Medical Ethics defines euthanasia as "a deliberate intervention undertaken with the express intention of ending a life, to relieve intractable suffering". In the Netherlands and Flanders, euthanasia is understood as "termination of life by a doctor at the request of a patient"</p>
        </div>
      </div>

      <div class="item">
        <img src="pic.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Max Bromson</h3>
          <p>"Max Bromson, 66, died in 2014 after taking an illegal euthanasia drug"
          </br>
	"Mr Bromson had been diagnosed with terminal bone cancer in 2009"
	</br>
	"His family filmed his last moments to clear them of any wrongdoing"
http:-//www.abc.net.au/news/2016-10-20/family-releases-video-of-brother-ending-his-life-euthanasia/7950188</p>        </div>
      </div>

      <div class="item">
        <img src="e2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Pressure suicide</h3>
          <p>
          Disabled or elderly people could feel pressured to kill themselves if voluntary euthanasia is legalised in South Australia, a disability advocacy group says.
          </br>
          The bill is the 14th attempt to pass some form of voluntary euthanasia laws in SA and will be subject to a conscience vote from both major parties.
          </br>
          http://www.news.com.au/national/breaking-news/sa-euthanasia-bill-amended-to-lift-support/news-story/87541c60df8348cd9bdcd7b1c157e31b
          </p>
        </div>
      </div>

      <div class="item">
        <img src="pic.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Exclusions</h3>
          <p>
          Despite moves towards assisted death legislation in Victoria and South Australia, neither state government is set to provide access to people like Mr Franklin or others who say they have intolerable pain but who are not dying.
          </br>
          http://www.theage.com.au/victoria/the-people-likely-to-be-excluded-from-a-voluntary-euthanasia-law-in-victoria-20161019-gs5p4n.html
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
                <figcaption class="text-center">thomasthedankengine</figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i>T0m</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
            		 <p>Did anyone see the article about the old guy that really wanted this?</p>
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
                <figcaption class="text-center">toni</figcaption>
              </figure>
            </div>
            <div class="col-md-9 col-sm-9">
              <div class="panel panel-default arrow left">
                <div class="panel-heading right">Reply</div>
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i>Tony</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
					It seems like such a weird thing to say but imagine just being there and not being able to do anything and being forced to live even if you didn’t want to.</p>
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
        <div class="well">
        <h3>All Events</h3>
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