<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Dashboard</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">
        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.6/dist/full.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <!--====== Style CSS ======-->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="<?php echo e(asset('css/tailwind.css')); ?>" />

        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="<?php echo e(mix('/js/app.js')); ?>" defer></script>
    </head>
    <body class="font-sans antialiased">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-100">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('SYq4xWO')) {
    $componentId = $_instance->getRenderedChildComponentId('SYq4xWO');
    $componentTag = $_instance->getRenderedChildComponentTagName('SYq4xWO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SYq4xWO');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('SYq4xWO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

         <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/vendor/jquery-3.5.1-min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/modernizr-3.7.1.min.js')); ?>"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!--====== Plugins js ======-->
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo e(asset('js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scrolling-nav.js')); ?>"></script>

    <!--====== wow js ======-->
    <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>

    <!--====== Particles js ======-->
    <script src="<?php echo e(asset('js/particles.min.js')); ?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    </body>

</html>
<?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/layouts/app.blade.php ENDPATH**/ ?>