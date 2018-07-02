<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
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
	                  	<form action="<?php echo base_url('C_login/user_login') ?>" method="post">
	                  		<?php if ($error = $this->session->flashdata('pesan')): ?>
	                  			<div class="form-group">
	                  				<div class="col-md-13">
		                  				<div class="alert alert-dismissible alert-primary">
									  		<button type="button" class="close" data-dismiss="alert">&times;</button>
									  		<?php echo $error; ?>
										</div>
		                  			</div>
	                  			</div>
							<?php endif ?>
		                    <div class="input-group-addon">
		                    	<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo set_value('username') ?>">
		                    	<br>
		                    	<?php echo form_error('username','<span class"text-danger">','</span>') ?>
		                      	<input type="password" name="pass" class="form-control" placeholder="password" value="<?php echo set_value('passs') ?>">
		                      	<?php echo form_error('pass','<span class"text-danger">','</span>') ?>
		                    </div>
		                    <br>
		                    <input type="submit" class="btn btn-block btn-success" value="LOGIN">
	                  	</form>
	               	</div>
              	</div>
            </div>
        </div>
      </center>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>
