<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-5">
            <h2 class="text-xl font-bold mb-5">Car Rental Admin</h2>
            <ul>
                <li class="mb-3"><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Dashboard</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Manage Cars</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Rentals</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <nav class="bg-white shadow-md p-4 flex justify-between items-center">
                <span class="text-lg font-semibold">Dashboard</span>
                <div class="flex items-center space-x-4">
                    <span>Admin</span>
                    
                    <a href="<?php echo e(route('admin.logout')); ?>" class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600">Logout</a>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="p-6">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

</body>
</html>
<?php /**PATH G:\CS7thSemester\larvel\rental_car\resources\views/layouts/app.blade.php ENDPATH**/ ?>