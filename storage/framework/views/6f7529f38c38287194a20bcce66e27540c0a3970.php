<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
          <div class="panel panel-default">
              <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <th>
                            Title
                        </th>
                        <th>
                            User 
                        </th>
                      
                       
                    </thead>
    
                    <tbody>
                      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($post->title); ?> </td>
                            <!-- <td>Edit</td> -->
                            <!-- <td>Delete</td> -->
                            <td><?php echo e($post->user->name); ?></td>
                            <td><a href="<?php echo e(route('post', ['slug' => $post->slug ])); ?>" class="btn btn-primary pull-right">view</a></td>
                           
                        
                           
                            
                        </tr>



                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
    
                </table>
    
              </div>
          </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Info Hub\resources\views/result.blade.php ENDPATH**/ ?>