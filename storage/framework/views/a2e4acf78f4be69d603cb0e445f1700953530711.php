<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Partnership')); ?>

        </h2>
        <h4>Partnership Manage</h4>
     <?php $__env->endSlot(); ?>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="<?php echo e(route('customer.create')); ?>"><button class="btn btn-primary mb-2">Add New</button></a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container flex justify-center mx-auto mt-3 ">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Name
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
                                  
                                  <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      
                                  
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4">
                                            <img class="w-60 md:w-50 lg:w-60" src="/image/<?php echo e($customer->image); ?>" alt="">
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500">
                                           <?php echo e($customer->name); ?>

                                        </td>
                                        
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <a href="customer/edit/<?php echo e($customer->id); ?>">                                           
                                            <button class="btn btn-primary px-4 py-1 text-sm">Edit</button>
                                            </a>
                                        </td>

                                         <td class="px-6 py-4 text-sm text-gray-500">
                                            <a href="customer/destroy/<?php echo e($customer->id); ?>">                                           
                                            <button class="btn btn-danger  px-4 py-1 text-sm ">Delete</button>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/dashboard/customer.blade.php ENDPATH**/ ?>