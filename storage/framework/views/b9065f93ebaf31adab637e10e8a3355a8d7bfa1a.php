<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8">	
					<!-- .student-info -->
					<div class="student-info">
						<?php if(Session::has('message')): ?>
						<div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
						<?php endif; ?>
						<?php if(Session::has('loi')): ?>
						<div class="alert alert-danger"><?php echo e(Session::get('loi')); ?></div>
						<?php endif; ?>
						<form action="updateinfo/<?php echo e($user->id); ?>" method="Post" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>

							<h2>Thay Đổi thông tin cá nhân</h2>
							<div class="input-container">
								<i class="fa fa-user icon"></i>
								<input class="input-field" type="text" value="<?php echo e($user->fullname); ?>" name="fullname">
							</div>

							<div class="input-container">
								<i class="fa fa-envelope icon"></i>
								<input class="input-field" type="text" placeholder="Email" name="email" readonly value="<?php echo e($user->email); ?>">
							</div>

							<div class="input-container">
								<i class="fa fa-address-card-o icon"></i>
								<input class="input-field" type="text" value="<?php echo e($user->phone); ?>" name="phone" >
							</div>

							<div class="input-container">
								<i class="fa fa-phone-square icon"></i>
								<input class="input-field" type="text" value="<?php echo e($user->hocvi); ?>" name="hocvi" >
							</div>
							<div class="input-container">
								<i class="fa fa-photo icon"></i> 
								<input class="input-field" type="file" name="avatar" placeholder="Chọn ảnh đại diện">
							</div>
							<button type="submit" class="btn">Cập Nhật</button>
						</form>
					</div>
					<!-- .student-info -->
				</div>				
				
			</div>
		</div>
		<!-- /.courses -->
	</section>

	<style type="text/css">
		* {box-sizing: border-box;}

		/* Style the input container */
		.input-container {
			display: flex;
			width: 100%;
			margin-bottom: 15px;
		}

		/* Style the form icons */
		.icon {
			padding: 10px;
			background: dodgerblue;
			color: white;
			min-width: 50px;
			text-align: center;
		}

		/* Style the input fields */
		.input-field {
			width: 100%;
			padding: 10px;
			outline: none;
		}

		.input-field:focus {
			border: 2px solid dodgerblue;
		}

		/* Set a style for the submit button */
		.btn {
			background-color: dodgerblue;
			color: white;
			padding: 15px 20px;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		}

		.btn:hover {
			opacity: 1;
		}
	</style>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/teacher/update.blade.php ENDPATH**/ ?>