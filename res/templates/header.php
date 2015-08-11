<?php
$page = '';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="ITLP value reward system">
    <meta name="author" content="Purple B">
    <link rel="icon" href=""><!-- to fill in-->

    <title>ITLP Value Reward System</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/carousel.css" rel="stylesheet">
	<link href="public/css/sticky-footer.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
 <body>
	
	<!-- navigation pane -->
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">ITLP Values</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li <?php if($page == 'home'){echo 'class="active"'; }?>><a href="index.php">Home</a></li>
                <li <?php if($page == 'about'){echo 'class="active"'; }?>><a href="about.php">About the Values</a></li>
                <li <?php if($page == 'story'){echo 'class="active"'; }?>><a href="story.php">Story Submissions</a></li>
               </ul>
                </li>
              </ul>
			  <ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				  <span class="badge">4</span>&nbsp;
				 <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
				  &nbsp;John Smith <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li class="dropdown-header">Notifications</li>
					<li><a href="account.php">actions pending &nbsp;<span class="badge">4</span></a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Account</a></li>
					<li><a href="#">Submissions</a></li>
					<li><a href="#">Nominations</a></li>
					<li><a href="#">Reviews</a></li>
				  </ul>
				</li>
				
			  </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	<!--./ end navigation -->