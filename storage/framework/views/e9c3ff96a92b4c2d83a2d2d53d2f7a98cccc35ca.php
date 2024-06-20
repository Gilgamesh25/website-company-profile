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
        <h4>Profile Manager</h4>
     <?php $__env->endSlot(); ?>
 <div class="py-12">
            <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 w-full text-center ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            text
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            visi
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            misi
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                  
                                
                                      
                                  <?php $__currentLoopData = $misi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $misi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      
                                  
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4">
                                            <img class="rounded-btn w-50 h-50" src="/image/<?php echo e($misi->image); ?>" alt="">
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500">
                                           <?php echo e(Str::limit($misi->text,40)); ?>

                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                           <?php echo e(Str::limit($misi->visi,50)); ?>

                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                <?php echo e(Str::limit($misi->misi,50)); ?>

                                           
                                            </div>
                                        </td>
                                        
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <a href="misi/edit/<?php echo e($misi->id); ?>">                                           
                                            <button class="px-4 py-1 text-sm btn btn-error">Edit</button>
                                            </a>
                                        </td>

                                    </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard/misi.blade.php ENDPATH**/ ?>