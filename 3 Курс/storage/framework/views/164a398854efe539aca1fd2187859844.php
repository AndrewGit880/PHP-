<?php $__env->startSection('content'); ?>
<h1>Create Post</h1>
<form method="POST" action="<?php echo e(route('posts.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Lessions\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>