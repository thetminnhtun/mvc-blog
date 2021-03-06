<div class="container mt-2">
	<div class="card">
		<div class="card-header text-center bg-dark text-white">
			<b>New Post</b>
		</div>
			<div class="card-body">
				<form action="<?=PATH?>post/create" method="post">
						  <div class="form-group">
						    <label for="title">Post Title</label>
						    <input type="text" class="form-control" id="title" name="title">
						  </div>

						<select class="custom-select" name="category_id">
							<option selected>--Choose Category--</option>
							<?php foreach($data as $cat): ?>
								<option value="<?= $cat->id?>"><?= $cat->name ?></option>
							<?php endforeach; ?>
						</select> 
						  <div class="form-group">
						    <label for="content">Content</label>
			    			<textarea class="form-control" id="content" rows="10" name="content"></textarea>
						  </div>
						  <div class="row justify-content-between no-gutters">
						  	<a href="<?=PATH?>post" class="btn btn-outline-secondary">Back</a>
						  	<button type="submit" class="btn btn-dark">Add Post</button>
						  </div>
						</form>		
			</div>
	</div>						
</div>
