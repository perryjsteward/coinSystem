<?php
include('init.php');
require_once(TEMPLATES_PATH.'/header.php');

?>
	
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing"  style="margin-top:75px;">
		<!-- Page Header describes the page to user -->
		<div class="page-header">
		<h1>The ITLP Stories</h1>
		</div>
		<p class="lead">Below are all the stories behind the ITLP coin awards. Discover which ITLP's achieved and displayed the ITLP values. Cras sit amet nibh libero, in gravida nulla</p>
     
		<?php 
			/*
				PHP View logic to determine view on stories
			*/
			if(isset($_GET['story'])){
				$controller = new StoryController();
				$controller->invoke();
			}
		
		?>
     
<?php 
require_once(TEMPLATES_PATH.'/footer.php');
?>