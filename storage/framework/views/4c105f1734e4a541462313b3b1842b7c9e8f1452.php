

<?php $__env->startSection('content'); ?>
	<div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
			<h1>Request Form</h1>

			<form action="createreq" method="post">
                <?php echo csrf_field(); ?>
				<input type="hidden" name='don_id' value="<?php echo e($don->id); ?>">
				<div class="form-group">	
					<label class="form-control text-left input-label p-0 m-0" for="reqblood">Needed Blood type</label>
					<select class="form-control" id="reqblood" name="reqblood" required>
						<option selected hidden>Choose...</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
				</div>
				<a href="/hospitals" target="_blank">Check Affiliated Hospitals</a><br>
				<div class="form-group h6 mt-4 mb-0 row">
					<div class="col-6">
						<div class="form-group">
							<label class="form-control text-left input-label p-0 m-0" for="hos_name">Admitted Hospital</label>
							<input type="text" class="form-control" name="hos_name" placeholder="Name of Hospital" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
						<label class="form-control text-left input-label p-0 m-0" for="branch">Hospital Branch</label>
						<input type="text" class="form-control" name="branch" placeholder="Name of Branch"required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="form-control text-left input-label p-0 m-0" for="desc">Description/Notes:</label>
					<textarea name="desc" class="form-control text-justify p-10 m-0"></textarea>
				</div>
				<br>
				<button class="btn btn-primary w-50">Submit</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/request.blade.php ENDPATH**/ ?>