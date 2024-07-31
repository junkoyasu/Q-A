<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>予約一覧</h1>
        
        <!-- フラッシュメッセージの表示 -->
        <?php if(session('flash_message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('flash_message'), false); ?>

            </div>
        <?php endif; ?>

        <!-- エラーメッセージの表示 -->
        <?php if(session('error_message')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error_message'), false); ?>

            </div>
        <?php endif; ?>

        <?php if($reservations->isEmpty()): ?>
            <p>現在、予約はありません。</p>
        <?php else: ?>
            <table class="table">
                <head>
                    <tr>
                        <th>店名</th>
                        <th>予約日時</th>
                        <th>人数</th>
                        <th>操作</th>
                    </tr>
                </head>
                <body>
                    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($reservation->shop->name, false); ?></td>
                            <td><?php echo e($reservation->reserved_datetime, false); ?></td>
                            <td><?php echo e($reservation->number_of_people, false); ?></td>
                            <td>
                                <form action="<?php echo e(route('shops.reservations.destroy', ['shop' => $reservation->shop, 'reservation' => $reservation]), false); ?>" method="POST" onsubmit="return confirm('本当にキャンセルしますか？');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">キャンセル</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </body>
            </table>
        <?php endif; ?>

        <a href="<?php echo e(route('shops.index'), false); ?>" class="btn btn-secondary">お店一覧に戻る</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/reservations/index.blade.php ENDPATH**/ ?>