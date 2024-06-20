
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Gallery Videos')); ?>

        </h2>
        <h2 class="text-xl text-blue-800"><a href="/dashboard/gallery">Fotos</a>  | <a href="/dashboard/videos">Videos</a> </h2>
     <?php $__env->endSlot(); ?>
   <div class="py-12 ">
        
        <div class="overflow-x-auto">
            
            <div class="overflow-x-auto"> 
            <a href="<?php echo e(route('videos.create')); ?>"><button class="btn btn-primary ml-3">Add New</button></a>
             <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Name
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Title
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
                                  
                                 <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4  text-gray-50	">
                                            <video class="rounded max-w-sm	 max-h-24" controls >
                                                <source src="/video/<?php echo e($gallery->video); ?>" type="video/mp4">
                                            </video>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class=" text-gray-900">
                                            <?php echo e($gallery->name); ?>

                                            </div>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class=" text-gray-900">
                                            <?php echo e($gallery->title); ?>

                                            </div>
                                        </td>
                                        <td class="px-6 py-4  ">
                                            <a href="videos/edit/<?php echo e($gallery->id); ?>"><button class="px-4 py-1  btn btn-primary">Edit</button></a>
                                        </td>
                                         <?php echo method_field('DELETE'); ?>
                                         <td class="px-6 py-4  ">
                                            <a href="videos/destroy/<?php echo e($gallery->id); ?>"><button class="px-4 py-1  btn btn-error">Delete</button></a>
                                        </td>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard/video.blade.php ENDPATH**/ ?>