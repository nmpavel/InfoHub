<?php $__env->startSection('content'); ?>
            
        
        <div class="panel panel-default" style="margin-right: 30px;">
            <div class="panel-body">
                <img src="/uploads/avatars/<?php echo e($user->avatar); ?>" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2><?php echo e($user->name); ?>'s Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"></br>
                <input type="submit" class="btn btn-primary">
            </form>
        </br>

         <a href="<?php echo e(route('profile.edit',['id'=> $user->id])); ?>" class="btn btn-success" style="margin-bottom: 10px;">Edit Profile</a></br>
              <table class="table table-hover">
                <tr>
                    <td>Name</td>
                    <td><?php echo e($user->name); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo e($user->email); ?></td>
                </tr>
                <tr>
                    <td>Point</td>
                    <td><?php echo e($user->points); ?> pts</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><?php echo e(date('d M Y', strtotime($user->date_of_birth))); ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><?php echo e($user->Contact_number); ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td class="text-capitalize"><?php echo e($user->gender); ?></td>
                </tr>
  
              </table>
  
        
</div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SUST-Archive-master\resources\views/profile.blade.php ENDPATH**/ ?>