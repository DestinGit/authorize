<?php $__env->startSection('content'); ?>
	<div style="padding: 10px">
		<h1>Welcome <?php echo e($user); ?></h1>
		<small>(Your id is <?php echo e($id); ?>)</small>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yemei/Desktop/dossier sans titre/cv_projects/authorize/resources/views/user/show.blade.php ENDPATH**/ ?>