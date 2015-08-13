<div class="page-header">
	<h1>The ITLP Stories
	<a class="btn btn-success btn-lg pull-right" href="story_index.php?story=create" role="button">Submit Story</a>
	</h1>
</div>
<p class="lead">Below are all the stories behind the ITLP coin awards. Discover which ITLP's achieved and displayed the ITLP values. Cras sit amet nibh libero, in gravida nulla</p>
<table class="table table-hover" style="margin-top: 50px; margin-bottom: 0px;">	<tbody>

<?php
foreach($stories as $story){

	$string = strip_tags($story->getStory()); //stripping any html
	if (strlen($string) > 300) {
		// truncate string
		$string = substr($string, 0, 300) . '... <a href="story_index.php?story=single&id='.$story->getStoryID().'">Read More</a>';
	} else {
		$string = strip_tags($story->getStory());
	}
	echo '
	<tr>
		<td>
			<div class="media-left">
				<a href="">
					<img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGYxY2QxYmQ4OSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZjFjZDFiZDg5Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
				</a>
			</div>
		</td>
		<td>
			<div class="media-body">
				<h4 class="media-heading"><a href="story_index.php?story=single&id='.$story->getStoryID().'"> ' . $story->getTitle() . '</a></h4>
				'.$string.'
				</div>
		</td>
	</tr>';
}

?>
</tbody></table>