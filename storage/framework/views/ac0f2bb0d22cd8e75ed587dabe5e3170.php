<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Car Rental'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Navigation Bar Animation */
        nav:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease-in-out;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        /* Link Hover Effects */
        nav a:hover {
            color: #facc15;
            transition: color 0.3s ease;
        }

        /* Container Animation */
        .content-animate {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Custom Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #3b82f6;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f3f4f6;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-200 via-indigo-200 to-purple-200 min-h-screen">

    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-blue-500 to-indigo-600 p-4 shadow-lg hover:shadow-xl transition-shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="<?php echo e(route('home')); ?>" class="text-white text-2xl font-extrabold hover:text-yellow-300 transition">Rent Xpress</a>
            <ul class="flex space-x-6">
                <li><a href="<?php echo e(route('home')); ?>" class="text-white text-lg hover:underline">Home</a></li>
                <li><a href="<?php echo e(route('about')); ?>" class="text-white text-lg hover:underline">About</a></li>
                <li><a href="<?php echo e(route('contact')); ?>" class="text-white text-lg hover:underline">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mx-auto p-6 mt-6 content-animate bg-white bg-opacity-80 rounded-xl shadow-md">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</body>
</html><?php /**PATH E:\Pugc\7th semester\Enterprise Application Development\rental_car\rental_car\resources\views/layouts/customer.blade.php ENDPATH**/ ?>