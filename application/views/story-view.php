<div class="page-header">
	<h1><?php echo $story->getTitle(); ?></h1>
</div>
<div class="row">
	<div class="col-md-2">
		<div style="width: 130px; height: 130px; background-color: grey; margin-top: 10px;"></div>
	</div>
	<div class="col-md-10">
		<p class="lead">
<?php
$values = array (
	'0' => $story->getValue1(),
	'1' => $story->getValue2(),
	'2' => $story->getValue3()
);
$value_colour = array (
	'Integrity' => 'default',
	'Humility' => 'primary',
	'Passion' => 'info',
	'Stewardship' => 'warning',
	'Educator' => 'success',
	'Customer Focus' => 'danger'
);

echo '
	Nominated: <a href="">'.$story->getTargetName().'</a> 
		<br />
		Awarded on: '.$story->getApvDate().'
		<br />
		Given by: <a href="">'.$story->getSubName().'</a> 
		</p>
		<p>	
		<a class="btn btn-'.$value_colour[$values[0]].' btn-md" href="#integrity" role="button">'.$values[0].'</a>
		<a class="btn btn-'.$value_colour[$values[1]].' btn-md" href="#integrity" role="button">'.$values[1].'</a>
		<a class="btn btn-'.$value_colour[$values[2]].' btn-md" href="#integrity" role="button">'.$values[2].'</a>	
		</p><br />
	</div>
</div>
<p>'.$story->getStory().'</p>';


?>