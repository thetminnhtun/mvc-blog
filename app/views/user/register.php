<div class="col-md-6 offset-md-3 mt-5">
	<div class="card">
		<div class="card-header text-center">
			<b>User Register</b>
		</div>
		<div class="card-body">
			<form action="<?= PATH?>user/register" method="post">
				<!-- Username -->
			  <div class="form-group"> 
			    <label for="name">User Name</label>
			    <input type="text" class="form-control" id="name" name="name">
			  </div>
			  <!-- Email -->
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email">
			  </div>
			  <!-- password -->
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password">
			  </div>
			  <button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>
