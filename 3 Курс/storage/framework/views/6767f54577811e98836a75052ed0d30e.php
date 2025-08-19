<?php $__env->startSection('content'); ?>
    <h1>Edit Post</h1>
    <form method="POST" action="<?php echo e(route('posts.update', $post->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content"><?php echo e($post->content); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Lessions\blog\resources\views/posts/edit.blade.php ENDPATH**/ ?>