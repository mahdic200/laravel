<?php $__env->startSection('title', 'test'); ?>
<?php $__env->startSection('content'); ?>
    <center>
        <h1 class="display-4">
            this is a test
        </h1>
    </center>
        <?php echo $__env->make('layouts.partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <p>
            
        </p>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel_5.8/resources/views/home.blade.php ENDPATH**/ ?>