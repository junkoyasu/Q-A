 
 <?php $__env->startSection('content'); ?>
 
    <div class="top-container">
        <img src="<?php echo e(asset('img/udon.jpg'), false); ?>" class="top-image" >
        <p class="top-font">名古屋ならではの味を、<br>見つけよう</p>
    </div>
    <div class="row">
 <div class="bg-light mb-4 py-4">
        <div class="container nagoyameshi-container">
            <h2 class="mb-3">店舗検索</h2>
            <form method="GET" action="<?php echo e(route('shop.search'), false); ?>" class="nagoyameshi-user-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="店舗名で検索" name="keyword">
                    <button type="submit" class="btn text-green shadow-sm nagoyameshi-btn">検索</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
            <?php if(isset($shops)): ?>
                <h2 class="mb-3">検索結果</h2>
                <?php if(count($shops) > 0): ?>
                    <ul>
                        <?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($shop->name, false); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php else: ?>
                    <p>該当する店舗は見つかりませんでした。</p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
     <div class="bg-light mb-4 py-4">
         <?php $__env->startComponent('components.centerbar', ['categories' => $categories]); ?>
         <?php echo $__env->renderComponent(); ?>
     </div>
     <!-- <div class="col-6"> -->
    
     <!-- </div> -->
     <div class="col-9">
         <h1>おすすめ店舗</h1>
         <div class="row">
         <?php $__currentLoopData = $recommend_shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommend_shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="col-4">
                 <a href="<?php echo e(route('shops.show', $recommend_shop), false); ?>">
                     <?php if($recommend_shop->image !== ""): ?>
                     <img src="<?php echo e(asset($recommend_shop->image), false); ?>" class="img-thumbnail">
                     <?php else: ?>
                     <img src="<?php echo e(asset('img/dummy.webp'), false); ?>" class="img-thumbnail">
                     <?php endif; ?>
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="nagoyameshi-shop-label mt-2">
                             <?php echo e($recommend_shop->name, false); ?><br>
                             <label>￥<?php echo e($recommend_shop->price, false); ?></label>
                         </p>
                     </div>
                 </div>
             </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
         </div>
 
         <h1>新着店舗</h1>
         <div class="row">
         <?php $__currentLoopData = $recently_shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recently_shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="col-3">
                 <a href="<?php echo e(route('shops.show', $recently_shop), false); ?>">
                     <?php if($recently_shop->image !== ""): ?>
                     <img src="<?php echo e(asset($recently_shop->image), false); ?>" class="img-thumbnail">
                     <?php else: ?>
                     <img src="<?php echo e(asset('img/dummy.webp'), false); ?>" class="img-thumbnail">
                     <?php endif; ?>
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="nagoyameshi-shop-label mt-2">
                             <?php echo e($recently_shop->name, false); ?><br>
                             <label>￥<?php echo e($recently_shop->price, false); ?></label>
                         </p>
                     </div>
                 </div>
             </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/web/index.blade.php ENDPATH**/ ?>