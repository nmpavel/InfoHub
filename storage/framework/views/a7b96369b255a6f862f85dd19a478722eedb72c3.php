<?php $__env->startSection('content'); ?>
<div class="panel-group">
<div class="panel panel-default">
    <div class="panel-heading panel-success">
    <?php if($post->user): ?>
    <img src="/uploads/avatars/<?php echo e($post->user->avatar); ?>" alt="" width="70px" height="60px">&nbsp;&nbsp;&nbsp;
    <span><?php echo e($post->user->name); ?>, <b><?php echo e($post->created_at->diffForHumans()); ?></b>, <b>(<?php echo e($post->user->points); ?>)</b></span>
    <?php $user_info = Auth::User() ?>
    <?php if( $user_info->role=="TEACHER") { ?>
    <b><a href="<?php echo e(route('post.delete', ['id' => $post->id ])); ?>" class="btn btn-danger btn-xs pull-right" >Delete</a></b>
    <?php  } ?>
    
    <?php if($post->is_being_watched_by_auth_user()): ?>

    <a href="<?php echo e(route('post.unwatch', ['id' => $post->id ])); ?>" class="btn btn-success btn-xs pull-right" style="margin-right: 10px">unwatch</a></br>

    <?php else: ?>

    <a href="<?php echo e(route('post.watch', ['id' => $post->id ])); ?>" class="btn btn-success btn-xs pull-right"style="margin-right: 10px">watch</a></br>

    <?php endif; ?>



    </div>


<div class="panel-body">
    <h4 class="text-center">
        <?php echo e($post->title); ?>

    </h4>
    <p class="text-center">
        <?php echo $post->content; ?>

    </p>

    <hr>
    <?php if($best_answer): ?>
    <div class="text-center" style="padding: 40px">
    <h3 class="text-center">BEST ANSWER</h3>

        <div class="panel panel-success">
        
        <div class="panel-heading">
            <img src="<?php echo e($best_answer->user->avatar); ?>" alt="" width= "40px" height="40px">&nbsp;&nbsp;&nbsp;
            <span> <?php echo e($best_answer->user->name); ?>, <b><?php echo e($best_answer->user->points); ?></b> </span>
        </div>
        
        <div class="panel-body">
             <?php echo e($best_answer->content); ?>

        </div>
        </div>

    </div>
    <?php endif; ?>


</div>
<?php endif; ?>

<div class="panel-footer">
    <p>
        <?php echo e($post->replies->count()); ?> Replies
    </p>
</div>
</div>
</div>



<?php $__currentLoopData = $post->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="panel panel-default">
    <div class="panel-heading">
    <img src="/uploads/avatars/<?php echo e($r->user->avatar); ?>" alt="" width="70px" height="60px">&nbsp;&nbsp;&nbsp;
    <span><?php echo e($r->user->name); ?>, <b><?php echo e($r->created_at->diffForHumans()); ?></b>,<b>(<?php echo e($r->user->points); ?>)</b></span>

    <?php if(!$best_answer): ?>
    <a href="<?php echo e(route('post.best.answer',['id'=> $r->id ])); ?>" class="btn btn-xs btn-info pull-right">Mark as Best Answer</a></br>
    <?php endif; ?>
     
   
    </div>


<div class="panel-body">
   <p class="text-center">
        <?php echo e($r->content); ?>

    </p>
</div>

<div class="panel-footer">
   
    <?php if($r->is_liked_by_auth_user()): ?>

        <a href="<?php echo e(route('reply.unlike', ['id'=> $r->id ])); ?>" class="btn btn-danger btn-xs">Unlike <span class="badge"><?php echo e($r->likes->count()); ?></span></a>

    <?php else: ?>

    <a href="<?php echo e(route('reply.like', ['id'=> $r->id ])); ?>" class="btn btn-success btn-xs">Like <span class="badge"><?php echo e($r->likes->count()); ?></span></a>

    <?php endif; ?>

</div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="panel panel-default">
    <div class="panel-body">
        <form action="<?php echo e(route('post.reply' ,['id' => $post->id ])); ?>" method="post">
        
            <?php echo e(csrf_field()); ?>

            <label for="reply">Leave a reply....</label>
            <div class="form-group">
                <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn pull-right">Leave a reply</button>
            </div>
        </form>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SUST-Archive-master\resources\views/posts/show.blade.php ENDPATH**/ ?>