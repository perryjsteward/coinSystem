<?php
include('init.php');
require_once(TEMPLATES_PATH.'/header.php');
?>
		
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing"  style="margin-top:75px;">
	
		<ul class="nav nav-tabs" style="margin-top:25px;">
			<li role="presentation" class="active"><a href="#">Notifications <span class="badge">4</span>&nbsp;</a></li>
			<li role="presentation"><a href="#">Submissions</a></li>
			<li role="presentation"><a href="#">Nominated</a></li>
			<li role="presentation"><a href="#">Reviewed</a></li>
			<li role="presentation"><a href="#">Account</a></li>
		</ul>
		
		<table class="table table-hover" style="margin-top:40px;">
			<tbody>
			  <tr>
				<td>John</td>
				<td>Doe</td>
				<td>john@example.com</td>
			  </tr>
			  <tr>
				<td>Mary</td>
				<td>Moe</td>
				<td>mary@example.com</td>
			  </tr>
			  <tr>
				<td>July</td>
				<td>Dooley</td>
				<td>july@example.com</td>
			  </tr>
			</tbody>
		  </table>
     
	  
		<hr class="featurette-divider"> 
		
<?php 
require_once(TEMPLATES_PATH.'/footer.php');
?>

