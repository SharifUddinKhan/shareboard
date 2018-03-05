<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something</h3>
  </div>
  <div class="panel-body">
  	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
    	<label>Title</label>
    	<input type="text" name="title" class="form-control"><br />
    	<label>Body</label>
    	<textarea name="body" class="form-control"></textarea><br />
    	<label>Link</label>
    	<input type="text" name="link" class="form-control"><br />
    	<input class="btn btn-primary" type="submit" name="submit" value="Submit">
    	<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </div>
	</form>
  </div>
</div>



