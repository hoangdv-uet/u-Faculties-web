<?php $__env->startSection('content'); ?>
<div id="wrapper">

	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<!-- BASIC TABLE -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Quản Lý Lĩnh Vực Nghiên cứu</h3>
								<?php if(count($errors) > 0): ?>
								<div class="alert alert-danger">
									<ul>
										<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><?php echo e($error); ?></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
								<?php endif; ?>

								<?php if($message = Session::get('success')): ?>
								<div class="alert alert-success alert-block">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong><?php echo e($message); ?></strong>
								</div>
								<?php endif; ?>
								<?php if(Session::has('message')): ?>
								<div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
								<?php endif; ?>
							</div>
							<div>

								<div class="form-group">
									<table class="table">
										<tr>
											<td width="10%">
												<button class="btn btn-primary"><a href="addres" style="color: white">Thêm Lĩnh vực nghiên cứu</a></button>
											</td>
											<td width="10%">
												<button class="btn btn-primary"><a href="addlectres" style="color: white">Thêm Chủ Đề nghiên cứu</a></button>
											</td>
											<td width="80%">
												
											</td>
										</tr>
									</table>
								</div>

							</div>
							<div class="panel-body">
								<!-- /.col-lg-12 -->
								<div id="lvqt" class="tabcontent">
									<ul style="list-style-type: none;" id="tree1" class="tree"> 
										<?php $__currentLoopData = $res_f; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li class="branch">
											<a style="margin-left: 5px"><?php echo e($r->research_field); ?></a>
											<ul style="list-style-type: none;">
												<?php $__currentLoopData = $r->lecture_research; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li class="lecture_qt" data-idlec="<?php echo e($l->id); ?>">
													<?php echo e($l->name); ?>

													<a href="/deletelectres/<?php echo e($l->id); ?>" class="w3-right" style="margin-right: 60%;">
											          <span class="glyphicon glyphicon-remove" style="color: red"></span>
											        </a>
												</li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</ul> 
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
							</div>
						</div>      
					</div>
				</div>   
			</div>
		</div>         
		<!-- /.container-fluid -->
	</div>
</div>    

<link rel="stylesheet" type="text/css" href="source/css/tree.css"> 
<script type="text/javascript" src="source/js/searchteacher.js"></script>
<style type="text/css">
	.tabcontent {
		padding: 6px 12px;
		border: 1px solid #ccc;
	}
	.tree li {
		margin: 0;
		padding: 0 1em;
		line-height: 2em;
		color: #369;
		font-weight: 700;
		position: relative;
	}
	li {
		display: list-item;
		text-align: -webkit-match-parent;
	}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/admin/page/listresearch.blade.php ENDPATH**/ ?>