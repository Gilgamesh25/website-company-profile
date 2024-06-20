<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Home')); ?>

        </h2>
        <h4></h4>
     <?php $__env->endSlot(); ?>
     <div class="py-12">
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
            <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 w-full text-center ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Title
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Text
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Gambar
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                  
                                   <?php $__empty_1 = true; $__currentLoopData = $home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="whitespace-nowrap">
                                      <td class="px-6 py-4 text-sm text-gray-900">
                                           <?php echo e($home->title); ?>

                                        </td>
                                        <td>
                                            <div class="px-6 py-4 text-sm text-gray-900">
                                            <?php echo e($home->text); ?>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar">
                                            <div class="rounded-btn w-20 h-20">
                                                <img src="/image/<?php echo e($home->image); ?>">
                                            </div>
                                            </div> 
                                        </td>
                                      <td class="px-6 py-4 text-sm text-gray-900">
                                            <a href="<?php echo e(route('home.edit',$home->id)); ?>">                                           
                                            <button class="btn btn-primary">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                       <td class="text-gray-500">Halaman Masih Kosong</td>
                                   <?php endif; ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard/home.blade.php ENDPATH**/ ?>