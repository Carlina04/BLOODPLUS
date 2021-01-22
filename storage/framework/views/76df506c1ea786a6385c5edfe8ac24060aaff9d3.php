

<?php $__env->startSection('content'); ?>
<div class='container'>
        <div class="form-group">
            <a href="/adminnav">← Back to Navigation</a>
        </div>
    <div class='container card '>
    <br><br>
    
        
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class='text-center'>
           <i class="fas fa-user fa-7x"></i><br><br>
           <h2><?php echo e($value->first_name); ?> <?php echo e($value->mid_name); ?> <?php echo e($value->last_name); ?></h2><hr>
        </div>
           <h5><b>Blood Type</b>: <?php echo e($value->blood_type); ?></h5>
           <h5><b>Address</b>: House No. <?php echo e($value->house_num); ?> <?php echo e($value->street); ?> St. <?php echo e($value->barangay); ?>, <?php echo e($value->municipality); ?> City, <?php echo e($value->province); ?></h5>
        <hr>
        <h5><b>Contact Details</b></h5>
        <h5><b>Phone Number</b>: <?php echo e($value->contact_num); ?></h5>
        <h5><b>Email Address</b>: <?php echo e($value->email); ?></h5>
        <hr>
        <h5><b>Birthdate</b>: <?php echo e($value->birthdate); ?></h5>
        <h5><b>Gender</b>: <?php echo e($value->gender); ?></h5>
        <div class="button-container"><hr>
                <form class='text-center' method="GET" action="/updateuser">
                        <input type="hidden" name='id' value="<?php echo e($value->user_id); ?>">
                        <input type="submit" class="btn btn-success" value="Update">
                </form><hr>
                <form action="deleteuser" class='text-right' method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="hidden" name='id' value="<?php echo e($value->user_id); ?>">
                        <input type="submit" class="btn btn-danger" value="Delete Account">
                </form><br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/userpage-admin.blade.php ENDPATH**/ ?>