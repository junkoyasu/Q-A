<nav class="navbar navbar-expand-md navbar-light shadow-sm nagoyameshi-header-container">
   <div class="container">
     <a class="navbar-brand" href="<?php echo e(url('/'), false); ?>">
      <img src="<?php echo e(asset('img/logo.svg'), false); ?>" class="img-logo">
       <?php echo e(config('app.name', 'Laravel'), false); ?>

     </a>
     <form class="row g-1">
       <div class="col-auto">
         <!-- <input class="form-control nagoyameshi-header-search-input"> -->
       </div>
       <!-- <div class="col-auto"> -->
         <!-- <button type="submit" class="btn nagoyameshi-header-search-button"><i class="fas fa-search nagoyameshi-header-search-icon"></i></button> -->
       <!-- </div> -->
     </form>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation'), false); ?>">
       <span class="navbar-toggler-icon"></span>
     </button>
 
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ms-auto mr-5 mt-2">
         <!-- Authentication Links -->
         <?php if(auth()->guard()->guest()): ?>
         <li class="nav-item mr-5">
           <a class="nav-link" href="<?php echo e(route('register'), false); ?>"><?php echo e(__('Register'), false); ?></a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="<?php echo e(route('login'), false); ?>"><?php echo e(__('Login'), false); ?></a>
         </li>
         <hr>
         <li class="nav-item mr-5">
           <a class="nav-link" href="<?php echo e(route('login'), false); ?>"><i class="far fa-heart"></i></a>
         </li>
         <!--  
         <li class="nav-item mr-5">
           <a class="nav-link" href="<?php echo e(route('login'), false); ?>"><i class="fas fa-shopping-cart"></i></a>
         </li> -->
         <?php else: ?>
         <li class="nav-item mr-5">
           <a class="nav-link" href="<?php echo e(route('mypage'), false); ?>">
             <i class="fas fa-user mr-1"></i><label>マイページ</label>
           </a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="<?php echo e(route('mypage.favorite'), false); ?>">
             <i class="far fa-heart"></i>
           </a>
         </li>
         <?php endif; ?>
       </ul>
     </div>
   </div>
 </nav>
<?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/components/header.blade.php ENDPATH**/ ?>