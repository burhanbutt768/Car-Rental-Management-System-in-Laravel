  

<?php $__env->startSection('content'); ?> 
<div class="bg-white p-6 rounded-lg shadow-lg">     
    <h1 class="text-2xl font-bold mb-4">All Cars</h1>      

    <a href="<?php echo e(route('cars.create')); ?>" class="mb-4 inline-block bg-blue-500 text-white p-2 rounded-md">Add New Car</a>      

    <table class="w-full table-auto">         
        <thead>             
            <tr>                 
                <th class="p-2 border-b">Image</th>                 
                <th class="p-2 border-b">Name</th>                 
                <th class="p-2 border-b">Model</th>                 
                <th class="p-2 border-b">Rent per Day</th>                 
                <th class="p-2 border-b">Status</th>                 
                <th class="p-2 border-b">Actions</th>             
            </tr>         
        </thead>         
        <tbody>             
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>             
            <tr>                 
                <td class="p-2 border-b">                     
                    <?php if($car->image): ?>                         
                        <img src="<?php echo e(asset('storage/' . $car->image)); ?>" alt="<?php echo e($car->name); ?>" class="w-16 h-16 object-cover rounded cursor-pointer" onclick="openModal('<?php echo e(asset('storage/' . $car->image)); ?>')">                     
                    <?php else: ?>                         
                        <span>No Image</span>                     
                    <?php endif; ?>                 
                </td>                 
                <td class="p-2 border-b"><?php echo e($car->name); ?></td>                 
                <td class="p-2 border-b"><?php echo e($car->model); ?></td>                 
                <td class="p-2 border-b"><?php echo e($car->rent_per_day); ?></td>                 
                <td class="p-2 border-b"><?php echo e($car->status); ?></td>                 
                <td class="p-2 border-b">                     
                    <a href="<?php echo e(route('cars.edit', $car)); ?>" class="bg-yellow-500 text-white p-2 rounded-md">Edit</a>                     
                    <form action="<?php echo e(route('cars.destroy', $car)); ?>" method="POST" class="inline-block" onsubmit="return confirmDelete()">                         
                        <?php echo csrf_field(); ?>                         
                        <?php echo method_field('DELETE'); ?>                         
                        <button type="submit" class="bg-red-500 text-white p-2 rounded-md">Delete</button>                     
                    </form>                 
                </td>             
            </tr>             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
        </tbody>     
    </table> 
</div>  

<!-- Modal --> 
<div id="imageModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">     
    <div class="bg-white p-4 rounded-lg relative">         
        <!-- Close Button (Cross) -->         
        <span class="absolute top-2 right-2 text-3xl cursor-pointer text-gray-700" onclick="closeModal()">×</span>         
        <img id="modalImage" src="" alt="Car Image" class="w-96 h-96 object-cover">     
    </div> 
</div>  

<?php $__env->stopSection(); ?>   

<script>     
    // Open modal with image     
    function openModal(imageUrl) {         
        const modal = document.getElementById('imageModal');         
        const modalImage = document.getElementById('modalImage');         
        modalImage.src = imageUrl;         
        modal.classList.remove('hidden');         
        modal.classList.add('flex');     
    }      

    // Close modal     
    function closeModal() {         
        const modal = document.getElementById('imageModal');          
        modal.classList.add('hidden');         
        modal.classList.remove('flex');     
    }      

    // Confirmation before delete     
    function confirmDelete() {         
        return confirm('Are you sure you want to delete this car?');     
    }
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Pugc\7th semester\Enterprise Application Development\rental_car\rental_car\resources\views/cars/index.blade.php ENDPATH**/ ?>