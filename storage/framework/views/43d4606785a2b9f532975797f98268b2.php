<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@framer/motion/dist/framer-motion.umd.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .nav-hover:hover {
            transform: translateX(10px);
            transition: transform 0.2s ease-in-out;
        }
    </style>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="bg-gradient-to-br from-gray-100 to-blue-100 min-h-screen"> 
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-72 bg-gray-900 text-white p-6 flex flex-col justify-between shadow-lg">
            <div>
                <h2 class="text-2xl font-extrabold mb-8 text-indigo-400">Car Rental Admin</h2>
                <ul class="space-y-4">
                    <li><a href="<?php echo e(route('dashboard')); ?>" class="block py-2 px-4 rounded-lg bg-gray-800 text-white hover:bg-indigo-600 nav-hover">Dashboard</a></li>
                    <li><a href="<?php echo e(route('cars.index')); ?>" class="block py-2 px-4 rounded-lg bg-gray-800 text-white hover:bg-indigo-600 nav-hover">Manage Cars</a></li>
                    <li><a href="<?php echo e(route('admin.bookings')); ?>" class="block py-2 px-4 rounded-lg bg-gray-800 text-white hover:bg-indigo-600 nav-hover">Rentals</a></li>
                </ul>
            </div>
            <p class="text-xs text-gray-400">&copy; 2025 Car Rental System</p>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <nav class="bg-white shadow-md p-4 flex justify-between items-center">
                <span class="text-xl font-semibold text-gray-800">Dashboard</span>
                <div class="flex items-center space-x-4">
                    <span class="font-medium">Admin</span>
                    <a href="<?php echo e(route('admin.logout')); ?>" class="bg-indigo-500 text-white py-2 px-5 rounded-lg hover:bg-indigo-600 transition">Logout</a>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="p-8 overflow-y-auto flex-1">
                <div class="motion-safe:animate-fadeIn">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Simple animation effect for fade-in elements
            const elements = document.querySelectorAll('.motion-safe\\:animate-fadeIn');
            elements.forEach(el => {
                el.style.opacity = 0;
                el.style.transition = 'opacity 0.5s';
                setTimeout(() => el.style.opacity = 1, 100);
            });
        });
    </script>

</body>
</html>
<?php /**PATH E:\Pugc\7th semester\Enterprise Application Development\rental_car\rental_car\resources\views/layouts/app.blade.php ENDPATH**/ ?>