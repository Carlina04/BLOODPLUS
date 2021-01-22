

<?php $__env->startSection('content'); ?>
    <div class='container'>
    <div class="form-group">
                <a href="/home">← Home</a>
        </div>
    <div class="container p-3">
        
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">Bloodbanks</div>
            </div>
        </div>

        <?php if(count($bbanks)>0): ?>
        
          <div class="container mt-4 p-0">

            <?php $__currentLoopData = $bbanks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bbank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class='container  mt-5 p-3 rounded shadow '>
                  <div class='d-flex justify-content-start'>
                      <p class='h5 m-2 text-dark'><?php echo e($bbank->bbank_name); ?></p>
                  </div>

                  <div class='d-flex justify-content-start p-2 mt-2'>
                      <div class='mr-2'>
                        <p class='h6 m-0 text-secondary'>Location : </p>
                      </div>
                      <div>
                        <p class='h6 m-0'><?php echo e($bbank->municipality); ?>, <?php echo e($bbank->province); ?></p>
                      </div>
                  </div>

                  <div class='d-flex justify-content-start p-2'>
                      <div class='mr-2'>
                        <p class='h6 m-0 text-secondary'>Contact Details : </p>
                      </div>
                      <div>
                        <p class='h6 m-0'><?php echo e($bbank->contact_num); ?></p>
                        <p class='h6 m-0'><?php echo e($bbank->email); ?></p>
                      </div>
                  </div>

                  <hr>

                  <div class='mt-3 d-flex justify-content-end'>
                    <form action="/bloodbanks/info" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('post'); ?>
                      <input type="hidden" name='id' value="<?php echo e($bbank->bbank_id); ?>">
                      <input type="hidden" name='condition' value="0">
                      <input type='submit' name='bbank-info' value='Inquire' class='btn-sm shadow-none btn-warning' >
                    </form>
                  </div>
              </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        
        <?php else: ?>
          <div class="container bg-light d-flex justify-content-center p-4 shadow-sm mt-3">
              <h5>No Bloodbank</h5>
          </div>

        <?php endif; ?>
    
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/bloodbank-user.blade.php ENDPATH**/ ?>