

<?php $__env->startSection('content'); ?>
    <div id="front" class="text-center m-0 d-flex flex-column justify-content-center">
    	<div class="container">
            <div class="form-group">
                <a href="/allusers" class="btn btn-info btn-lg btn-block">List of All Users</a>
            </div>
            <div class="form-group">
                <a href="/allrequests" class="btn btn-success btn-lg btn-block">List of All Requests</a>
            </div>
            <div class="form-group">
                <a href="/allhospitals" class="btn btn-warning btn-lg btn-block">List of Affiliated Hospitals</a>
            </div>
            <div class="form-group">
                <a href="" class="btn btn-danger btn-lg btn-block">List of All Blood Banks</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder (2)\blood_plus\resources\views/adminnav.blade.php ENDPATH**/ ?>