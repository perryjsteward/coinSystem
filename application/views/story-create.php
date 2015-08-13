
<div class="container" style="width: 600px; margin-top: 0px;">

<?php
	//if error
	$warning = '<div class="alert alert-warning" role="alert">Youve missed something on the form</div>';
	$danger = '<div class="alert alert-danger" role="alert">You do not have the ability to give a coin</div>'
?>
<div class="page-header">
	<h1>The ITLP Stories</h1>
</div>
<form>
  <div class="form-group">
    <label for="receiverSso">Receiver SSO</label>
    <input type="text" class="form-control" id="ReceiverSso" placeholder="Receiver SSO" required>
  </div>
  <div class="form-group">
    <label for="value1">First Value</label>
    <select class="form-control">
		<option selected="selected" disabled="disabled" required>Select Value</option>
		<option>Integrity</option>
		<option>Humility</option>
		<option>Educator</option>
		<option>Passion</option>
		<option>Stewardship</option>
		<option>Customer Focus</option>
	</select>
  </div>
  <div class="form-group">
    <label for="value2">Second Value</label>
    <select class="form-control">
		<option selected="selected" disabled="disabled" required>Select Value</option>
		<option>Integrity</option>
		<option>Humility</option>
		<option>Educator</option>
		<option>Passion</option>
		<option>Stewardship</option>
		<option>Customer Focus</option>
	</select>
  </div>
  <div class="form-group">
    <label for="value1">Third Value</label>
    <select class="form-control">
		<option selected="selected" disabled="disabled" required>Select Value</option>
		<option>Integrity</option>
		<option>Humility</option>
		<option>Educator</option>
		<option>Passion</option>
		<option>Stewardship</option>
		<option>Customer Focus</option>
	</select>
  </div>
  <div class="form-group">
	<label for="story">Title</label>
	<input type="input" class="form-control" id="title" placeholder="Enter Title" required>
	</div>
  <div class="form-group">
	<label for="story">Story</label>
	<textarea class="form-control" id="story" rows="5" required></textarea>
  </div>
	
	<!-- Hidden inputs for database inputs, PHP used to enter values-->
	<input type="hidden" class="form-control" id="giverSSo" value="">
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>