<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="wrapper">
	
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Thêm Mới Bộ Môn
						</h1>
						<?php if(Session::has('message')): ?>
						<div class="alert alert-danger"><?php echo e(Session::get('message')); ?></div>
						<?php endif; ?>
					</div>
					<!-- /.col-lg-12 -->
					<div class="col-lg-7" style="padding-bottom:120px">

						<form name="ajax-form" id="contact-form2" action="adddep" method="post" >
							<?php echo csrf_field(); ?>


							<div class="form-group">
								<label>Tên Bộ Môn</label>
								<input class="form-control" name="department_name" required />
							</div>

							<div class="form-group">
								<label>Địa Chỉ</label>
								<input class="form-control" name="address" required />
							</div>
							<div class="form-group">
								<label>Loại</label>
								<input class="form-control" name="typedepartment" required  />
							</div>
							
							<div class="form-group">
								<label>Số Điện Thoại</label>
								<input class="form-control"  name="phone" required=""  >							
							</div>

							

							<div class="form-group">
								<label>Website</label>
								<input class="form-control" name="website" required />
							</div>
							
							<div class="form-group">
								<input name="submit" class="btn btn-primary" value="Thêm" id="send" type="submit">
							</div>
							
						</form>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
	</div>
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/admin/page/adddep.blade.php ENDPATH**/ ?>