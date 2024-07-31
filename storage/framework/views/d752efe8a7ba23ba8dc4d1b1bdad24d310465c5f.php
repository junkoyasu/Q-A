 
 <?php $__env->startSection('content'); ?>
 <div class="container d-flex justify-content-center mt-3">
     <div class="w-50">
         <h1>マイページ</h1>
 
         <hr>
 
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                         <i class="fas fa-user fa-3x"></i>
                     </div>
                     <div class="col-9 d-flex align-items-center ms-2 mt-3">
                         <div class="d-flex flex-column">
                             <label for="user-name">会員情報の編集</label>
                             <p>アカウント情報の編集</p>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="<?php echo e(route('mypage.edit'), false); ?>">
                         <i class="fas fa-chevron-right fa-2x"></i>
                     </a>
                 </div>
             </div>
         </div>
 
         <hr>
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                         <i class="fas fa-credit-card fa-3x"></i>
                     </div>
                     <div class="col-9 d-flex align-items-center ms-2 mt-3">
                         <div class="d-flex flex-column">
                             <label for="user-name">クレジットカードの登録</label>
                             <p>クレジットカードの登録</p>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="<?php echo e(route('mypage.register_card'), false); ?>">
                         <i class="fas fa-chevron-right fa-2x"></i>
                     </a>
                 </div>
             </div>
             <form action="<?php echo e(route('mypage.subscribe'), false); ?>" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-primary">有料会員登録</button>
    </form>
    <form action="<?php echo e(route('mypage.unsubscribe'), false); ?>" method="post">
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-danger">有料会員退会</button>
</form>
         </div>
 
         <hr>

         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                         <i class="fas fa-lock fa-3x"></i>
                     </div>
                     <div class="col-9 d-flex align-items-center ms-2 mt-3">
                         <div class="d-flex flex-column">
                             <label for="user-name">パスワード変更</label>
                             <p>パスワードを変更します</p>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="<?php echo e(route('mypage.edit_password'), false); ?>">
                         <i class="fas fa-chevron-right fa-2x"></i>
                     </a>
                 </div>
             </div>
         </div>
 
         <hr>
 
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                         <i class="fas fa-archive fa-3x"></i>
                     </div>
                     <div class="col-9 d-flex align-items-center ms-2 mt-3">
                         <div class="d-flex flex-column">
                        
                             <label for="user-name">予約履歴</label>
                             <p>予約履歴を確認できます</p>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="<?php echo e(route('reservations.index'), false); ?>">
                         <i class="fas fa-chevron-right fa-2x"></i>
                     </a>
                 </div>
             </div>
         </div>
 
         <hr>
 
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                         <i class="fas fa-sign-out-alt fa-3x"></i>
                     </div>
                     <div class="col-9 d-flex align-items-center ms-2 mt-3">
                         <div class="d-flex flex-column">
                             <label for="user-name">ログアウト</label>
                             <p>ログアウトします</p>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="<?php echo e(route('logout'), false); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i class="fas fa-chevron-right fa-2x"></i>
                     </a>
 
                     <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" style="display: none;">
                         <?php echo csrf_field(); ?>
                     </form>
                 </div>
             </div>
         </div>
 
         <hr>
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/users/mypage.blade.php ENDPATH**/ ?>