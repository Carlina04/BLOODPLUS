

<?php $__env->startSection('content'); ?>
	<div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
			<h1>Add A Hospital</h1>

			<form action="addhos" method="post">
				<?php echo csrf_field(); ?>
				<div class="form-group">	
				<div class="form-group h6 mt-4 mb-0 row">
					<div class="col-6">
						<div class="form-group">
							<label class="form-control text-left input-label p-0 m-0" for="hos_name">Name of Hospital</label>
							<input type="text" class="form-control" name="hos_name" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
						<label class="form-control text-left input-label p-0 m-0" for="branch">Hospital Branch</label>
						<input type="text" class="form-control" name="hos_branch" required>
						</div>
					</div>
				</div>
				<div class="form-group h6 mt-4 mb-0 row">
          <div class="col-5">
            <div class="form-group">
              <label class="form-control text-left input-label p-0 m-0" for="num">Phone Number</label>
              <input type="tel" class="form-control" name="num" placeholder="09XXXXXXXXX" pattern="^(09)\d{9}$" required>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label class="form-control text-left input-label p-0 m-0" for="email">Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
            </div>
          </div>
        </div>
        <div class="form-group h6 mt-2 mb-0">
          <label class="form-control text-left input-label p-0 m-0">Complete Address</label>
          <div class="container font-weight-normal">
            <div class="row">
              <div class="form-group col-3 py-2">
                <label class="form-control text-left input-label p-0 m-0" for="street">Street</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="street" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label class="form-control text-left input-label p-0 m-0" for="barangay">Barangay</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="barangay" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label class="form-control text-left input-label p-0 m-0" for="municipality">City</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="municipality" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label class="form-control text-left input-label p-0 m-0" for="province">Province</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="province" required>
              </div>
            </div>
           </div>
        </div>
				<div class="form-group">
					<label class="form-control text-left input-label p-0 m-0" for="desc">Description:</label>
					<textarea name="desc" class="form-control text-justify p-10 m-0"></textarea>
				</div>
				<br>
				<button class="btn btn-primary w-50">Submit</button>
      </form>
      <br>
      <br>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder (2)\blood_plus\resources\views/addhospital.blade.php ENDPATH**/ ?>