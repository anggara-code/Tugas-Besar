<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/signin.css" rel="stylesheet">
</head>
<body background="<?php echo base_url(); ?>b.jpg">
    <div class="container">
      <center>
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-primary">
            	<div class="panel-heading">
	                <h2>Silahkan Login</h2>
	            </div>
              	<div class="panel-body">
	                <div class="col-md-12 col-md-offset-0">
	                  	<form method="post">
		                    <div class="input-group-addon">
		                    	<input type="text" name="username" class="form-control" placeholder="username" required="">
		                    	<br>
		                      	<input type="password" name="password" class="form-control" placeholder="password" required="">
		                    </div>
		                    <br>
		                    <input type="submit" name="login" class="btn btn-block btn-success" value="Sign In">
	                  	</form>
	               	</div>
              	</div>
            </div>
        </div>
      </center>
    </div>
</body>
</html>
