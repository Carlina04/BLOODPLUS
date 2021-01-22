

<?php $__env->startSection('content'); ?>
    <div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
            <h1>List of All Requests</h1>
            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">Requester ID</th>
                <th scope="col">Hospital Name</th>
                <th scope="col">Branch</th>
                <th scope="col">Type of Blood Needed</th>
                <th scope="col">Description/Notes</th>
                <th scope="col">Status</th>
                <th scope="col">Donor ID</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($val->request_from); ?></td>
                <td><?php echo e($val->hospital->hos_name); ?></td>
                <td><?php echo e($val->hospital->hos_branch); ?></td>
                <td><?php echo e($val->req_blood); ?></td>
                <td><?php echo e($val->desc); ?></td>
                <td><?php echo e($val->status); ?></td>
                <td><?php echo e($val->request_to); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder (2)\blood_plus\resources\views/allrequests.blade.php ENDPATH**/ ?>