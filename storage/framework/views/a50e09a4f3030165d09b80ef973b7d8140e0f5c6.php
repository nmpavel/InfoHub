<?php $__env->startSection('content'); ?>


<?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<div class="panel panel-default"style="background-image:url(images/backgroundapp.jpg);">
        <div class="panel-heading">
                Create a new post
        </div>
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
                <form action="<?php echo e(route('post.store')); ?>" method="post">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control">  
                </div>
                <div class="form-group">
                        <label for="category">Select a category</label>
                        <select name="category_id" id="category" class="form-control">
                                <option value="">Select Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>



                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                </div>
                <div class="form-group">
                        <label for="content">Content</label>
                        <textarea type="text" name="content" id="content" cols="5" rows="5" class="form-control">  </textarea>
                  </div>


                  <div class="form-group">
                          <div class="text-center">
                                  <button class="btn btn-success" type="submit">
                                          Store Post 

                                  </button>
                          </div>
                  </div>
                  

        
        </form>
                            </div>

</div>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SUST-Archive-master\resources\views/posts/creater.blade.php ENDPATH**/ ?>