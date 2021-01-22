

<?php $__env->startSection('content'); ?>
    
    <div class='container text-center'>
        <i class="fas fa-user fa-7x"></i><br><br>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <h2><?php echo e($value->first_name); ?> <?php echo e($value->mid_name); ?> <?php echo e($value->last_name); ?></h2>
           <h5>Blood Type: <?php echo e($value->blood_type); ?></h5>
           <h5>Address: <?php echo e($value->house_num); ?> <?php echo e($value->street); ?> St. <?php echo e($value->barangay); ?>,<?php echo e($value->municipality); ?> City,<?php echo e($value->province); ?></h5>

        <div class="button-container">
                <form action="deleteuser" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="hidden" name='id' value="<?php echo e($value->user_id); ?>">
                        <input type="submit" class="btn btn-danger" value="Delete">
                </form>
                <form method="GET" action="/uuser">
                        <input type="hidden" name='id' value="<?php echo e($value->user_id); ?>">
                        <input type="submit" class="btn btn-success" value="Update">
                </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\blood_plus\resources\views/userpage.blade.php ENDPATH**/ ?>