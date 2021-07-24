<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
          <div class="panel panel-default">
              <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <th>
                            File Name
                        </th>
                        <th>
                            File description
                        </th>
                        <th>
                            Uploader
                        </th>
                      
                       
                    </thead>
    
                    <tbody>
                      <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e(str_limit($file->file_name,5)); ?></td>
                            <td> <?php echo e($file->file_description); ?> </td>
                            <td><?php echo e($file->user_name); ?></td>
                            <td><a href="<?php echo e(route('downloadFile', $file->file_name)); ?>" class="btn btn-primary btn-xs pull-right">Download</a></td> 
                            
                        
                           
                            
                        </tr>



                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
    
                </table>
    
              </div>
          </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SUST-Archive-master\resources\views/file_result.blade.php ENDPATH**/ ?>