<?php $__env->startSection('content'); ?>


<?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="panel panel-default">
        <div class="panel-heading">
                Create new Categories
        </div>
        </br>
        <p class="alert-success" >
						 <?php
						$message=Session::get('message');
					
						if ($message) {
							echo $message;
							Session::put('message',NULL);
						}

						?>

					</p>
        <div class="panel-body">
                <form action="<?php echo e(route('category.store')); ?>" method="post">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                      <label for="category_name">Name</label>
                      <input type="text" name="category_name" class="form-control">  
                </div>
                <div class="form-group">
                          <div class="text-center">
                                  <button class="btn btn-success" type="submit">
                                          Store Categories

                                  </button>
                          </div>
                  </div>
                  

        
        </form>
        </div>

</div>



<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Info Hub\resources\views/Categories/create.blade.php ENDPATH**/ ?>