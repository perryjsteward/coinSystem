<?php
include('init.php');
require_once(TEMPLATES_PATH.'/header.php');

?>
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing"  style="margin-top:75px;"><!-- adds a container to the page -->
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