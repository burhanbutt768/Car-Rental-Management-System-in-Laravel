
<!--<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Available Cars for Rent</h1>

    <div class="grid grid-cols-3 gap-6">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-4 shadow-lg rounded-lg">
          
                <?php if($car->image): ?>
                    <img src="<?php echo e(asset('storage/' . $car->image)); ?>" alt="<?php echo e($car->name); ?>" 
                         class="w-full h-40 object-cover rounded-md mb-3">
                <?php else: ?>
                    <img src="<?php echo e(asset('images/default-car.jpg')); ?>" alt="Default Car" 
                         class="w-full h-40 object-cover rounded-md mb-3">
                <?php endif; ?>

                <h2 class="text-xl font-semibold"><?php echo e($car->name); ?> (<?php echo e($car->model); ?>)</h2>
                <p>Rent per Day: <strong>$<?php echo e($car->rent_per_day); ?></strong></p>

                <?php if($car->status == 'rented'): ?>
                    <p class="mt-2 text-red-500 font-semibold">Rented</p>
                    <button disabled class="mt-2 inline-block bg-gray-500 text-white px-4 py-2 rounded cursor-not-allowed">
                        Rent This Car
                    </button>
                <?php else: ?>
                    <a href="<?php echo e(route('rent.create', $car)); ?>" 
                       class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        Rent This Car
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> -->


<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Available Cars for Rent</h1>

    <div class="grid grid-cols-3 gap-6">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <!-- Display Car Image -->
                <?php if($car->image): ?>
                    <img src="<?php echo e(asset('storage/' . $car->image)); ?>" alt="<?php echo e($car->name); ?>" 
                         class="w-full h-40 object-cover rounded-md mb-3 cursor-pointer" 
                         onclick="openModal('<?php echo e(asset('storage/' . $car->image)); ?>')">
                <?php else: ?>
                    <img src="<?php echo e(asset('images/default-car.jpg')); ?>" alt="Default Car" 
                         class="w-full h-40 object-cover rounded-md mb-3 cursor-pointer" 
                         onclick="openModal('<?php echo e(asset('images/default-car.jpg')); ?>')">
                <?php endif; ?>

                <h2 class="text-xl font-semibold"><?php echo e($car->name); ?> (<?php echo e($car->model); ?>)</h2>
                <p>Rent per Day: <strong>$<?php echo e($car->rent_per_day); ?></strong></p>

                <!-- Show rented tag if the car is unavailable -->
                <?php if($car->status == 'rented'): ?>
                    <p class="mt-2 text-red-500 font-semibold">Rented</p>
                    <button disabled class="mt-2 inline-block bg-gray-500 text-white px-4 py-2 rounded cursor-not-allowed">
                        Rent This Car
                    </button>
                <?php else: ?>
                    <a href="<?php echo e(route('rent.create', $car)); ?>" 
                       class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        Rent This Car
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<!-- Modal Structure -->
<div id="imageModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-75 flex justify-center items-center">
    <div class="relative max-w-3xl w-full">
        <span class="absolute top-2 right-2 text-black text-3xl cursor-pointer" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" class="w-full h-auto rounded-md">
    </div>
</div>

<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
    }
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Pugc\7th semester\Enterprise Application Development\rental_car\rental_car\resources\views/customer/index.blade.php ENDPATH**/ ?>