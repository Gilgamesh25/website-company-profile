<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="m-3">
    <div class="hero min-h-screen bg-base-200">
    <div class="text-center hero-content">
        <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">
                Welcome to Dashboard,  <?php echo e(Auth::user()->name); ?>

            </h1> 
        <p class="mb-5">
                here is the admin dashboard page, you can change the content of the web as you like 
            </p> 
        </div>
    </div>
    </div>


    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard.blade.php ENDPATH**/ ?>