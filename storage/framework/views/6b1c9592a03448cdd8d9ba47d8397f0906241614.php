

<?php $__env->startSection('content'); ?>
    <div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
            <h1>List of Affiliated Hospitals</h1>
            <div class="form-group">
                <a href="/addhospital" class="btn btn-primary">Add A Hospital</a>
            </div>
            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">Hospital Name</th>
                <th scope="col">Hospital Branch</th>
                <th scope="col">Hospital Address</th>
                <th scope="col">Contacts</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $hos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($val->hos_name); ?></td>
                <td><?php echo e($val->hos_branch); ?></td>
                <td><?php echo e($val->address->province); ?>, <?php echo e($val->address->municipality); ?>, <?php echo e($val->address->barangay); ?>, <?php echo e($val->address->street); ?></td>
                <td><?php echo e($val->contact->contact_num); ?><br><?php echo e($val->contact->email); ?></td>
                <td><?php echo e($val->desc); ?></td>
                <td>
                    <form action="/edithospital" method='GET'>
                        <input type="hidden" name='hos_id' value="<?php echo e($val->hos_id); ?>">
                        <input type="submit" value="Edit" class="btn btn-success btn-block">
                    </form>
                    <br style="display: block;content: '';margin-top: 5px;">
                    <form action="deletehos" method='POST'>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="hidden" name='hos_id' value="<?php echo e($val->hos_id); ?>">
                        <input type="submit" value="Delete" class="btn btn-danger btn-block">
                    </form>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder (2)\blood_plus\resources\views/allhospitals.blade.php ENDPATH**/ ?>