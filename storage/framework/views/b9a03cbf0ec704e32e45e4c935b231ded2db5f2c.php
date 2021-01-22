

<?php $__env->startSection('content'); ?>
    <div class="container p-3">
        <div class="form-group">
            <a href="/adminnav">← Back to Navigation</a>
        </div>
    
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">List of Users</div>
            </div>
        </div>

        <div class="container p-3 mt-4 rounded shadow-sm">
        <?php $__currentLoopData = $users['name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class='container card '>
            <br><br>
            <div class='text-center'>
            <i class="fas fa-user fa-7x"></i><br><br>
            <h2><?php echo e($users['name'][$value]->first_name); ?> <?php echo e($users['name'][$value]->mid_name); ?> <?php echo e($users['name'][$value]->last_name); ?></h2>
                <h4 style="color:blue"><?php echo e($users['user'][$value]->user_type); ?></h4>
                <hr>
            </div>
                <h5><b>Blood Type</b>: <?php echo e($users['info'][$value]->blood_type); ?></h5>
                <h5><b>Address</b>: House No. <?php echo e($users['add'][$value]->house_num); ?> <?php echo e($users['add'][$value]->street); ?> St. <?php echo e($users['add'][$value]->barangay); ?>, <?php echo e($users['add'][$value]->municipality); ?> City, <?php echo e($users['add'][$value]->province); ?></h5>
                <hr>
                <h5><b>Contact Details</b></h5>
                <h5><b>Phone Number</b>: <?php echo e($users['contact'][$value]->contact_num); ?></h5>
                <h5><b>Email Address</b>: <?php echo e($users['contact'][$value]->email); ?></h5>
                <hr>
                <h5><b>Birthdate</b>: <?php echo e($users['info'][$value]->birthdate); ?></h5>
                <h5><b>Gender</b>: <?php echo e($users['info'][$value]->gender); ?></h5>
            <div class="button-container"><hr> 
                <form action="deleteuser" class='text-right' method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="hidden" name='id' value="<?php echo e($users['user'][$value]->user_id); ?>">
                    <input type="submit" class="btn btn-danger" value="Delete Account">
                </form><br>
            </div>
        </div><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/allusers.blade.php ENDPATH**/ ?>