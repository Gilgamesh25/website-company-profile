 <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> 
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Profile')); ?>

        </h2>
        <h4>Profile Edit</h4>
     <?php $__env->endSlot(); ?>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <table>
               <tr>
                   <td> <img class="rounded-btn w-50 h-30" src="/image/<?php echo e($misi->image); ?>" alt=""></td>
                   <td>
                        <form class="w-full max-w-sm" method="POST"  action="<?php echo e(route('misi.update',$misi->id)); ?> " enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>   
                    <?php echo method_field('PUT'); ?> 
                    <input type="hidden" name="id" id="id" value="<?php echo e($misi->id); ?>">            
                 <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Text 
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="text" type="text" value="<?php echo e($misi->text); ?>">
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Visi
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="visi" type="text" value="<?php echo e($misi->visi); ?>">
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Misi
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="misi" type="text" value="<?php echo e($misi->misi); ?>">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name" >
                        Image
                    </label>
                    </div>
                   
                    <div class="md:w-2/3">
                   <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="image" type="file" value="<?php echo e($misi->image); ?>">
                    </div>
                </div>
                 
                
                
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                    <button class="btn btn-outline btn-primary w-full" type="submit">
                        Kirim
                    </button>
                    </div>
                </div>
            </form>
                   </td>
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
        </script><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard/misi-edit.blade.php ENDPATH**/ ?>