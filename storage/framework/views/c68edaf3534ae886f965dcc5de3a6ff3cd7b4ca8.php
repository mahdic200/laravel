

<?php $__env->startSection('content'); ?>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum assumenda neque reiciendis similique minus molestiae, ratione necessitatibus fuga repellendus nam quasi nostrum aperiam quisquam hic animi numquam nemo quas quibusdam.
    </p>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            <?php echo e($user->email); ?>

        </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(dd($users)); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel_5.8/resources/views/home.blade.php ENDPATH**/ ?>