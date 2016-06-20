<?php $__env->startSection('content'); ?>
    <?php foreach($user as $key=>$oneUser): ?>
        <?php echo e($key.':'.$oneUser); ?> <br>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>