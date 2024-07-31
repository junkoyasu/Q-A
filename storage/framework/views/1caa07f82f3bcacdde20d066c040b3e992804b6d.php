<div class="container">
<h1 class="h1-category">カテゴリー検索</h1>
 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
 
 <label class="nagoyameshi-centerbar-category-label"><a href="<?php echo e(route('shops.index', ['category' => $category->id]), false); ?>"><?php echo e($category->name, false); ?></a></label>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/components/centerbar.blade.php ENDPATH**/ ?>