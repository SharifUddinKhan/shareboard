<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">User Register</h3>
  </div>
  <div class="panel-body">
  	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
    	<label>Name</label>
    	<input type="text" name="name" class="form-control"><br />
    	<label>Email</label>
    	<input type="text" name="email" class="form-control"><br />
    	<label>Password</label>
    	<input type="password" name="password" class="form-control"><br />
    	<input class="btn btn-primary" type="submit" name="submit" value="Submit">
    	<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>">Cancel</a>
    </div>
	</form>
  </div>
</div>



