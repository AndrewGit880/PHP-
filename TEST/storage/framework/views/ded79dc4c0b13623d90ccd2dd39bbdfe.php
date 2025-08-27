<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Статистика выполненных заказов (последние 7 дней)</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Заработано</th>
                <th>Отработано часов</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($date); ?></td>
                    <td><?php echo e(number_format($data['earnings'], 2)); ?></td>
                    <td><?php echo e(number_format($data['total_time'], 2)); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Lessions\my_orders_project\my_orders_project\resources\views/statistics/provider.blade.php ENDPATH**/ ?>