

<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Rent <?php echo e($car->name); ?> (<?php echo e($car->model); ?>)</h1>

    <?php if(session('error')): ?>
        <p class="text-red-500"><?php echo e(session('error')); ?></p>
    <?php endif; ?>

    <form action="<?php echo e(route('rent.store', $car)); ?>" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <!-- <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Start Date</label>
            <input type="date" name="start_date" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">End Date</label>
            <input type="date" name="end_date" required class="w-full p-2 border border-gray-300 rounded-md">
        </div> -->
        <div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Start Date</label>
    <input type="date" name="start_date" required 
           class="w-full p-2 border border-gray-300 rounded-md"
           min="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>">
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">End Date</label>
    <input type="date" name="end_date" required 
           class="w-full p-2 border border-gray-300 rounded-md"
           min="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>">
</div>


        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Confirm Booking
        </button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Pugc\7th semester\Enterprise Application Development\rental_car\rental_car\resources\views/customer/rent.blade.php ENDPATH**/ ?>