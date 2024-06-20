 <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> 
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Customer')); ?>

        </h2>
        <h4>Edit Customer( <?php echo e($customer->name); ?> )</h4>
     <?php $__env->endSlot(); ?>
    <div class="py-12 ">
         <?php if($errors->any()): ?>
            <div class="alert alert-error mb-8">
                <div class="flex-1">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current"> 
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>                         
                    </svg> 
                    <label><?php echo e($error); ?></label>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <tr>
                    <td><img class="rounded-btn w-50 h-30" src="/image/<?php echo e($customer->image); ?>" alt=""></td>
                    <td><form class="w-full max-w-sm" method="POST" action="<?php echo e(route('customer.update',$customer->id)); ?>"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                     <?php echo method_field('PUT'); ?>
                    
                
                <input type="hidden" name="id" id="id" value="<?php echo e($customer->id); ?>">
                 <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Name
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="name" type="text" value="<?php echo e($customer->name); ?>">
                    </div>
                </div>


                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Image
                    </label>
                    </div>
                    <div class="md:w-2/3">
                   <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="image" type="file" value="<?php echo e($customer->image); ?>">
                    </div>
                </div>
                 
                
                
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                    <button class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="submit">
                        Kirim
                    </button>
                    </div>
                </div>
            </form></td>
                </tr>
            </table>
        </div>
    </div>  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
 <script>
            CKEDITOR.replace( 'editor1' );
        </script><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard/customer-edit.blade.php ENDPATH**/ ?>