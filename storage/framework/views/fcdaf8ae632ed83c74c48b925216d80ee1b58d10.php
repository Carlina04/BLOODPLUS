

<?php $__env->startSection('content'); ?>
    <div class="container p-3">
        <div class="form-group">
            <a href="/adminnav">← Back to Navigation</a>
        </div>
    
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">List of Requests</div>
            </div>
        </div>

        <div class="container p-3 mt-4 rounded shadow-sm">
            <table class="table table-bordered table-hover text-justify">
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
                <?php if($val->status=='Pending'): ?>
                <tr>
                <?php elseif($val->status=='Denied'): ?>
                <tr class="table-danger">
                <?php else: ?>
                <tr class="table-success">
                <?php endif; ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/allrequests.blade.php ENDPATH**/ ?>