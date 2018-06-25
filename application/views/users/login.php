
<?php echo form_open('users/login'); ?>
<div class="row"> 
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?php echo $title; ?></h1>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary btn-block">Login</button>
	</div>
</div>

<?php echo form_close(); ?>