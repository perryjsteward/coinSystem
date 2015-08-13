<?php
include('init.php');
$result = '';
if(isset($_POST['sso'])){
	$controller = new userController();
	$result = $controller->login($_POST['sso'], $_POST['password']);	
	
	if($result == true){
		//set session variables
		header('location: index.php');
	}
	if($result == false){
			echo '<div class="alert alert-warning alert-dismissible" role="alert" style="width: 620px; margin: auto;">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								There was an error with your login, please try again.
								</div>';
		}
}


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
	<link href="public/css/signin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		html {
			overflow-y: scroll; 
		}
	</style>
  </head>

  <body>

    <div class="container">

	
      <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputSSO" class="sr-only">SSO</label>
        <input type="number" id="inputSSO" class="form-control" placeholder="SSO" name="sso" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
