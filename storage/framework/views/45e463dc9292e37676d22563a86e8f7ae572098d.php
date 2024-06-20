<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldPushContent('before-style'); ?>
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-style'); ?>
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <?php echo $__env->yieldPushContent('before-script'); ?>
    <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-script'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>