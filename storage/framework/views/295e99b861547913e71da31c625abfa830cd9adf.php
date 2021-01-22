

<?php $__env->startSection('content'); ?>
    <div class='container'>
    <div class="form-group">
                <a href="/home">← Home</a>
        </div>
    <div  class="container p-3">
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">My Requests</div>
            </div>
        </div>

        <div class="container p-3 mt-4">
        <?php $__currentLoopData = $req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($val->status=='Pending'): ?>
            <div class="card p-3 m-2 text-left">
            <?php elseif($val->status=='Denied'): ?>
            <div class="card p-3 m-2 text-left bg-dark text-light">
            <?php else: ?>
            <div class="card p-3 m-2 text-left bg-success text-light">
            <?php endif; ?>
                <p><b>Hospital Name:</b> <?php echo e($val->hospital->hos_name); ?><br>
                <b>Branch:</b> <?php echo e($val->hospital->hos_branch); ?><br>
                <b>Type of Blood Needed:</b> <?php echo e($val->req_blood); ?><br>
                <b>Description/Notes:</b> <?php echo e($val->desc); ?><br>
                <b>Status:</b> <?php echo e($val->status); ?><br>
                <b>Donor:</b> <?php echo e($val->request_to); ?></p>
                <form action="deletereq" method='POST'>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="hidden" name='req_id' value="<?php echo e($val->req_id); ?>">
                    <input type="submit" value="Cancel" class="btn btn-danger">
                </form>
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/myrequests.blade.php ENDPATH**/ ?>