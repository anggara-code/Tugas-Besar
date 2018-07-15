<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Pendaki</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudfare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.semanticui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen">
		th,td
		{
			text-align: center;
		}
	</style>

</head>
<body>
	<div class="col-lg-6">
		<div class="wel bs-component">
			<form>
				  <fieldset>
				    <legend>Legend</legend>
				    <div class="form-group row">
				      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
				      <div class="col-sm-10">
				        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="exampleInputEmail1">Email address</label>
				      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Password</label>
				      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				    </div>
				    <div class="form-group">
				      <label for="exampleSelect1">Example select</label>
				      <select class="form-control" id="exampleSelect1">
				        <option>1</option>
				        <option>2</option>
				        <option>3</option>
				        <option>4</option>
				        <option>5</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="exampleSelect2">Example multiple select</label>
				      <select multiple="" class="form-control" id="exampleSelect2">
				        <option>1</option>
				        <option>2</option>
				        <option>3</option>
				        <option>4</option>
				        <option>5</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="exampleTextarea">Example textarea</label>
				      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
				    </div>
				    <div class="form-group">
				      <label for="exampleInputFile">File input</label>
				      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
				      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
				    </div>
				    <fieldset class="form-group">
				      <legend>Radio buttons</legend>
				      <div class="form-check">
				        <label class="form-check-label">
				          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
				          Option one is this and that—be sure to include why it's great
				        </label>
				      </div>
				      <div class="form-check">
				      <label class="form-check-label">
				          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
				          Option two can be something else and selecting it will deselect option one
				        </label>
				      </div>
				      <div class="form-check disabled">
				      <label class="form-check-label">
				          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
				          Option three is disabled
				        </label>
				      </div>
				    </fieldset>
				    <fieldset class="form-group">
				      <legend>Checkboxes</legend>
				      <div class="form-check">
				        <label class="form-check-label">
				          <input class="form-check-input" type="checkbox" value="" checked="">
				          Option one is this and that—be sure to include why it's great
				        </label>
				      </div>
				      <div class="form-check disabled">
				        <label class="form-check-label">
				          <input class="form-check-input" type="checkbox" value="" disabled="">
				          Option two is disabled
				        </label>
				      </div>
				    </fieldset>
				    <button type="submit" class="btn btn-primary">Submit</button>
				  </fieldset>
</form>
		</div>
		
	</div>
	

</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatable').dataTable();
	});
</script>
