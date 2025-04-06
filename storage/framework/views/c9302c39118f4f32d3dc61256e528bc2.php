

<?php $__env->startSection('content'); ?>
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Add a New Car</h1>
    <form action="<?php echo e(route('cars.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Car Name</label>
            <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-md" value="<?php echo e(old('name')); ?>" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-4">
            <label for="model" class="block text-gray-700">Car Model</label>
            <input type="text" name="model" id="model" class="w-full p-2 border border-gray-300 rounded-md" value="<?php echo e(old('model')); ?>" required>
            <?php $__errorArgs = ['model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-4">
            <label for="rent_per_day" class="block text-gray-700">Rent per Day</label>
            <input type="number" name="rent_per_day" id="rent_per_day" class="w-full p-2 border border-gray-300 rounded-md" value="<?php echo e(old('rent_per_day')); ?>" required>
            <?php $__errorArgs = ['rent_per_day'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-4">
            <label for="status" class="block text-gray-700">Status</label>
            <select name="status" id="status" class="w-full p-2 border border-gray-300 rounded-md" required>
                <option value="available" <?php echo e(old('status') == 'available' ? 'selected' : ''); ?>>Available</option>
                <option value="rented" <?php echo e(old('status') == 'rented' ? 'selected' : ''); ?>>Rented</option>
            </select>
            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Car Image</label>
            <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-md">
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">Add Car</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Pugc\7th semester\Enterprise Application Development\rental_car\rental_car\resources\views/cars/create.blade.php ENDPATH**/ ?>