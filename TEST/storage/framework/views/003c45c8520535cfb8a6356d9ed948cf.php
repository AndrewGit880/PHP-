<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Статистика выполненных заказов</h3>
                    <p>За последние 7 дней (<?php echo e(now()->subDays(6)->format('d.m.Y')); ?> - <?php echo e(now()->format('d.m.Y')); ?>)</p>
                </div>

                <div class="card-body">
                    <?php if($statistics->sum('total_earnings') > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Дата</th>
                                        <th>Заработано (₽)</th>
                                        <th>Отработано часов</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($stat['formatted_date']); ?></td>
                                            <td class="text-success font-weight-bold">
                                                <?php echo e(number_format($stat['total_earnings'], 2, '.', ' ')); ?> ₽
                                            </td>
                                            <td><?php echo e(number_format($stat['total_hours'], 2, '.', ' ')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot class="font-weight-bold">
                                    <tr>
                                        <td>Итого за 7 дней:</td>
                                        <td class="text-success">
                                            <?php echo e(number_format($statistics->sum('total_earnings'), 2, '.', ' ')); ?> ₽
                                        </td>
                                        <td><?php echo e(number_format($statistics->sum('total_hours'), 2, '.', ' ')); ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info">
                            <h5>Нет данных для отображения</h5>
                            <p>У вас нет подтвержденных заказов за последние 7 дней.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Lessions\orders-statistics\resources\views/statistics.blade.php ENDPATH**/ ?>