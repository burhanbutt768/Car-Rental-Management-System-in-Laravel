

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center ">
        <div class="col-12 col-md-10 col-lg-8">

            <!-- Welcome Text -->
            <div class="text-center mb-5">
                <h1 class="display-4 font-weight-bold text-dark">Welcome to the Admin Dashboard</h1>
                <p class="lead text-muted">Manage your car rentals efficiently.</p>
            </div>

            <!-- Cards Section -->
            <div class="row g-4">
                <!-- Card 1: Manage Cars -->
                <div class="col-12 col-md-4">
                    <div class="card bg-primary text-white shadow-lg border-0 h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title mb-4 display-6">Manage Cars</h5>
                            <p class="card-text mb-4">View, edit, or remove cars from the inventory.</p>
                            <a href="<?php echo e(route('cars.index')); ?>" class="btn btn-light text-primary btn-lg mt-auto">Go to Cars</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Manage Bookings -->
                <div class="col-12 col-md-4">
                    <div class="card bg-success text-white shadow-lg border-0 h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title mb-4 display-6">Manage Bookings</h5>
                            <p class="card-text mb-4">View and manage all customer bookings and rentals.</p>
                            <a href="<?php echo e(route('admin.bookings')); ?>" class="btn btn-light text-success btn-lg mt-auto">Go to Bookings</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Add New Car -->
                <div class="col-12 col-md-4">
                    <div class="card bg-warning text-white shadow-lg border-0 h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title mb-4 display-6">Add New Car</h5>
                            <p class="card-text mb-4">Add a new car to the rental inventory with all necessary details.</p>
                            <a href="<?php echo e(route('cars.create')); ?>" class="btn btn-light text-warning btn-lg mt-auto">Add Car</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
     .container-fluid {
        padding-top: 30px;  
    }

    /* Ensure cards stretch to fill space */
    .card {
        height: 100%;
        transition: transform 0.3s ease-in-out;
    }

    /* Hover effect for card scaling */
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    /* Text styling for title */
    .card-title {
        font-size: 1.75rem;
        font-weight: 600;
    }

    /* Responsive cards for mobile */
    @media (max-width: 576px) {
        .card-title {
            font-size: 1.25rem;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Pugc\7th semester\Enterprise Application Development\rental_car\rental_car\resources\views/dashboard.blade.php ENDPATH**/ ?>