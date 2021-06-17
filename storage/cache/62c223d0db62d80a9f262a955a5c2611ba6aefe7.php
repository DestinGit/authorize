<?php $__env->startSection('content'); ?>
	<div style="padding: 10px">

			<?php if($user->actionAs('Admin', 'SuperAdmin')): ?>
				<pre>
					<?php echo e($user->email); ?>

					<?php echo e($user->first_name); ?>

					<?php echo e($user->last_name); ?>

					<?php echo e($user->username); ?>

				</pre>
			<?php endif; ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yemei/Desktop/dossier sans titre/cv_projects/authorize/resources/views/auth/home.blade.php ENDPATH**/ ?>