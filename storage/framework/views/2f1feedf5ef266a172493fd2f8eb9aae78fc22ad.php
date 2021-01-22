

<?php $__env->startSection('content'); ?>

<div class='container'>
  <div class="form-group">
    <a href="/home">← Home</a>
  </div>
<div class="container p-3">
  
  <div class="container p-2 rounded shadow">
    <div class="d-flex bd-highlight align-items-center">
      <div class="mr-auto p-2 bd-highlight h-auto">
        <h5>Dashboard</h5>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn btn-outline-dark seek-btn" onclick="displayContent(0)">Seek</button>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn btn-outline-dark find-btn" onclick="displayContent(1)">Donate</button>
      </div>
    </div>
  </div>

  <div class="container mt-4 find-blood p-0">

      <?php if(count($donors)>0): ?>

          <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
                <div class='container  mt-5 p-3 rounded shadow'>
                <form action="/request" method='GET'>
                  <input type="hidden" name='user_id' value="<?php echo e($donor->user_id); ?>">
                  <div class='d-flex bd-highlight'>
                    <div class='p-2 w-100 bd-highlight'>
                      <p class='h6 m-0'><span class='text-secondary'>Name : </span><?php echo e($donor->last_name); ?>, <?php echo e($donor->first_name); ?> <?php echo e($donor->mid_name); ?></p>
                    </div>
                    <div class='p-2 flex-shrink-0 bd-highlight'>
                      <p class='h6 m-0'><span class='text-secondary'>Blood Type : </span><?php echo e($donor->blood_type); ?></p>
                    </div>
                  </div>

                  <div class='d-flex justify-content-between p-2'>
                    <p class='h6 m-0'><span class='text-secondary'>Age : </span>
                        <?php
                           $birth= @value($donor->birthdate);
                           $age = \Carbon\Carbon::parse($birth)->age;
                           echo $age;
                        ?>
                    </p>
                    <p class='h6 m-0'><span class='text-secondary'>Gender : </span>
                        <?php
                            if($donor->gender==='m'){
                              echo "Male";
                            }else{
                              echo "Female";
                            }
                        ?>
                    </p>
                    <p class='h6 m-0'><span class='text-secondary'>Location : </span><?php echo e($donor->municipality); ?>, <?php echo e($donor->province); ?></p>
                  </div>

                  <div class='d-flex justify-content-start p-2'>
                    <div class='mr-2'>
                      <p class='h6 m-0 text-secondary'>Contact Details : </p>
                    </div>
                    <div>
                      <p class='h6 m-0'><?php echo e($donor->contact_num); ?></p>
                      <p class='h6 m-0'><?php echo e($donor->email); ?></p>
                    </div>
                  </div>

                  <hr>

                  <div class='mt-3 d-flex justify-content-end'>
                    <input type="submit" value="Request" class="btn-sm shadow-none btn-success">
                  </div>
                  </form>
                </div>
          
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php else: ?>
        <div class="container bg-light d-flex justify-content-center p-4 shadow-sm">
          <h5>No Donor</h5>
        </div>
      <?php endif; ?>

  </div>

  <div class="container mt-4 shadow-sm rounded donate-blood p-0" style="display: none">
   
    <?php if(count($seekers)>0): ?>
      <?php $__currentLoopData = $seekers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seeker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($seeker->status=='Pending'): ?>
        <div class='container  mt-5 p-3 rounded shadow'>
            <div class='mt-3 d-flex justify-content-start p-2'>
              <p class='h6 m-0'><span class='text-secondary'>Requested By : </span><?php echo e($seeker->first_name); ?> <?php echo e($seeker->last_name); ?></p>
            </div>

            <hr>

            <div class='mt-3 d-flex justify-content-start p-2'>
              <p class='h6 m-0'><span class='text-dark'>Patient Information</span></p>
            </div>

            <div class=' px-4'>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Name : </span><?php echo e($seeker->last_name); ?>, <?php echo e($seeker->first_name); ?> <?php echo e($seeker->mid_name); ?></p>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Age : </span>
                <?php
                  $birth= @value($seeker->birthdate);
                  $age = \Carbon\Carbon::parse($birth)->age;
                  echo $age;
                ?>
              </p>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Gender : </span>
                <?php
                  if($seeker->gender==='m'){
                    echo "Male";
                  }else{
                    echo "Female";
                  }
                ?>
              </p>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Hospital Admitted : </span><?php echo e($seeker->hos_admit_id); ?></p>
              <div class='d-flex justify-content-start p-1'>
                <div class='mr-2'>
                  <p class='h6 m-0 text-secondary'>Contact Details : </p>
                </div>
                <div>
                    <p class='h6 m-0'><?php echo e($seeker->contact_num); ?></p>
                    <p class='h6 m-0'><?php echo e($seeker->email); ?></p>
                </div>
              </div>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Blood Type Needed : </span><?php echo e($seeker->req_blood); ?></p>
              <div class='d-flex justify-content-start p-1'>
                <div class='mr-2'>
                  <p class='h6 m-0 text-secondary'>Description :</p>
                </div>
                <div>
                  <p class='h6 m-0'><?php echo e($seeker->desc); ?></p>
                </div>
              </div>
            </div>

            <hr>

            <div class='mt-3 d-flex justify-content-end'>
              <form action="declinereq" method='post'>
                <?php echo csrf_field(); ?>
                <input type="hidden" name='req_id' value="<?php echo e($seeker->req_id); ?>">
                <input type='submit' value='Decline' class='btn-sm shadow-none btn-outline-danger mx-1' >
              </form>
              <form action="acceptreq" method='post'>
                <?php echo csrf_field(); ?>
                <input type="hidden" name='req_id' value="<?php echo e($seeker->req_id); ?>">
                <input type='submit' value='Donate' class='btn-sm shadow-none btn-success mx-1' >
              </form>
            </div>
          </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>
        <div class="container bg-light d-flex justify-content-center p-4">
            <h5>No Request</h5>
        </div>
    <?php endif; ?>
  </div>
  
</div>



<script>

  function displayContent(num){
    var find = document.querySelector(".find-blood");
    var donate = document.querySelector(".donate-blood");

    find.style.display="none";
    donate.style.display="none";
    if (num==0) {
      find.style.display="block";
    }else{
      donate.style.display="block";
    }

  }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Carlina Amaba\Desktop\New folder\blood_plus\resources\views/dashboard.blade.php ENDPATH**/ ?>