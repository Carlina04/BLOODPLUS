

<?php $__env->startSection('content'); ?>
    
    <div class="container p-3">
        <div class="form-group">
          <a href="/adminnav">← Back to Navigation</a>
        </div>
        
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">Bloodbanks</div>
                <div class="p-2 flex-shrink-0 bd-highlight">
                    <button class="btn-sm btn-success new-btn" onclick="createBbank(1)">New</button>
                </div>
            </div>
        </div>

        <div class="container p-3 mt-4 rounded create-bbank shadow-sm" style="display: none">
            <form action="/bloodbanks" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row my-1 d-flex align-items-center">
                    <div class="col-4">
                        <p class="mr-3">Bloodbank Name</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>
                </div>

                <div class="row my-1 d-flex align-items-center">
                    <div class="col-4">
                        <p class="mr-3">Description</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="description" id="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group mt-2 mb-0">
                    <label>Complete Address</label>
                    <div class="container font-weight-normal">
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>Street</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" name="street" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>Barangay</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" name="barangay" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>City</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" name="municipality" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>Province</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" name="province" required>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-group mt-4 mb-0 row">
                  <div class="col-5">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="tel" class="form-control" name="num" placeholder="09XXXXXXXXX" pattern="^(09)\d{9}$" required>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="form-group">
                      <label >Email Address</label>
                      <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
                    </div>
                  </div>
                </div>

                <hr>
                <h6>Bloodbank Stock</h6>
                
                <div class="d-flex justify-content-center text-center">
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">A-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="A_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">A+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="A_pos">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">B-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="B_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">B+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="B_pos">
                    </div>
                  </div>
                </div>

                <div class="d-flex justify-content-center text-center mt-3">
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">O-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="O_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">O+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="O_pos">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">AB-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="AB_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">AB+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" value="0" class="form-control" name="AB_pos">
                    </div>
                  </div>
                </div>

                <hr>

                <div class='mt-3 d-flex justify-content-end'>
                  <input type='button' value='Cancel' class='btn-sm shadow-none btn-danger mx-1' onclick="createBbank(0)">
                  <input type='submit' name='create-bbank' value='Create' class='btn-sm shadow-none btn-success mx-1' >
                </div>
                
            </form>
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

    <script>

      function createBbank(num){
        if(num==1){
          document.querySelector(".create-bbank").style.display="block";
          document.querySelector(".new-btn").style.display="none";
        }else{
          document.querySelector(".create-bbank").style.display="none";
          document.querySelector(".new-btn").style.display="block";
        }
      }
    
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/bloodbank.blade.php ENDPATH**/ ?>