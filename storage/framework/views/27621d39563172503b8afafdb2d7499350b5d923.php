 
 <?php $__env->startSection('content'); ?>
  <!--  
 <div>
        <div class="swiper nagoyameshi-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo e(asset('/img/main1.jpg'), false); ?>"></div>
                <div class="swiper-slide"><img src="<?php echo e(asset('/img/main2.jpg'), false); ?>"></div>
                <div class="swiper-slide"><img src="<?php echo e(asset('/img/main3.jpg'), false); ?>"></div>
                <div class="d-flex align-items-center nagoyameshi-overlay-background">
                    <div class="container nagoyameshi-container nagoyameshi-overlay-text">
                        <h1 class="text-white nagoyameshi-catchphrase-heading">名古屋ならではの味を、<br>見つけよう</h1>
                        <p class="text-white nagoyameshi-catchphrase-paragraph">NAGOYAMESHIは、<br>名古屋市のB級グルメ専門のレビューサイトです。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
 <div class="row">
 <div class="col-12 col-md-8">
         <?php $__env->startComponent('components.centerbar', ['categories' => $categories]); ?>
         <?php echo $__env->renderComponent(); ?>
     </div>
</div>
     <div class="col-9">
     <div class="container">
             <?php if($category !== null): ?>
                 <a href="<?php echo e(route('shops.index'), false); ?>">トップ</a> > <a href="#"><?php echo e($category->name, false); ?></a> > 
                 <h1><?php echo e($category->name, false); ?>の店舗一覧<?php echo e($total_count, false); ?>件</h1>
             <?php endif; ?>
             <!--<div class="bg-light mb-4 py-4"> 
        <div class="container nagoyameshi-container">
            <h2 class="mb-3">店舗検索</h2>
            <form method="GET" action="#" class="nagoyameshi-user-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="店舗名で検索" name="keyword">
                    <button type="submit" class="btn text-white shadow-sm nagoyameshi-btn">検索</button>
                </div>
            </form>
        </div>
    </div>-->
         </div>
         <!-- <div>
             Sort By
             <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('id', 'ID'));?>
             <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('price', 'Price'));?>
         </div> -->
         <div class="container mt-4">
             <div class="row w-100">
                 <?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-3">
                     <a href="<?php echo e(route('shops.show', $shop), false); ?>">
                     <?php if($shop->image !== ""): ?>
                         <img src="<?php echo e(asset($shop->image), false); ?>" class="img-thumbnail">
                         <?php else: ?>
                         <img src="<?php echo e(asset('img/dummy.webp'), false); ?>" class="img-thumbnail">
                         <?php endif; ?>
                     </a>
                     <div class="row">
                         <div class="col-12">
                             <p class="nagoyameshi-shop-label mt-2">
                                 <?php echo e($shop->name, false); ?><br>
                                 <label>￥<?php echo e($shop->price, false); ?></label>
                             </p>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
         </div>
      
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/shops/index.blade.php ENDPATH**/ ?>