

<?php $__env->startSection('content'); ?>
    <div class="container p-3">
        <div class="form-group">
            <a href="/adminnav">← Back to Navigation</a>
        </div>
    
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">Affiliated Hospitals</div>
                <div class="p-2 flex-shrink-0 bd-highlight">
                          <a href="/addhospital" class="btn-sm btn-success new-btn">Add A Hospital</a>
                </div>
            </div>
        </div>

        <div class="container p-3 mt-4 rounded shadow-sm">
            <table class="table table-bordered table-hover text-center">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/allhospitals.blade.php ENDPATH**/ ?>