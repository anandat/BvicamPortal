<?php $__env->startSection('title', 'Student Panel'); ?>

<?php $__env->startSection('body', 'You are logged in as user.'); ?>

<?php echo e(Auth::guard('student')->user()); ?>
<?php echo $__env->make('student.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>