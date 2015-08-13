
		
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
		
		<table class="table table-hover" style="margin-top:40px;">
			<tbody>
				<?php
					foreach($pendStories as $story){

						/*$string = strip_tags($story->getStory()); //stripping any html
						if (strlen($string) > 300) {
							// truncate string
							$string = substr($string, 0, 300) . '... <a href="story_index.php?story=single&id='.$story->getStoryID().'">Read More</a>';
						} else {
							$string = strip_tags($story->getStory());
						}*/
						echo '
						<tr>
							<td>
								' . $story->getTitle() . '
							</td>
							<td>
								' . $story->getTargetName() . '
							</td>
							<td>
								' . $story->getSubName() . '
							</td>
							<td>
								' . $story->getStory() . '
							</td>
						</tr>';
					}

				?>
			  <!--<tr>
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
			  </tr>-->
			</tbody>
		  </table>
     
	  
		<hr class="featurette-divider"> 
		
<?php 
require_once(TEMPLATES_PATH.'/footer.php');
?>

