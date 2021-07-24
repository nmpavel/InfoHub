<?php $__env->startSection('content'); ?>


<!-- <form action="/result" method="post">
<input type="text" placeholder="Search for a post.."></form></br> -->
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
    </div>
</div>
<div class="form-group">
    <form action="/result_post" method="GET">
        <input type="text" name="queryPost" class="form-control" placeholder="search for a post....">
</div>
<div class="text-center">
    <button class="btn btn-success" type="submit">
        Search Post

    </button>
    </form>

</div>
</br>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <img src="/uploads/avatars/<?php echo e($p->user->avatar); ?>" alt="" width="70px" height="60px">&nbsp;&nbsp;&nbsp;
        <span><?php echo e($p->user->name); ?>, <b><?php echo e($p->created_at->diffForHumans()); ?></b></span>
        <a href="<?php echo e(route('post', ['slug' => $p->slug ])); ?>" class="btn btn-success pull-right">view</a>

    </div>


    <div class="panel-body">
        <h4 class="text-center">
            <?php echo e($p->title); ?>

        </h4>
        <p class="text-center">
            <?php echo str_limit($p->content,80); ?>

        </p>
    </div>

    <div class="panel-footer">
        <p>
            <?php echo e($p->replies->count()); ?> Replies
        </p>
    </div>
</div>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="text-center">
    <?php echo e($posts->links()); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Info Hub\resources\views/home.blade.php ENDPATH**/ ?>