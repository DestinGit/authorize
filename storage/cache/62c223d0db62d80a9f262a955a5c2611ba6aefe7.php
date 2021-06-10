<?php $__env->startSection('content'); ?>
	<div style="padding: 10px">
		<p>
			<?php echo e($name); ?> home Page
			<?php echo e(env('APP_NAME')); ?>

		</p>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yemei/Desktop/dossier sans titre/cv_projects/authorize/resources/views/auth/home.blade.php ENDPATH**/ ?>