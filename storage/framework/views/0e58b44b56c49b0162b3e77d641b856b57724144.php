<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Activities')); ?>

        </h2>
        <h4></h4>
     <?php $__env->endSlot(); ?>
    <div class="py-12 ">
        
        <div class="overflow-x-auto">
            
            <div class="overflow-x-auto"> 
                <a href="<?php echo e(route('blog.create')); ?>"><button class="btn btn-primary ml-4">Add New</button></a>
            <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 max-w-xs">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Type
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Date
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Title
                                        </th>
                                         <th class="px-6 py-2 text-xs text-gray-500">
                                            Content
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Edit
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                  
                                   <?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                           <img class="w-30 md:w-25 lg:w-30" src="/image/<?php echo e($blog->image); ?>" alt="">
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                            <?php echo e($blog->author); ?>

                                            </div>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                
                                            <?php echo e(date('d-m-Y', strtotime($blog->created_at))); ?>

                                            </div>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                            <?php echo e($blog->title); ?>

                                            </div>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                            
                                            <?php echo e(Str::limit($blog->content, 50)); ?>

                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="blog/destroy/<?php echo e($blog->id); ?>"><button class="px-4 py-1 text-sm btn btn-error">Delete</button></a>
                                        </td>
                                        <td class="px-6 py-4  ">
                                            <a href="<?php echo e(route('blog.edit',$blog->id)); ?>"><button class="px-4 py-1 text-sm btn btn-primary">Edit</button></a>
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
        </div>
    </div>  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard/blog.blade.php ENDPATH**/ ?>