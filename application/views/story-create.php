
<div class="container" style="width: 600px; margin-top: 50px;">
<div class="alert alert-warning" role="alert">You've missed something on the form</div>
<div class="alert alert-danger" role="alert">You do not have the ability to give a coin</div>

<form>
  <div class="form-group">
    <label for="receiverSso">Receiver SSO</label>
    <input type="text" class="form-control" id="ReceiverSso" placeholder="Receiver SSO">
  </div>
  <div class="form-group">
    <label for="value1">First Value</label>
    <select class="form-control">
		<option selected="selected" disabled="disabled">Select Value</option>
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
		<option selected="selected" disabled="disabled">Select Value</option>
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
		<option selected="selected" disabled="disabled">Select Value</option>
		<option>Integrity</option>
		<option>Humility</option>
		<option>Educator</option>
		<option>Passion</option>
		<option>Stewardship</option>
		<option>Customer Focus</option>
	</select>
  </div>
  <div class="form-group">
	<label for="story">Story</label>
	<textarea class="form-control" id="story" rows="5"></textarea>
	</div>
	
	<!-- Hidden inputs for database inputs, PHP used to enter values-->
	<input type="hidden" class="form-control" id="giverSSo" value="">
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>