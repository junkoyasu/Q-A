 
 <?php $__env->startSection('content'); ?>
 <div class="container">
     <h1>新しいお店を追加</h1>
 
     <form action="<?php echo e(route('shops.store')); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <div class="form-group">
             <label for="shop-name">お店名</label>
             <input type="text" name="name" id="shop-name" class="form-control">
         </div>
         <div class="form-group">
             <label for="shop-description">お店説明</label>
             <textarea name="description" id="shop-description" class="form-control"></textarea>
         </div>
         <div class="form-group">
             <label for="shop-price">価格</label>
             <input type="number" name="price" id="shop-price" class="form-control">
         </div>
         <div class="form-group">
             <label for="shop-category">カテゴリ</label>
             <select name="category_id" class="form-control" id="shop-category">
                 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
         </div>
         <button type="submit" class="btn btn-success">お店を登録</button>
     </form>
 
     <a href="<?php echo e(route('shops.index')); ?>">お店一覧に戻る</a>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/shops/create.blade.php ENDPATH**/ ?>