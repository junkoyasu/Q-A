<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <script src="https://kit.fontawesome.com/d660a694a3.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/nagoyameshi.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
    <?php $__env->startComponent('components.header'); ?>
    <?php echo $__env->renderComponent(); ?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php $__env->startComponent('components.footer'); ?>
         <?php echo $__env->renderComponent(); ?>
    </div>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/kadai_002/laravel-nagoyameshi/resources/views/layouts/app.blade.php ENDPATH**/ ?>