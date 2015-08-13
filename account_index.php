<?php
include('init.php');
require_once(TEMPLATES_PATH.'/header.php');

?>
		
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing"  style="margin-top:75px;">
	
		<ul class="nav nav-tabs" style="margin-top:25px;">
			<li role="presentation" <?php if($_GET['account'] == 'notifications'){echo 'class="active"'; }?>><a href="account_index.php?account=notifications">Notifications <span class="badge">4</span>&nbsp;</a></li>
			<li role="presentation" <?php if($_GET['account'] == 'submissions'){echo 'class="active"'; }?>><a href="account_index.php?account=submissions">Submissions</a></li>
			<li role="presentation" <?php if($_GET['account'] == 'received'){echo 'class="active"'; }?>><a href="#">Received</a></li>
			<li role="presentation" <?php if($_GET['account'] == 'reviewed'){echo 'class="active"'; }?>><a href="#">Reviewed</a></li>
			<li role="presentation" <?php if($_GET['account'] == 'account'){echo 'class="active"'; }?>><a href="#">Account</a></li>
		</ul>
		<?php 
			
			/*
				PHP View logic to determine view on stories
			*/
			if(isset($_GET['account'])){
				$controller = new AccountController();
				$controller->invoke();
			}
		
		?>  
		
<?php 
require_once(TEMPLATES_PATH.'/footer.php');
?>

