<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($shop->name); ?> の予約</h1>
        <!-- フラッシュメッセージの表示 -->
        <?php if(session('flash_message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('flash_message')); ?>

            </div>
        <?php endif; ?>

        <!-- バリデーションエラーメッセージの表示 -->
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('shops.reservations.store', $shop)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="shop_id" value="<?php echo e($shop->id); ?>">
            <div class="form-group">
                <label for="reservation_date">予約日</label>
                <input type="date" id="reservation_date" name="reservation_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="reservation_time">予約時間</label>
                <input type="time" id="reservation_time" name="reservation_time" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="number_of_people">人数</label>
                <input type="number" id="number_of_people" name="number_of_people" class="form-control" required min="1" max="50">
            </div>

            <button type="submit" class="btn btn-primary">予約する</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/reservations/create.blade.php ENDPATH**/ ?>